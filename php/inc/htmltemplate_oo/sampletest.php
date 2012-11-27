<?php
// test script of sample.php
// (an example to add the original definition of tags.)
include_once("sample.inc");
$month=array(
1=>"Jan",
2=>"Feb",
3=>"Mar",
4=>"Apr",
5=>"May",
6=>"Jun",
7=>"Jul",
8=>"Aug",
9=>"Sep",
10=>"Oct",
11=>"Nov",
12=>"Dec"
);

$sel=new FormSelect("month",$month,(int) Date("m"));
$val["monthselect"]=$sel;
htmltemplate::t_include("sampletest.html",$val);
?>