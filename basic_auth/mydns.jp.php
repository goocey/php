<?php
require_once 'vendor/autoload.php';
require_once 'HTTP/Request2.php';
require_once 'Log.php';
require_once 'mydns.jp.setting.php';

$req = new HTTP_Request2("http://www.mydns.jp/login.html");
$req->setAuth($user,$passwd, HTTP_Request2::AUTH_BASIC);
$response = $req->send();
if (200 != $response->getStatus()) {
  echo "update failed\n";
  echo $response->getBody();
} else {
  echo "update succesed\n";
  $message = $response->getBody();
  preg_match('/.*REMOTE ADDRESS:.*/', $message, $remote_add_message);
  preg_match('/\d+\.\d+\.\d+\.\d+/', $remote_add_message[0], $ipadd);
  echo "REMOTE ADDR:" . $ipadd[0] . "\n";
}
