<?php

include('../../includes/init_admin.php');
include('_functions_utils.inc.php');

$title = "Cadastro de produto";

?>

<!DOCTYPE html>
<html lang="en">

<?php include($adminBaseDir . '/includes/head.php'); ?>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">

			<?php include($adminBaseDir . '/includes/sidebar.php'); ?>

			<?php include($adminBaseDir . '/includes/header.php'); ?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Cadastro de produtos</h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<form action="_crudproduto.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST">
										<input type="hidden" name="action" value="create">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nome <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control" name="nome">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descrição <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" required="required" class="form-control" name="descricao">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">Selecione o arquivo <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="file" id="last-name" required="required" class="form-control" name="fotoarquivo">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Localização no site</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="local_pagina_inicial">
													<option></option>
													<option value="carouselone">Carrossel News</option>
													<option value="carouseltwo">Carrossel Promoções</option>
													<option value="carouselthree">Carrossel Mais Vendidos</option>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label for="categoria" class="col-form-label col-md-3 col-sm-3 label-align">Categoria <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="id_categoria">
													<option></option>
													<?php
													$sql = "SELECT * FROM categoria";

													$res = $mysqli->query($sql);

													while ($category = $res->fetch_object()) { ?>

														<option value="<?php echo $category->id; ?>"><?php echo $category->nome; ?></option>
													<?php

													} ?>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Preço <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="preco" required="required" class="form-control" name="preco">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Preço promocional</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="precopromocional" class="form-control" name="precopromocional">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tag</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="tag" class="form-control" name="tarja">
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Limpar</button>
												<button type="submit" class="btn btn-success">Enviar</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include($adminBaseDir . '/includes/footer.php'); ?>

	<?php include($adminBaseDir . '/includes/scripts.php'); ?>

</body>

</html>