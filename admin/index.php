<?php

include('../includes/init_admin.php');

$title = "Painel administrativo";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="nav-md">

  <div class="container body">
    <div class="main_container">

      <?php include($adminBaseDir . '/includes/sidebar.php'); ?>
      <?php include($adminBaseDir . '/includes/header.php'); ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="col right_col__mensage">
        Olá, seja bem-vindo ao painel administrativo da sua loja virtual :)
        </div>
      </div>
      <!-- /page content -->

     
      <?php include($adminBaseDir . '/includes/footer.php'); ?>
    
    </div>
  </div>

  <?php include($adminBaseDir . '/includes/scripts.php'); ?>

</body>

</html>