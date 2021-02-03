<?php

class BancoDados {
  private static $instance = null;
  private $conn;
  
  /*private $host = 'localhost';
  private $user = 'id15455077_estherrodrigues';
  private $pass = 'qr/Rt_FB4J+c@J^i';
  private $dbname = 'id15455077_banconovo';*/

  private $host = 'localhost';
  private $user = 'id15455077_esther_rodrigues';
  private $pass = '<}-6V{E%skE3TSJ}';
  private $dbname = 'id15455077_lojinha_ceel';
   
   
  private function __construct() {
    $opcoes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    try {
        $linha = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $this->conn = new PDO($linha, $this->user, $this->pass, $opcoes);
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
  }
  
  public static function getInstance() {
    if(!self::$instance){
      self::$instance = new BancoDados();
    }
   
    return self::$instance;
  }
  
  public function getConnection() {
    return $this->conn;
  }
}
