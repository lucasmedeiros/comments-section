<?php
require 'DataBase.interface.php';

class MySQLBase implements DataBase {

  private $host;
  private $user;
  private $pass;
  private $db;
  private $base;

  public function __construct($host, $user, $pass, $db) {
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->db = $db;

    $this->open();
  }

  public function open() {
    $dsn = sprintf('mysql:host=%s;dbname=%s', $this->host, $this->db);

    try {
      $this->base = new PDO($dsn, $this->user, $this->pass);
    } catch (PDOException $e) {
      echo "Erro ao estabelecer conexão com o banco de dados.";
    }
  }

  public function close() {
    $this->base = null;
  }

  public function execDB($strSQL) {
    $stmt = $this->base->prepare($strSQL);
    $stmt->execute();
    return $stmt;
  }
}

?>
