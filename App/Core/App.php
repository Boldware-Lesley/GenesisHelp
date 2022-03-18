<?php

function error_handler( $errno, $errstr, $errfile, $errline )
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler

        return false;
    }

    switch ($errno) {
        case E_ERROR:
        case E_USER_ERROR:
            $jsonObj = array(
                "TYPE" => "ERROR",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "PHP_VERSION" => PHP_VERSION,
                "PHP_OS" => PHP_OS,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            exit(1);
            break;

        case E_USER_WARNING:
            $jsonObj = array(
                "TYPE" => "USER_WARNING",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;

        case E_USER_NOTICE:
            $jsonObj = array(
                "TYPE" => "USER_NOTICE",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;

        case E_COMPILE_ERROR:
            $jsonObj = array(
                "TYPE" => "COMPILE_ERROR",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;


        case E_STRICT:
            $jsonObj = array(
                "TYPE" => "STRICT",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;

        case E_RECOVERABLE_ERROR:
            $jsonObj = array(
                "TYPE" => "RECOVERABLE_ERROR",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;
        case E_USER_DEPRECATED:
            $jsonObj = array(
                "TYPE" => "USER_DEPRECATED",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;
        case E_CORE_ERROR:
            $jsonObj = array(
                "TYPE" => "CORE_ERROR",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;
        case E_PARSE:
            $jsonObj = array(
                "TYPE" => "PARSE",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);

            break;

        default:
            $jsonObj = array(
                "TYPE" => "UNKNOWN",
                "CODE" => $errno,
                "MESSAGE" => $errstr,
                "FILE" => $errfile,
                "LINE" => $errline
            );
            echo json_encode($jsonObj, JSON_THROW_ON_ERROR);
            break;
    }

    /* Don't execute PHP internal error handler */
    return true;
}

set_error_handler( 'error_handler', E_ALL );

class App {

	/*BEGIN <<Bold Code>> */

	protected $method = "index";
	protected $params = array();
	protected $controller = "home";

	protected
	function parseURL() {
		if ( isset( $_GET[ 'url' ] ) ) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_FULL_SPECIAL_CHARS));
		}
	}
	public
	function __construct()
    {
        $url = $this->parseURL();
        if (isset($url[0]) && file_exists("App/Controllers/" . strtolower($url[0]) . ".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require_once "App/Controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();
        if (isset($url[1]) && method_exists($this->controller, strtolower($url[1]))) {
            $this->method = strtolower($url[1]);
            unset($url[1]);
        }
        $this->params = $url ? array_values($url) : array();
        $meth = array($this->controller, $this->method);
        $meth($this->params);

    }
	/*END <<Bold Code>> */

}
?>