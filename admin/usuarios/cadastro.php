<?php

include('../../includes/init_admin.php');

$title = "Cadastro de usuário";

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php include($adminBaseDir . '/includes/head.php'); ?>

	<link href="<?= BASE_URL_CSS_BACKEND ?>/style.css" rel="stylesheet">

</head>

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
							<h3>Cadastro de usuário</h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<form action="_crudusuario.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" onsubmit="return validarSenha();" method="POST">
										<input type="hidden" name="action" value="create">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nome <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" required="required" class="form-control" name="nome">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="loginemail">Email para login <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="loginemail" required="required" class="form-control" name="loginemail">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="senha">Senha inicial<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="password" required="required" class="form-control" name="senha">
											</div>
											<img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho-cadastro">
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="senha2">Repita a senha<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="passwordRepeat" required="required" class="form-control" name="repSenha">
											</div>
											<img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho2" class="olho-cadastro2">
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Limpar</button>
												<button type="submit"  class="btn btn-success">Enviar</button>
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