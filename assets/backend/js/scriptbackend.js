$(function () {
  $('#preco').maskMoney({
    thousands: '',
    decimal: ',',
    allowZero: true
  });
  $('#precopromocional').maskMoney({
    thousands: '',
    decimal: ',',
    allowZero: true
  });
})

function validarSenha() {
  var senha = document.getElementById('password').value;
  var repSenha = document.getElementById('passwordRepeat').value;

  if (repSenha != senha) {
    alert("As senhas não conferem");
    return false;
  } else {
    
    return true;
  }
}

