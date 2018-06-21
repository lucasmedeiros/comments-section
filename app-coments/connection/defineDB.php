<?php

function __autoload($classe) {
  require '../classes/' . $classe . '.class.php';
}

$mysql = new MySQLBase('localhost', 'root', 'pass', 'selecaoPET');
$comentarioBase = new ComentarioBase($mysql);

?>
