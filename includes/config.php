<?php
ob_start();
session_start();

//database credentials
define('DBHOST','208.97.161.228');
define('DBUSER','laylanddev');
define('DBPASS','skavengeR7');
define('DBNAME','laylandadvisors');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
//date_default_timezone_set('Europe/London');

//load classes as needed
function __autoload($class) {

   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

}

$user = new User($db);
?>
