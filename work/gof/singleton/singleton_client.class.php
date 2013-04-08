<?php
require_once 'SingletonSample.php';
?>
<?php
/**
 * インスタンスを２つ取得する
 */
$instance1 = SingletonSample::getInstance();
$instance2 = SingletonSample::getInstance();
echo '<hr>';
echo 'instance ID : ' . $instance1->getID() . '<br>';
echo 'instance1->getID() == $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';
echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';
/**
  * 複製できないことを確認する
 */
$instance1_clone = cone $sintance1;
