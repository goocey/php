<?php
class test1{
  public function createmessage(){
    $message = 'test1';
    return $message;
    }
}
class test2 extends test1{
  function createmessage(){
    $message = "test2";
  }
  public function __construct(){
    print $this->createmessage();
  }
}

$test = new test2();
?>

