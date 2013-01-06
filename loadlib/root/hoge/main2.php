<?php

require 'inc/test1.inc';
require 'inc/hoge/test2.inc';
set_include_path(dirname(__FILE__ ) . '/../');

echo"main2\n";
print_r(get_include_path());
echo "\n";
$hoge = new Test1();
echo "\n";
$fuga = new Test2();
?>
