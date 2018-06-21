function mostrarBotaoLoad($mostrar = false) {
  if ($mostrar == false) {
    $('#load').hide();
  } else {
    $('#load').show();
  }
}

$('#load').on('click', function() {
  beforeSend: $(this).hide();

  $.ajax({
    url: "connection/fetch.php",
    method: "POST",
    data: "load=",
    success: function(data) {
      $('#comentarios').html(data);
    }
  });
});
