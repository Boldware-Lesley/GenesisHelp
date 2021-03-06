<?php

class Mail_Attachment
{

    /**
     * This is the structure object for the piece of the message body that the attachment is located it.
     *
     * @var \stdClass
     */
    protected $structure;

    /**
     * This is the unique identifier for the message this attachment belongs to.
     *
     * @var int
     */
    protected $messageId;

    /**
     * This is the ImapResource.
     *
     * @var resource
     */
    protected $imapStream;

    /**
     * This is the id pointing to the section of the message body that contains the attachment.
     *
     * @var int
     */
    protected $partId;

    /**
     * This is the attachments filename.
     *
     * @var string
     */
    protected $filename;

    /**
     * This is the size of the attachment.
     *
     * @var int
     */
    protected $size;

    /**
     * This stores the data of the attachment so it doesn't have to be retrieved from the server multiple times. It is
     * only populated if the getData() function is called and should not be directly used.
     *
     * @internal
     * @var array
     */
    protected $data;

    /**
     * This function takes in an ImapMessage, the structure object for the particular piece of the message body that the
     * attachment is located at, and the identifier for that body part. As a general rule you should not be creating
     * instances of this yourself, but rather should get them from an ImapMessage class.
     *
     * @param Message   $message
     * @param \stdClass $structure
     * @param string    $partIdentifier
     */
    public function __construct(Mail_Message $message, $structure, $partIdentifier = null)
    {
        $this->messageId  = $message->getUid();
        $this->imapStream = $message->getImapBox()->getImapStream();
        $this->structure  = $structure;

        if (isset($partIdentifier))
            $this->partId = $partIdentifier;

        $parameters = Mail_Message::getParametersFromStructure($structure);

        if (isset($parameters['filename'])) {
            $this->filename = $parameters['filename'];
        } elseif (isset($parameters['name'])) {
            $this->filename = $parameters['name'];
        }

        $this->size = $structure->bytes;

        $this->mimeType = Mail_Message::typeIdToString($structure->type);

        if (isset($structure->subtype))
            $this->mimeType .= '/' . strtolower($structure->subtype);

        $this->encoding = $structure->encoding;
    }

    /**
     * This function returns the data of the attachment. Combined with getMimeType() it can be used to directly output
     * data to a browser.
     *
     * @return string
     */
    public function getData()
    {
        if (!isset($this->data)) {
            $messageBody = isset($this->partId) ?
                imap_fetchbody($this->imapStream, $this->messageId, $this->partId, FT_UID)
                : imap_body($this->imapStream, $this->messageId, FT_UID);

            $messageBody = Mail_Message::decode($messageBody, $this->encoding);
            $this->data  = $messageBody;
        }

        return $this->data;
    }

    /**
     * This returns the filename of the attachment, or false if one isn't given.
     *
     * @return string
     */
    public function getFileName()
    {
        return (isset($this->filename)) ? $this->filename : false;
    }

    /**
     * This function returns the mimetype of the attachment.
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

	
	 /**
     * This function returns the partId of the attachment.
     *
     * @return string
     */
    public function getPartId()
    {
        return $this->partId;
    }
	
    /**
     * This returns the size of the attachment.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * This function returns the object that contains the structure of this attachment.
     * 
     * @return \stdClass
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * This function saves the attachment to the passed directory, keeping the original name of the file.
     *
     * @param  string $path
     * @return bool
     */
    public function saveToDirectory($path)
    {
        $path = rtrim($path, '/') . '/';

        if (is_dir($path))
            return $this->saveAs($path . $this->getFileName());

        return false;
    }

    /**
     * This function saves the attachment to the exact specified location.
     *
     * @param  string $path
     * @return bool
     */
    public function saveAs($path)
    {
        $dirname = dirname($path);
        if (file_exists($path)) {
            if (!is_writable($path))
                return false;
        } elseif (!is_dir($dirname) || !is_writable($dirname)) {
            return false;
        }

        if (($filePointer = fopen($path, 'wb')) == false)
            return false;

        $results = fwrite($filePointer, $this->getData());
        fclose($filePointer);

        return is_numeric($results);
    }
}
