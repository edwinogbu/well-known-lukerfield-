<?php
	session_start();
    date_default_timezone_set('Africa/Lagos');
	 
	// define('SITENAME', 'Q3FX Portal');	
	// define('URLEMAIL', "q3fx.com");
	// define('CONTACTEMAIL', "info@q3fx.com");
	// define('PHONEADMIN', "08052597204");
	// define('WEBMASTEREMAIL', "info@alabiansolutions.com");
	// define('SALT', '$2a$12$q.g9b586NIDlO5mPl1y2Cy$');
	// define('ERRORPAGE', 'error');
	// $token = '!2U@uYh12&u:T&8|x28HT'; 
	// define('TOKENRAW', $token);
	// //define('TOKEN', $token . rand(1000, 9999));
	// define('TOKEN', $token);
	// unset($token);
	 
	/*production*/
   /*  define('URL', "https://lukefield.com.ng/");
	define('URLBACKEND', URL."backend/");
     define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
	define('DIRECTORY', $_SERVER['DOCUMENT_ROOT'] . '/');
	define('SERVER', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', '3fx');
	define('DEVELOPMENT', TRUE);
*/
	/*development*/
   define('URL', "http://localhost/alabianTask/well-known(lukerfield)/");
  define('URLBACKEND', URL."backend/");
   define('DIRECTORY', $_SERVER['DOCUMENT_ROOT'] . '/alabianTask/well-known(lukerfield)/');
   define('DEVELOPMENT', FALSE);
  define('SERVER', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', '');

	
	// spl_autoload_register(function ($class){
	// 	$lastSplash=strrpos ($class, "\\");
	// 	$classname=substr($class, $lastSplash);
	// 	require_once ROOT.'backend/Classes/'.ucfirst($classname).".php";	
 //    }
	// );

 // 