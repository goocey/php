<?php
$str = '�ققققققققققققققققققققققققققققققققققققققق�';
$area1 = urlencode($str);
$length = strlen($area1);
var_dump($area1,$length, 'strlen' . strlen($str), 'mb_strlen' . mb_strlen($str));

$str2 = '%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9%82%D9';
var_dump(urldecode($str2));
