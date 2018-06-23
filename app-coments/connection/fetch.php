<?php
if (isset($_POST)) {
  require 'defineDB.php';

  $limit = "";
  if (isset($_POST['load'])) {
    $limit =  $_POST['load'];
  }

  $arrayComentarios = $comentarioBase->listComentarios($limit);
  echo $comentarioBase->printComentarios($arrayComentarios);
}
?>
