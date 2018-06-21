<?php

class ComentarioBase {
  private $adapter;

  public function __construct(DataBase $base) {
    $this->adapter = $base;
  }

  public function insertComentario(Comentario $com) {
    $nome = $com->getNome();
    $conteudo = $com->getConteudo();
    $strSQL = sprintf("INSERT INTO `comentarios` (`id`, `nome`, `conteudo`) VALUES (NULL, '%s', '%s');"
    , $nome, $conteudo);

    $stmt = $this->adapter->execDB($strSQL);
    return $stmt;
  }

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

  public function printComentarios(array $comments) {
    if ($comments) {
      $size = sizeof($comments);
      echo "<pre>exibindo $size comentários, do mais recente para o mais antigo.</pre>";

      foreach ($comments as $idComm => $comItem) {
        echo "<h2>". $comItem['nome'] ." disse:</h2><p>". $comItem['conteudo'] ."</p>";
      }
    } else {
      echo "<pre>sem comentários cadastrados ainda.</pre>";
    }
  }
}

?>
