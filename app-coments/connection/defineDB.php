<?php
// definindo um banco de dados que será utilizado na aplicação web.
function __autoload($classe) {
  require '../classes/' . $classe . '.class.php';
}

$mysql = new MySQLBase('localhost', 'root', 'mengo123', 'selecaoPET');
/*
* Mudar esses campos para testar com o seu próprio banco de dados:
*
* Exemplo:
* $mysql = new MySQLBase(server, login, password, schemaName);
*/

$comentarioBase = new ComentarioBase($mysql);

?>
