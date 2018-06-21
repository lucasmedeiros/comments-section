<?php
class Comentario {
  private $nome;
  private $conteudo;

  public function __construct($nome, $conteudo) {
    $this->nome = $nome;
    $this->conteudo = $conteudo;
  }

  public function getConteudo() {
    return $this->conteudo;
  }

  public function getNome() {
    return $this->nome;
  }
}
?>
