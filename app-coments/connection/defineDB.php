<?php

function __autoload($classe) {
  require '../classes/' . $classe . '.class.php';
}

$mysql = new MySQLBase('localhost', 'root', 'password', 'selecaoPET');
// mudar esses campos para testar com o seu banco de dados.

$comentarioBase = new ComentarioBase($mysql);

?>
