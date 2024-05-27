<?php 
//phpinfo();
date_default_timezone_set("Asia/Kolkata");
session_start();
$domain = "localhost";
#server host name or simply leave it as it is
define("MY_DOMAIN",$domain);
#server host name or simply leave it as it is
define("PK_DB_HOST","localhost");
#Database name
define("PK_DB_NAME","byd");
#Database username
define("PK_DB_USER","root");
#Database password
define("PK_DB_PASS",'');
define("email","no-reply@webartvision.in");
define("emailhost", "host56.registrar-servers.com");
define("emailpass", "t3R#AhMy00({");
define("clientemail", "pulkitchadha004@gmail.com");
#Define real location of file
define ('RPATH', realpath(dirname(__FILE__)));
$year = Date('Y');
define("CREDIT","&copy; Lottery {$year}. All Rights Reserved.");
define("SITE_NAME","BYD ATTO 3");
define("DEV_NOTE","Design & Developed by <a style='text-decoration: none; color: inherit;' href='https://fb.com/itsme.pkarn'>Pradeep Karn</a>");
const home = "webartroot/well";
const HOME = "webartroot/well";
const STATIC_ROOT = RPATH."/static";
const STATIC_URL = home."/static";
const MEDIA_ROOT = RPATH."/media/";
const MEDIA_URL = home."/media";
$requri = isset($_SERVER['REQUEST_URI'])?rtrim($_SERVER['REQUEST_URI'], '/'):[];
$request_uri = str_replace("/".home,'',$requri, $requri);
define("REQUEST_URI",$request_uri);
// General Codes
function import($var=null,$context="",$many=false)
{
   /**
      * @context variable defiend as parameteres of the function, we can set any value to get the value on rendered page
   */ 
   $ctxObj = $context;
   if($many===true){
      include __DIR__."/".$var;
      return;
   }else{
      include_once __DIR__."/".$var;
      return;
   }
   
}
function render($template=null,$context=null)
{
   include_once __DIR__."/".$template;
}
// excerpt
   function the_excerpt($string = null, $len = 20)
   {
      if (strlen($string) >= $len) {
         return substr($string, 0, $len). " ... ";
      }
      else 
      {
            return $string;
      }
   }

if (empty($_SESSION['token'])) {
   $_SESSION['token'] = bin2hex(random_bytes(32));
}
$csrf_token = "<input type='hidden' name='csrf_token' value='{$_SESSION['token']}'>";
function csrf_token($html_attribute=''){
   $csrf_token = "<input type='hidden' {$html_attribute} name='csrf_token' value='{$_SESSION['token']}'>";
   echo $csrf_token;
}
function verify_csrf($var = null)
{
   if ($var == $_SESSION['token']) {
      $_SESSION['token'] = bin2hex(random_bytes(32));
      return true;
   }
   else {
      $_SESSION['token'] = bin2hex(random_bytes(32));
      return false;
   }
}

// form validations
function sanitize_remove_tags($data) {
  $data = strip_tags($data);
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
const sitekey = "ksjhdlks0797834hjrgfv3trk43gwugr4gui";
const token_security = false;