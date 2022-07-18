<?php

include('../../includes/init_admin.php');
include('_functions_utils.inc.php');

$title = "Categorias";

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
							<h3>Categorias</h3>
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
								<div class="x_title panel__category">
									<h2>Categorias cadastradas <small></small></h2>
									<a class="btn btn-secondary right_col__btn" href="cadastro.php" role="button">Cadastrar nova categoria</a>
								</div>
								<?php
								$sql = "SELECT * FROM categoria";

								$res = $mysqli->query($sql);

								$qtd = $res->num_rows;

								if ($qtd > 0) { ?>

									<div class="col-md-6 col-sm-6">
										<div class="x_panel table__category">
											
											<div class="x_content">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Nome</th>
															<th>Situação</th>
															<th>Ação</th>
														</tr>
													</thead>
													<tbody>

														<?php while ($category = $res->fetch_object()) { ?>
															<tr>
																<td> <?php echo $category->nome; ?> </td>
																<td> <?php echo categoriaAtivoLabel($category->ativo) ?> </td>

																<td>
																	<button class='btn btn-success' onclick="if(confirm('Tem certeza que deseja editar?')){location.href='editar.php?action=edit&id=<?= $category->id ?>';}else{false;}">Editar</button>
																	<button class='btn btn-danger' onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='_crudcategory.php?action=delet&id=<?= $category->id ?>';}else{false;}">Excluir</button>
																</td>
															</tr>
													</tbody>

												<?php } ?>
												</table>

											</div>
										</div>
									</div>

								<?php
								} else { ?>
									<tr>
										<td>Nenhum produto cadastrado</td>
									<?php
								}
									?>

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