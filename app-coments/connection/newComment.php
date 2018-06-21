<?php
if (isset($_POST)) {
  require 'defineDB.php';

  $postsArray = filter_input_array(INPUT_POST, array(
    'nome' => FILTER_SANITIZE_STRING,
    'conteudo' => FILTER_SANITIZE_STRING
  ));

  $posts = array_map("strip_tags", $postsArray);

  $commentObj = new Comentario($posts['nome'], $posts['conteudo']);

  if ($comentarioBase->insertComentario($commentObj)) {
    echo true;
  } else {
    echo false;
  }
}
?>
