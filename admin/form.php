<?php

include('protect.php');
include('includes/conexao.php');
include('_functions_utils.inc.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de produto</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
					</div>

					<div class="clearfix"></div>

					<?php include('includes/sidebar.php'); ?>

				</div>
			</div>

			<?php include('includes/header.php'); ?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Produtos</h3>
						</div>
						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
						
					

					</div>
					<div class="clearfix"></div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Produtos cadastrados <small></small></h2>
									<a class="btn btn-secondary" href="formcadastro.php" role="button">Cadastrar novo produto</a>
								</div>
								<?php
									$sql = "SELECT * FROM produto";

									

									$res = $mysqli->query($sql);

									$qtd = $res->num_rows;

									if ($qtd > 0) {

									print "<table class='table table-hover'>";
									print "<tr>";
									print "<th>Nome</th>";
									print "<th>Descrição</th>";
									print "<th>Localização na página</th>";
									print "<th>Preço</th>";
									print "<th>Preço promocional</th>";
									print "<th>Tag</th>";
									print "<th>Imagem</th>";
									print "<th>Ação</th>";
									
									
										while ($product = $res->fetch_object()) {
											print "<tr>";
											print "<td>" . $product->nome . "</td>";
											print "<td>" . $product->descricao . "</td>";
											print "<td>" . localPaginaInicialLabel($product->local_pagina_inicial) . "</td>";
											print "<td>R$ " . moneyFormat($product->preco) . "</td>";
											print "<td>R$ " . $product->precopromocional . "</td>";
											print "<td>" . $product->tarja . "</td>";
											print "<td> <img height='50' src= ". $product->foto . " > </td>";
											print "<td> 
											<button onclick=\"if(confirm('Tem certeza que deseja editar?')){location.href='formedit.php?action=edit&id=" . $product->id . "';}else{false;}\" class='btn btn-success'>Editar</button>
											<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='crudproduto.php?action=delet&id=" . $product->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
											</td>";
										}

										print "</table>";
									} else {
										print "<tr>";
										print "<td>Nenhum produto cadastrado</td>";
									}

									

									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- footer content -->
	<?php include('includes/footer.php'); ?>


	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body>

</html>