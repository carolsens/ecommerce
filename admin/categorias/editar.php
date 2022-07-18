<?php

include('../../includes/init_admin.php');
include('_functions_utils.inc.php');

$title = "Edição de categoria";

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
							<h3>Edição de categorias</h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />

									<?php
									$sql = "SELECT * FROM categoria WHERE id=".$_REQUEST["id"];
									
									$res = $mysqli->query($sql);
									
									$category = $res->fetch_object();
									
									?>

									<form action="_crudcategory.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
										<input type="hidden" name="action" value="edit">
										<input type="hidden" name="id" value="<?php print $category->id; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nome <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control" name="nome" value="<?php print $category->nome; ?>">
											</div>
										</div>

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Situação<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="ativo">
													<option></option>
													<option value="1" <?php if ($category->ativo == "1") : ?>selected<?php endif; ?>>Ativo</option>
													<option value="0" <?php if ($category->ativo == "0") : ?>selected<?php endif; ?>>Inativo</option>
												</select>
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
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