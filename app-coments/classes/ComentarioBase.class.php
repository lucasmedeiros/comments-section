<?php

/**
* Classe que representa a conexão com o Banco de Dados, com a finalidade de obter
* as informações de comentários.
*/

class ComentarioBase {

  /**
  * O banco de dados utilizado.
  *
  * @var DataBase
  */
  private $adapter;

  /**
  * Construtor da classe.
  */
  public function __construct(DataBase $base) {
    $this->adapter = $base;
  }

  /**
  * Insere um novo comentário no banco de dados.
  *
  * @param Comentario $com
  * @return PDOStatement se a requisição foi feita com sucesso, senão,
  * retorna <<i>>false<<i>> ou uma <<i>>PDOException<<i>>.
  */
  public function insertComentario(Comentario $com) {
    $nome = $com->getNome();
    $conteudo = $com->getConteudo();

    $strSQL = sprintf("INSERT INTO `comentarios` (`id`, `nome`, `conteudo`) VALUES (NULL, '%s', '%s');"
    , $nome, $conteudo);
    // string com uma query SQL para inserção de um comentário.

    $stmt = $this->adapter->execDB($strSQL);
    return $stmt;
  }

  /**
  * Pega o número atual de comentários feitos.
  *
  * @return int
  */
  public function getTotalComentarios() {
    echo sizeof($this->listComentarios(""));
  }


  public function listComentarios($limit = "LIMIT 8") {
    $strSQL = sprintf("SELECT * FROM `comentarios` ORDER BY id DESC %s", $limit);
    $stmt = $this->adapter->execDB($strSQL);

    $comItems = array();
    while($row = $stmt->fetchObject()) {
      $comItems[$row->id] = array('nome' => $row->nome, 'conteudo' => $row->conteudo);
    }

    return $comItems;
  }

  /**
  * Imprime comentários na tela.
  *
  * @param array $comments Array com os comentários a serem impressos.
  * @return string
  */
  public function printComentarios(array $comments) {
    $out = "";
    if ($comments) {
      $size = sizeof($comments);
      $out = $out . "<pre>exibindo $size comentários, do mais recente para o mais antigo.</pre>";

      foreach ($comments as $idComm => $comItem) {
        $out = $out . "<h2>" . $comItem['nome'] . " disse:</h2><p>" . $comItem['conteudo'] . "</p>";
      }
    } else {
      $out = $out . "<pre>sem comentários cadastrados ainda.</pre>";
    }

    return $out;
  }
}

?>
