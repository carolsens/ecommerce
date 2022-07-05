<?php

include('../../includes/init_admin.php');
include('_functions_utils.inc.php');

$title = "Produtos";

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
									<a class="btn btn-secondary" href="cadastro.php" role="button">Cadastrar novo produto</a>
								</div>
								<?php
								$itenspagina = 10;
								$pagina = 0;
								if (isset($_GET['pagina'])) {
									$pagina = intval($_GET['pagina'] - 1);
								}

								$inicionapaginacao = $itenspagina * $pagina;

								$sql = "SELECT produto.*, categoria.nome as nome_categoria FROM produto
									LEFT JOIN categoria ON (produto.id_categoria = categoria.id) LIMIT $inicionapaginacao, $itenspagina";

								$res = $mysqli->query($sql);
								$qtd = $res->num_rows;

								$num_total = $mysqli->query("SELECT produto.*, categoria.nome as nome_categoria FROM produto
								LEFT JOIN categoria ON (produto.id_categoria = categoria.id)")->num_rows;

								$numpaginas = ceil($num_total / $itenspagina);

								if ($qtd > 0) { ?>

									<div class="col-md-12 col-sm-12  ">
										<div class="x_panel">
											<div class="x_title">
												<h2>Produtos <small>Produtos cadastrados</small></h2>
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
															<th>Descrição</th>
															<th>Categoria</th>
															<th>Localização na página</th>
															<th>Preço</th>
															<th>Preço promocional</th>
															<th>Tag</th>
															<th>Imagem</th>
															<th>Ação</th>
														</tr>
													</thead>
													<tbody>

														<?php while ($product = $res->fetch_object()) { ?>
															<tr>
																<td> <?php echo $product->nome; ?> </td>
																<td> <?php echo $product->descricao ?> </td>
																<td> <?php echo $product->nome_categoria ?> </td>
																<td> <?php echo localPaginaInicialLabel($product->local_pagina_inicial) ?> </td>
																<td>R$ <?php echo moneyFormat($product->preco) ?> </td>
																<td> <?php $product->precopromocional > 0 ? print "R$ " . moneyFormat($product->precopromocional)  : ""  ?> </td>
																<td> <?php echo $product->tarja ?> </td>
																<td> <img height='50' src="<?php echo BASE_URL_PRODUTO_FRONTEND . "/" . $product->foto ?>"> </td>
																<td>
																	<button class='btn btn-success' onclick="if(confirm('Tem certeza que deseja editar?')){location.href='editar.php?action=edit&id=<?= $product->id ?>';}else{false;}">Editar</button>
																	<button class='btn btn-danger' onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='_crudproduto.php?action=delet&id=<?= $product->id ?>';}else{false;}">Excluir</button>
																</td>
															</tr>
													</tbody>

												<?php } ?>
												</table>

												<nav aria-label="Page navigation example">
													<ul class="pagination">
														<?php if (((@$_GET['pagina']) > 1) || ($pagina > 1)) { ?>
															<li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">Anterior</a></li>
														<?php } else { ?>
															<li class="page-item"><a class="page-link" disabled>Anterior</a></li>
														<?php }	?>
														<?php for ($i = 0; $i < $numpaginas; $i++) {
															$estilo = "";
															if ($pagina == $i)
																$estilo = "active";
														?>
															<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="index.php?pagina=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a></li>
														<?php } ?>

														<?php if (((@$_GET['pagina']) < $numpaginas) || ($pagina < $numpaginas)) { ?>
															<li class="page-item"><a class="page-link" href="index.php?pagina=<?php if (!isset($_GET['pagina'])) {
																																	echo $pagina + 2;
																																} else echo $_GET['pagina'] + 1 ?>">Próximo</a></li>
														<?php } else { ?>
															<li class="page-item"><a class="page-link" disabled>Próximo</a></li>
														<?php }	?>

													</ul>


												</nav>

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