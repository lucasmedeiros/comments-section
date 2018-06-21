$('#submit').on('click', function() {
  var nome = $('#nome').val();
  var conteudo = $('#conteudo').val();

  if (nome == '' || conteudo == '') {
    $('#mensagensNaTela').html('<div class="erro">Erro: Você precisa preencher os campos corretamente.</div>');
  } else {
    $.post('connection/newComment.php', {
      nome: nome,
      conteudo: conteudo
    }, function(data) {
      if (data == true) {
        $('#mensagensNaTela').html('<div class="ok">OK: Comentário feito com sucesso!</div>');
        $('#nome').val('');
        $('#conteudo').val('');
        fetch_data();
        exibe_load();
      } else {
        $('#mensagensNaTela').html('<div class="erro">Erro: Algo estranho aconteceu.</div>');
      }
    });
  }
});
