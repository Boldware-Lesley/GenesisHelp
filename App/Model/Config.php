<?php
$ingoreFiles = array();
$ingoreFiles[] = "Config.php";
$ingoreFiles[] = "version.php";



function list_files( & $allFiles, $path, $type, $ingore = array() ) {
	$dh = opendir( $path );
	while ( false !== ( $filename = readdir( $dh ) ) ) {

		if ( $filename !== "."
			AND $filename !== ".." ) {

			if ( is_dir( $path . $filename ) ) {
				list_files( $allFiles, $path . $filename . '/', $type, $ingore );
			} else {
				if ( preg_match( '/.' . $type . '$/', $filename ) ) {
					if ( !in_array($filename, $ingore, true)) {
						$allFiles[] = $path . $filename;
					}
				}
			}
		}
	}
}

$allFiles = array();
list_files( $allFiles, __DIR__ . '/', "php", $ingoreFiles );

foreach($allFiles as $import){
	require_once( $import );
}


