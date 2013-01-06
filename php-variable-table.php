<html>
  <head><title>apache php postgresql test</title></head>
  <body>
<?php
include_once ('./inc/htmltemplate_oo/htmltemplate.inc');
$connect_resource = pg_connect("dbname=php_test user=hoge password='hogehoge'");
$rtn = pg_exec($connect_resource, "select * from hogehoge");
$num = pg_numrows($rtn);
for($i=0; $i<$num; $i++){
  $vv = pg_result($rtn,$i, 0);
  $data1 = pg_result($rtn, $i, 1);
  $data2 = pg_result($rtn, $i, 2);
  $data3 = pg_result($rtn, $i, 3);
  print("$vv $data1 $data2 $data3<br>");
}
?>
</body>
</html>
