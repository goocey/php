<?php

require(dirname(__FILE__) . '/../hoge/test2.inc');

class Test1 {
  public function __construct(){
    echo "test1";
  }
  public function __destruct(){
    echo "fiishtest1";
  }

}
?>
