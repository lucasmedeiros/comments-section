function exibe_load() {
  $.ajax({
    url: "connection/numberOfComments.php",
    method: "POST",
    success: function(data) {
      if (data <= 5) {
        mostrarBotaoLoad(false);
      } else {
        mostrarBotaoLoad(true);
      }
    }
  });
}

function fetch_data() {
  $.ajax({
    url: "connection/fetch.php",
    method: "POST",
    data: "load=LIMIT 5",
    success: function(data) {
      $('#comentarios').html(data);
    }
  });
}
fetch_data();
exibe_load();
