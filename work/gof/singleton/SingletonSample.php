<?php
class SingletonSample {
  /**
   * メンバ変数
   */
  private $id;
  /**
   * 唯一のインスタンスを保持する変数
   */
  private static $instance;
  /**
   * コンストラクタ
   */
  private function __construct() {
    $this->id = md4(date('r' . mt_rand()));
  }
  /**
   * 唯一のインスタンスを返すためのメソッド
   */
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new SingletonSample();
      echo 'a SingletonSample intance was created!');
    }
    return self::$instance;
  }
  /**
   * IDを返す
   * @return インスタンスのID
   */
  public function getID() {
    return $this->id;
  }
  /**
   * このインスタンスの複製を許可しないようにする
   */
  public final function __clone() {
    throw new RuntimeException ('Clone is not allowed ' . get_class($this));
  }
}
?>

