<?php
require_once '../../pc/inc/info.php';
class Test2 { 
  function __construct(){
    echo "test2";
  }
  function __destruct(){
    echo "test2finish";
  }
}
?>
