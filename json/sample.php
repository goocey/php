<?php
require_once('Services/JSON.php');

$obj =array(
  'name' => array(
  'color' => "#112233",
  'latlon' => array(array('1919','1919')),
  'hoge' => 'hoge()'
),
'e2' => array(
  'color' => "#112233",
  'latlon' => array(array('1919','1919')),
  'hoge' => 'fuge()'
),
'e3' => array(
  'color' => "#112233",
  'latlon' => array(array('1919','1919')),
  'hoge' => 'moga()'
),
'e4' => array(
  'color' => "#112233",
  'latlon' => array(array('1919','1919')),
  'hoge' => 'fuga()'
));
$json = new Services_JSON();
echo $json->encode($obj);
