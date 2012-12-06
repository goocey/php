<?php

require_once 'MDB2.php';
$user = 'luna';
$password = 'totugeki';
$server = 'localhost';
$db = 'luna';
//$dsn = 'mysql://'.$user.'@'.$server.'/'.$db;
$dsn = 'pgsql://'.$user.':'.$password.'@'.$server.'/'.$db;

// DB接続
$mdb2 =& MDB2::connect($dsn);

// 上記接続がエラーの場合
if (PEAR::isError($mdb2)) {
    die($mdb2->getMessage());
}

//    $mdb2->setFetchMode(MDB2_FETCHMODE_ORDERED); // デフォルト
//    $res = $mdb2->queryAll('SELECT * FROM test');


    $select_sql  = "SELECT * FROM COUNT_REQ_BY_CDATE(1)";
    $res =& $mdb2->query($select_sql);
    var_dump($res->fetchAll());

    $mdb2->disconnect();
?>

