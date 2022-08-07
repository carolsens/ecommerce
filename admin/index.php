<?php

include('../includes/init_admin.php');

$title = "Painel administrativo";

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],


        <?php
        $sqlNomesCategorias = "SELECT DISTINCT categoria.nome, categoria.id FROM produto
              LEFT JOIN categoria ON (produto.id_categoria = categoria.id)";

        $nomeCategorias = $mysqli->query($sqlNomesCategorias);
        foreach ($nomeCategorias as $nomeCategoria) {

          $nome = $nomeCategoria['nome'];
          $idCategoria = $nomeCategoria['id'];



          $sqlContadorCategorias = "SELECT COUNT(produto.id) totalPorCategoria FROM produto
              WHERE produto.id_categoria = '$idCategoria'";

          $contadorCategorias = $mysqli->query($sqlContadorCategorias);

          foreach ($contadorCategorias as $contadorCategoria) {
            $contador = $contadorCategoria['totalPorCategoria'];

        ?>['<?= $nome == '' ? 'Outros' : $nome ?>', <?= $contador ?>],

        <?php
          };
        }
        ?>

    



      ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
        chartArea:{left:0,top:30,width:'100%',height:'75%'}
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartCategory'));
      chart.draw(data, options);
    }
  </script>


  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],


        <?php
        $sqlSituacaoCategoria = "SELECT COUNT(categoria.ativo) totalAtivos FROM categoria WHERE categoria.ativo = '0'";

        $situacaoCategorias = $mysqli->query($sqlSituacaoCategoria);
        foreach ($situacaoCategorias as $situacaoCategoria) {

          $contadorSituacao = $situacaoCategoria['totalAtivos'];




        ?>['Inativo', <?= $contadorSituacao ?>],

        <?php
        };

        ?>
        <?php

        $sqlSituacaoCategoria = "SELECT COUNT(categoria.ativo) totalAtivos FROM categoria WHERE categoria.ativo = '1'";

        $situacaoCategorias = $mysqli->query($sqlSituacaoCategoria);
        foreach ($situacaoCategorias as $situacaoCategoria) {

          $contadorSituacao = $situacaoCategoria['totalAtivos'];




        ?>['Ativo', <?= $contadorSituacao ?>],

        <?php
        };

        ?>


      ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
        chartArea:{left:0,top:30,width:'100%',height:'75%'}
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartCategory2'));
      chart.draw(data, options);
    }
  </script>


</head>

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
        <div class="col">
          <div class="x_panel">
            <div class="x_title">
              <h2>Confira seus dados:</h2>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-6 col-sm-6 right_col__charts">
                <span class="right_col__titleChart">Produtos por categoria</span>
                <div id="chartCategory" style="width: 588.8px; height: 500px"></div>
              </div>
              <div class="col-md-6 col-sm-6 right_col__charts">
              <span class="right_col__titleChart">Situação das categorias</span>
                <div id="chartCategory2" style="width: 588.8px; height: 500px"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->


    </div>
  </div>

  <?php include($adminBaseDir . '/includes/footer.php'); ?>
  <?php include($adminBaseDir . '/includes/scripts.php'); ?>

</body>

</html>