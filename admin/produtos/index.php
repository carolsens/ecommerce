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
								<form method="GET">
									<div class="input-group">
									<?php
										$busca = '';
										if((isset($_GET['busca']))){
											$busca = $_GET['busca'];
										}							
								

										?>
										<input type="text" name="busca" class="form-control" placeholder="Search for..." value="<?= $busca ?>" >
										
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><svg class="right_col__searchImg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Produtos cadastrados <small></small></h2>
									<a class="btn btn-secondary right_col__btn" href="cadastro.php" role="button">Cadastrar novo produto</a>
								</div>
								<?php
								$itenspagina = 10;
								$pagina = 0;
								if (isset($_GET['pagina'])) {
									$pagina = intval($_GET['pagina'] - 1);
								}

								$inicionapaginacao = $itenspagina * $pagina;


								if((isset($_GET['busca']))){
									
									$sql = "SELECT produto.*, categoria.nome as nome_categoria FROM produto
									LEFT JOIN categoria ON (produto.id_categoria = categoria.id) WHERE produto.nome LIKE '%$busca%' LIMIT $inicionapaginacao, $itenspagina";

								}	else {					
						
								$sql = "SELECT produto.*, categoria.nome as nome_categoria FROM produto
									LEFT JOIN categoria ON (produto.id_categoria = categoria.id) LIMIT $inicionapaginacao, $itenspagina";
									
															
									

								}

								$res = $mysqli->query($sql);
								$qtd = $res->num_rows;


								if((isset($_GET['busca']))){
									$num_total = $mysqli->query("SELECT produto.*, categoria.nome as nome_categoria FROM produto
									LEFT JOIN categoria ON (produto.id_categoria = categoria.id) WHERE produto.nome LIKE '%$busca%'")->num_rows;

								}
								else {
								$num_total = $mysqli->query("SELECT produto.*, categoria.nome as nome_categoria FROM produto
								LEFT JOIN categoria ON (produto.id_categoria = categoria.id)")->num_rows;

								}

								$numpaginas = ceil($num_total / $itenspagina);


								
								if ($qtd > 0) { ?>

									<div class="col-md-12 col-sm-12  ">
										<div class="x_panel">
											
											<div class="x_content">
												<table class="table table-hover">
													<thead>
														<tr class="table__title">
															<th>Nome</th>
															<th>Descrição</th>
															<th>Categoria</th>
															<th>Localização na página</th>
															<th>Preço</th>
															<th>Preço promocional</th>
															<th>Tag</th>
															<th>Imagem</th>
															<th>Atributo</th>
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
																	<button class='btn btn-secondary' onclick="if(confirm('Tem certeza que deseja editar?')){location.href='atributos.php?action=edit&id=<?= $product->id ?>';}else{false;}">Editar atributo</button>
																</td>
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