<?php

class Mail_Server {
	/**
	 * When SSL isn't compiled into PHP we need to make some adjustments to prevent soul crushing annoyances.
	 *
	 * @var bool
	 */
	public static $sslEnable = true;

	/**
	 * These are the flags that depend on ssl support being compiled into imap.
	 *
	 * @var array
	 */
	public static $sslFlags = array( 'ssl', 'validate-cert', 'novalidate-cert', 'tls', 'notls' );

	/**
	 * This is used to prevent the class from putting up conflicting tags. Both directions- key to value, value to key-
	 * are checked, so if "novalidate-cert" is passed then "validate-cert" is removed, and vice-versa.
	 *
	 * @var array
	 */
	public static $exclusiveFlags = array( 'validate-cert' => 'novalidate-cert', 'tls' => 'notls' );

	/**
	 * This is the domain or server path the class is connecting to.
	 *
	 * @var string
	 */
	protected $serverPath;

	/**
	 * This is the name of the current mailbox the connection is using.
	 *
	 * @var string
	 */
	protected $mailbox = '';

	/**
	 * This is the username used to connect to the server.
	 *
	 * @var string
	 */
	protected $username;

	/**
	 * This is the password used to connect to the server.
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * This is an array of flags that modify how the class connects to the server. Examples include "ssl" to enforce a
	 * secure connection or "novalidate-cert" to allow for self-signed certificates.
	 *
	 * @link http://us.php.net/manual/en/function.imap-open.php
	 * @var array
	 */
	protected $flags = array();

	/**
	 * This is the port used to connect to the server
	 *
	 * @var int
	 */
	protected $port;

	/**
	 * This is the set of options, represented by a bitmask, to be passed to the server during connection.
	 *
	 * @var int
	 */
	protected $options = 0;

	/**
	 * This is the resource connection to the server. It is required by a number of imap based functions to specify how
	 * to connect.
	 *
	 * @var resource
	 */
	protected $imapStream;

	/**
	 * This is the name of the service currently being used. Imap is the default, although pop3 and nntp are also
	 * options
	 *
	 * @var string
	 */
	protected $service = 'imap';

	/**
	 * This constructor takes the location and service thats trying to be connected to as its arguments.
	 *
	 * @param string      $serverPath
	 * @param null|int    $port
	 * @param null|string $service
	 */
	public
	function __construct( $serverPath, $port = 143, $service = 'imap', $username, $password ) {
		$this->serverPath = $serverPath;

		$this->port = $port;

		switch ( $port ) {
			case 143:
				$this->setFlag( 'novalidate-cert' );
				break;

			case 993:
				$this->setFlag( 'ssl' );
				break;
		}

		$this->service = $service;
		$this->username = $username;
		$this->password = $password;
	}

	/**
	 * This function creates or reopens an imapStream when called.
	 *
	 */
	protected
	function setImapStream() {
		if ( isset( $this->imapStream ) ) {
			if ( !imap_reopen( $this->imapStream, $this->getServerString(), $this->options, 1 ) )
				throw new RuntimeException( imap_last_error() );
		} else {
			$imapStream = imap_open( $this->getServerString(), $this->username, $this->password, $this->options, 1 );

			if ( $imapStream === false )
				throw new RuntimeException( imap_last_error() );

			$this->imapStream = $imapStream;
		}
	}

	/**
	 * This function gets the current saved imap resource and returns it.
	 *
	 * @return resource
	 */
	public
	function getImapStream() {
		if ( !isset( $this->imapStream ) )
			$this->setImapStream();

		return $this->imapStream;
	}

	/**
	 * This function takes in all of the connection date (server, port, service, flags, mailbox) and creates the string
	 * thats passed to the imap_open function.
	 *
	 * @return string
	 */
	public
	function getServerString() {
		$mailboxPath = $this->getServerSpecification();

		if ( isset( $this->mailbox ) )
			$mailboxPath .= $this->mailbox;

		return $mailboxPath;
	}


	/**
	 * Returns the server specification, without adding any mailbox.
	 *
	 * @return string
	 */
	public
	function getServerSpecification() {
		$mailboxPath = '{' . $this->serverPath;

		if ( isset( $this->port ) )
			$mailboxPath .= ':' . $this->port;

		if ( $this->service !== 'imap' )
			$mailboxPath .= '/' . $this->service;

		foreach ( $this->flags as $flag ) {
			$mailboxPath .= '/' . $flag;
		}

		$mailboxPath .= '}';

		return $mailboxPath;
	}


	/**
	 * This returns the number of messages that the current mailbox contains.
	 *
	 * @return int
	 */
	public
	function total_Messages() {
		$res = @imap_num_msg( $this->getImapStream() );
		if ( empty( $res ) ) {
			$res = 0;
		}
		return $res;
	}


	/**
	 * This function returns an array of ImapMessage object for emails that fit the criteria passed. The criteria string
	 * @param  string   $criteria
	 * @param  null|int $limit
	 * @return array    An array of ImapMessage objects
	 */
	public
	function search( $criteria = 'ALL', $limit = null ) {
		if ( $results = @imap_search( $this->getImapStream(), $criteria, SE_UID ) ) {
			if ( isset( $limit ) && count( $results ) > $limit )
				$results = array_slice( $results, 0, $limit );

			$messages = array();

			foreach ( $results as $messageId ) {
				if ( !empty( $messageId ) ) {
					$messages[] = new Mail_Message( $messageId, $this );
				}
			}

			return $messages;
		}

        return array();
    }


	/**
	 * This function returns the recently received emails as an array of ImapMessage objects.
	 *
	 * @param  null|int $limit
	 * @return array    An array of ImapMessage objects for emails that were recently received by the server.
	 */
	public function getRecentMessages( $limit = null ) {
		return $this->search( 'Recent', $limit );
	}

	/**
	 * This function returns the recently received emails as an array of ImapMessage objects.
	 *
	 * @param  null|int $limit
	 * @return array    An array of ImapMessage objects for emails that were recently received by the server.
	 */
	public function getUnseenMessages( $limit = null ) {
		return $this->search( 'Unseen', $limit );
	}


	/**
	 * Returns the emails in the current mailbox as an array of ImapMessage objects.
	 *
	 * @param  null|int  $limit
	 * @return Message[]
	 */
	public
	function getMessages( $limit = null ) {
		$numMessages = $this->total_Messages();

		if ( isset( $limit ) && is_numeric( $limit ) && $limit < $numMessages )
			$numMessages = $limit;

		if ( $numMessages < 1 )
			return array();

		$stream = $this->getImapStream();
		$messages = array();
		for ( $i = 1; $i <= $numMessages; $i++ ) {
			$uid = @imap_uid( $stream, $i );
			if ( !empty( $uid ) ) {
				$messages[] = new Mail_Message( $uid, $this );
			}
		}

		return $messages;
	}


	/**
	 * Returns the requested email or false if it is not found.
	 *
	 * @param  int  $uid
	 * @return Message|Null
	 */
	public
	function getMessageByUid( $uid ) {
		try {
            return new Mail_Message( $uid, $this );
		} catch ( Exception $e ) {
			return null;
		}
	}


	/**
	 * This function removes all of the messages flagged for deletion from the mailbox.
	 *
	 * @return bool
	 */
	public
	function expunge() {
		return ( boolean )@imap_expunge( $this->getImapStream() );
	}

	/**
	 * Checks if the given mailbox exists.
	 *
	 * @param $mailbox
	 *
	 * @return bool
	 */
	public
	function hasMailBox( $mailbox ) {
		return ( boolean )@imap_getmailboxes(
			$this->getImapStream(),
			$this->getServerString(),
			$this->getServerSpecification() . $mailbox
		);
	}

	/**
	 * Creates the given mailbox.
	 *
	 * @param $mailbox
	 *
	 * @return bool
	 */
	public
	function createMailBox( $mailbox ) {
		if ( @imap_createmailbox( $this->getImapStream(), $this->getServerSpecification() . $mailbox ) ) {
			return true;
		}

        return false;
    }

	public
	function getMailBox() {
		return $this->mailbox;
	}

	/**
	 * This function sets or removes flag specifying connection behavior. In many cases the flag is just a one word
	 * deal, so the value attribute is not required. However, if the value parameter is passed false it will clear that
	 * flag.
	 *
	 * @param string           $flag
	 * @param null|string|bool $value
	 */
	public
	function setFlag( $flag, $value = null ) {
		if ( !self::$sslEnable && in_array($flag, self::$sslFlags, true))
			return;

		if ( isset( self::$exclusiveFlags[ $flag ] ) ) {
			$kill = self::$exclusiveFlags[ $flag ];
		} elseif ( $index = array_search($flag, self::$exclusiveFlags, true)) {
			$kill = $index;
		}

		if ( isset( $kill ) && false !== $index = array_search($kill, $this->flags, true))
			unset( $this->flags[ $index ] );

		$index = array_search($flag, $this->flags, true);
		if ( isset( $value ) && $value !== true ) {
			if ( $value == false && $index !== false ) {
				unset( $this->flags[ $index ] );
			} elseif ( $value != false ) {
				$match = preg_grep( '/' . $flag . '/', $this->flags );
				if ( reset( $match ) ) {
					$this->flags[ key( $match ) ] = $flag . '=' . $value;
				} else {
					$this->flags[] = $flag . '=' . $value;
				}
			}
		} elseif ( $index === false ) {
			$this->flags[] = $flag;
		}
	}

	/**
	 * This function sets the mailbox to connect to.
	 *
	 * @param string $mailbox
	 * @return bool
	 */
	public
	function setMailBox( $mailbox = '' ): bool
    {
		if ( !$this->hasMailBox( $mailbox ) ) {
            return false;
        }

		$this->mailbox = $mailbox;
		if ( isset( $this->imapStream ) ) {
			$this->setImapStream();
		}

		return true;
	}

}