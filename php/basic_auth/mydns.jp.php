<?php
require_once 'HTTP/Request2.php';
require_once 'Log.php';
require_once 'mydns.jp.setting.php';

$req = new HTTP_Request2("http://www.mydns.jp/login.html");
$req->setAuth($user,$passwd, HTTP_Request2::AUTH_BASIC);
$response = $req->send();
echo $response->getBody();

//$conf = array('mode' => 06444, 'timeFormat' => '%X %x');
//if(PEAR::isError($response)) {
//  echo "error";
//  $err_log = &Log::singleton('file', 'error_log', $response->getMessage());
//} else {
//  echo "success";
//  $acess_log = &Log::singleton('file', 'error_log', $req->getResponseBody());
//}
