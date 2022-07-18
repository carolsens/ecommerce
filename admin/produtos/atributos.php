<?php

include('../../includes/init_admin.php');
include('_functions_utils.inc.php');

$title = "Cadastro de atributos";

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
							<h3>Cadastro e edição de atributos</h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">

									<?php
									$sqlproduto = "SELECT * FROM produto WHERE id=" . $_REQUEST["id"];
									$res = $mysqli->query($sqlproduto);
									$product = $res->fetch_object();
									$idproduto = $product->id;
									?>

									<h2><span>Produto: <?= $product->nome ?></span><small></small></h2>
									
									<div class="clearfix"></div>
								</div>

								<div class="x_content">
									<br />



										<?php $sqlatributos = "SELECT * FROM atributo";

										$atributos = $mysqli->query($sqlatributos);

										?>


										<?php foreach ($atributos as $atributo) :

										?>

										
									<form action="_crudatributo.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST">

											<input type="hidden" name="action" value="create">
											<input type="hidden" name="id_produto" value="<?= $idproduto ?>">

											<?php
											$idatributo = $atributo['id'];


											$sqlatributosproduto = "SELECT * FROM produto_atributos WHERE (produto_atributos.id_produto = $idproduto) AND (produto_atributos.id_atributo = $idatributo)";

											$atributosproduto = $mysqli->query($sqlatributosproduto);


											?>
											<input type="hidden" name="id_atributo" value="<?= $idatributo ?>">

											<div class="item form-group input__itens">
												<label for="categoria" class="col-form-label col-md-3 col-sm-3 label-align"><?= $atributo['nome'] ?></label>
												<div class="col-md-6 col-sm-6">
													<input type="text" id="" class="form-control" name="valor">
												</div>
												<button class="btn-success buttom__check" type="submit">Cadastrar</button>
											</div>
									</form>

									<div class="item">
										<label for="categoria" class="col-form-label col-md-3 col-sm-3 label-align"></label>
										<div class="col-md-6 col-sm-6">
												<?php while ($atributoproduto = $atributosproduto->fetch_object()) { ?>

													<ul class="atributos__list">
														<li> <span><?php echo $atributoproduto->valor; ?></span>

															<button class="buttom__delet" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='_crudatributo.php?action=delet&id=<?= $atributoproduto->id ?>&idproduto=<?= $idproduto ?>';}else{false;}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
																	<path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z" />
																</svg></button>

														</li>
													</ul>
												<?php } ?>
									
										</div>
									</div>

								<?php endforeach; ?>

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