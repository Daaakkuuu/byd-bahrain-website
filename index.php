<?php

require_once 'vendor/autoload.php';
require_once(__DIR__."/config.php");
require_once(__DIR__."/settings.php");
import("/includes/class-autoload.inc.php");
import("functions.php");
define("direct_access", 1);
// import('vendor/autoload.php');
if (isset($_COOKIE['language'])) {
  $language = $_COOKIE['language'];
} else {
  $language = 'ar';
  setcookie("language", "ar", time() + (86400 * 30 * 12), "/");
}
define('language',$language);
import('language.php');
define('LANG', $GLOBALS['lang']);

$home = home;
define('RELOAD',js("location.reload();"));
$acnt = new Account;
$acnt = $acnt->getLoggedInAccount();
define('USER',$acnt);
$checkaccess = ['admin','subadmin'];
if (authenticate()==true) {
  if (isset(USER['user_group'])) {
    $pass = in_array(USER['user_group'],$checkaccess);
    define('PASS',$pass);
  }else{
    $pass = false;
    define('PASS',$pass);
  }
}else{
  $pass = false;
  define('PASS',$pass);
}

import("routes/routes.php");

// Login via cookie



// class MyServer implements \Ratchet\MessageComponentInterface {
//     public function onOpen(\Ratchet\ConnectionInterface $conn) {
//         // Called when a new connection is opened
//     }

//     public function onClose(\Ratchet\ConnectionInterface $conn) {
//         // Called when a connection is closed
//     }

//     public function onError(\Ratchet\ConnectionInterface $conn, \Exception $e) {
//         // Called when an error occurs
//     }

//     public function onMessage(\Ratchet\ConnectionInterface $from, $msg) {
//         // Called when a message is received
//     }
// }


