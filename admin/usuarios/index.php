<?php

include('../../includes/init_admin.php');

$title = "Usuários";

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
							<h3>Usuários</h3>
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
									<h2>Usuários cadastrados <small></small></h2>
									<a class="btn btn-secondary" href="cadastro.php" role="button">Cadastrar novo usuário</a>
								</div>
								<?php
								$sql = "SELECT * FROM usuario";

								$res = $mysqli->query($sql);

								$qtd = $res->num_rows;

								if ($qtd > 0) { ?>

									<div class="col-md-6 col-sm-6  ">
										<div class="x_panel">
											<div class="x_title">
												<h2>Usuários <small>Usuários cadastradas</small></h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
															<a class="dropdown-item" href="#">Settings 1</a>
															<a class="dropdown-item" href="#">Settings 2</a>
														</div>
													</li>
													<li><a class="close-link"><i class="fa fa-close"></i></a>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div>
											<div class="x_content">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Nome</th>
															<th>Email</th>
															<th>Ação</th>
														</tr>
													</thead>
													<tbody>

														<?php while ($usuario = $res->fetch_object()) { ?>
															<tr>
																<td> <?php echo $usuario->nome; ?> </td>
																<td> <?php echo $usuario->loginemail; ?> </td>

																<td>
																	<button class='btn btn-success' onclick="if(confirm('Tem certeza que deseja editar?')){location.href='editar.php?action=edit&id=<?= $usuario->id ?>';}else{false;}">Editar</button>
																	<button class='btn btn-danger' onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='_crudusuario.php?action=delet&id=<?= $usuario->id ?>';}else{false;}">Excluir</button>
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
										<td>Nenhum usuário cadastrado</td>
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