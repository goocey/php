<?php
require_once 'MDB2.php';

class Mdb2Wrapper {
    protected $dsn;
    protected $sql;
    protected $params;
    protected $handler;

    public function __construct() {
        $this->dsn = null;
        $this->sql = null;
        $this->params = null;
        $this->handler = null;
    }


    /**
     * Dsnをセット
     *
     * @param string $user
     * @param string $password
     * @param string $server
     * @param string $db
     *
     * return boolean Dsnのセット成功/失敗
     */
    public function setDsn($user,$password, $server, $db) {
        if ($this->dsn === null) {
            $this->dsn = 'pgsql://'.$user.':'.$password.'@'.$server.'/'.$db;
        } else {
            return false;
        }
        return true;
    }

    /**
     * dbに接続
     *
     * return boolean 接続の成功/失敗
     */
    public function connect() {
        if(isset($this->dsn)) {
            $this->dbhandler =& MDB2::connect($this->dsn);
            if (PEAR::isError($this->dbhandler)) {
                die($this->dbhandler->getMessage());
            }
            return true;
        }
        return false;
    }

    /**
     * ストアドプロシージャ設定
     *
     * @param string $funcname
     */
    public function setFunction($funcname = 'COUNT_REQ_BY_CDATE') { 
        $this->function = $funcname;
    }

    /**
     * パラメータのセット
     *
     * @param array $params ストアドプロシージャに渡す変数
     */
    public function setParams($params) {
        if (is_array($params)) {
            $this->params = $params;
            return true;
        }
        return false;
    }

    /**
     * SQL生成
     *
     */
    public function buildSQL() {
        $sql = "SELECT * FROM " . $this->function . " ( 1 )" ;
        /*
        foreach ($this->params as $key => $value) {
            if (count($this->params) == $key) {
                $sql =+ $value;
            } else {
                $sql =+ $value . ',';
            }
        }
         */
        $this->sql = $sql;
    }

    /**
     * SQL実行結果の取得
     *
     * return SQL実行結果(配列)
     */
    public function execSQL() {
        $res =& $this->dbhandler->query($this->sql);
        if (PEAR::isError($res)) {
            die($res->getMessage());
        }

        $this->dbhandler = $res;
        // $mdb2->setFetchMode(MDB2_FETCHMODE_ORDERED); // デフォルト
        return $res->fetchAll();
    }

    /**
     * DBに切断
     *
     * return boolean 正常に切断 成功 / 失敗
     */
    public function disconnect() {
        $this->dbhandler->disconnect();
    }
}
?>
