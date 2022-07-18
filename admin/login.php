<?php

include('../includes/init.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario WHERE loginemail = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: index.php");
    } else {
      echo "Falha ao logar! Email ou senha incorretos";
    }
  }
}

$title = "Painel administrativo - Login";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="login">

  <div class="navbar-notification">
    <div class="container">
      <div class="row">
        <div class="col">
          Esta é uma página demonstrativa e em desenvolvimento. Algumas funções não estão habilitadas. <br/>
          Login para teste: email admin@teste.com - senha: testeadmin 
        </div>
      </div>
    </div>
  </div>

  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="" method="POST">
            <h1>Acesse sua conta</h1>
            <div>
              <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>
            <div class="password">
              <input type="password" class="form-control" placeholder="Senha" id="pass" name="senha" />
              <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
            </div>
            <div>
              <button class="btn btn-default" type="submit">Entrar</button>
              <a class="reset_pass" href="#">Esqueceu sua senha?</a>
            </div>

            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <br />
            <div>
              <h1><img height=50px src="<?= BASE_URL_IMAGENS_BACKEND ?>/logo_carolina.png"> </h1>
              <p></p>
            </div>
      </div>
      </form>
      </section>
    </div>
  </div>
  </div>

  <?php include('includes/scripts.php'); ?>

</body>

</html>