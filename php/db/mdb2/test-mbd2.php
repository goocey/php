<?php

require_once 'MDB2.php';
require_once dirname(__FILE__) . '/Mdb2Wrapper.php';
$user = 'luna';
$password = 'totugeki';
$server = 'localhost';
$db = 'luna';

$mdb = new Mdb2Wrapper();
$mdb->setDsn($user,$password,$server,$db);
var_dump($mdb->connect());
$mdb->setFunction();
$mdb->setParams(array('param' => 1));
$mdb->buildSQL();
//var_dump($mdb->execSQL());

?>
