<!DOCTYPE html>
<html>
  <head>
    <title>SISTEMA DE COMENTARIOS</title>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="comentarios"></div>

    <a href="javascript:void(0);" id="load" class="btn">Carregar todos os comentarios</a>
    <span class="restante" id="id_restante"></span>

    <div id="mensagensNaTela"></div>

    <div id="formulario">
      <form action="" method="post" enctype="multipart/form-data">
        <label>
          <span>Seu nome:</span>
          <input type="text" name="nome" id="nome"/>
        </label>
        <h1></h1>
        <label>
          <span>Comentario:</span>
          <textarea name="conteudo" id="conteudo" rows="5" cols="30"></textarea>
        </label>

        <input type="button" id="submit" value="Comentar" class="btn">
      </form>

    </div>

    <div id="formulario">

    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/fetch.js"></script>
    <script type="text/javascript" src="js/submit.js"></script>
    <script type="text/javascript" src="js/load.js"></script>
  </body>
</html>
