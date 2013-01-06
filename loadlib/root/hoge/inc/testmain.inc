<?php

class Testmain{
  public function __construct(){
    echo "load testmain";
  }
  public function __destruct(){
  }
  public function pdir(){
    $tdir = dirname(__FILE__);
    $inc_target = dirname(__FILE__) . "/../../../pc/inc/info.inc";
    include($inc_target);
  }
}

?>
