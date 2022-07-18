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
						
					</div>
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title panel__category">
									<h2>Usuários cadastrados <small></small></h2>
									<a class="btn btn-secondary right_col__btn" href="cadastro.php" role="button">Cadastrar novo usuário</a>
								</div>
								<?php
								$sql = "SELECT * FROM usuario";

								$res = $mysqli->query($sql);

								$qtd = $res->num_rows;

								if ($qtd > 0) { ?>

									<div class="col-md-6 col-sm-6  ">
										<div class="x_panel table__category">
											
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