<?php
/**
* Classe que representa um comentário feito por um usuário na página.
*
*/

class Comentario {
  /**
  * Nome do comentário.
  *
  * @var string
  */
  private $nome;

  /**
  * Conteúdo do comentário.
  *
  * @var string
  */
  private $conteudo;

  /**
  * Construtor de um objeto Comentario.
  *
  */
  public function __construct($nome, $conteudo) {
    $this->nome = $nome;
    $this->conteudo = $conteudo;
  }

  // Getters para conteúdo e nome.

  public function getConteudo() {
    return $this->conteudo;
  }

  public function getNome() {
    return $this->nome;
  }
}
?>
