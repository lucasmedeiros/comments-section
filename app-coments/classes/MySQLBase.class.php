<?php
require 'DataBase.interface.php';

/**
* Implementação de um DataBase, que representa um banco de dados MySQL.
*/

class MySQLBase implements DataBase {

  /**
  * Servidor utilizado que hospeda o banco de dados.
  *
  * @var string
  */
  private $host;

  /**
  * Login do user do servidor.
  *
  * @var string
  */
  private $user;

  /**
  * Senha de acesso ao servidor.
  *
  * @var string
  */
  private $pass;

  /**
  * Nome do schema MySQL utilizado.
  *
  * @var string
  */
  private $db;

  /**
  * Objeto que vai fazer as conexões diretas com o servidor e o banco de dados.
  *
  * @var PDO
  */
  private $base;

  /**
  * Construtor da classe
  *
  */
  public function __construct($host, $user, $pass, $db) {
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->db = $db;

    $this->open();
  }

  /**
  * Abre a conexão com o banco de dados.
  *
  */
  public function open() {
    $dsn = sprintf('mysql:host=%s;dbname=%s', $this->host, $this->db);

    try {
      $this->base = new PDO($dsn, $this->user, $this->pass);
    } catch (PDOException $e) {
      echo "Erro ao estabelecer conexão com o banco de dados.";
    }
  }

  /**
  * Fecha a conexão com o banco de dados.
  *
  */
  public function close() {
    $this->base = null;
  }

  /**
  * Prepara e executa uma requisição SQL a partir de uma String.
  *
  * @param string $strSQL
  * @return PDOStatement se a requisição foi feita com sucesso, senão,
  * retorna <<i>>false<<i>> ou uma <<i>>PDOException<<i>>.
  */
  public function execDB($strSQL) {
    $stmt = $this->base->prepare($strSQL);
    $stmt->execute();
    return $stmt;
  }
}

?>
