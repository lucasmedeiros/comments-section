<?php

function __autoload($classe) {
  require '../classes/' . $classe . '.class.php';
}

$mysql = new MySQLBase('localhost', 'root', 'mengo123', 'selecaoPET');
$comentarioBase = new ComentarioBase($mysql);

?>
