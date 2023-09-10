// Aguarde 5 segundos e, em seguida, remova a mensagem de erro
setTimeout(function () {
  var erros = document.getElementById('erros');
  if (erros) {
      erros.style.display = 'none';
  }
}, 5000); // 5000 milissegundos (5 segundos)