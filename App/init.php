<?php
require_once( __DIR__ . '/Extras/actions.php' );
require_once( __DIR__ . '/Model/Config.php' );
require_once( __DIR__ . '/Core/App.php' );
require_once( __DIR__ . '/Core/Controller.php' );
require_once( __DIR__ . '/Extras/settings.php' );


try {
	/*if ( !isset( $app_server ) ) {
		header( 'Location: ' . pathUrl() . '../Setup/index.php' );
	}elseif ( !isset( $database_server ) ) {
		header( 'Location: ' . pathUrl() . '../Setup/index.php' );
	}else{
		if ( empty( $database_server->Database)  |  empty( $database_server->User) ) {
	
			header( 'Location: ' . pathUrl() . '../Setup/index.php' );
		}
		
	}*/
} catch ( PDOException $ex ) {
	header( 'Location: ' . pathUrl() . '../Setup/index.php' );
}

$app = new App();
?>