<!doctype html>
<html lang="pt-br">

<head>
	<title>SPPS | Vincular Laboratórios </title>
	<meta charset="utf-8">
	<link rel="icon" href="../img/icon.png">
	<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/formulario-dados.css" rel="stylesheet">
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/0dc26a975a.js" crossorigin="anonymous"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/jquery.mask.min.js"></script>
</head>

<body>

	<?php

	include "../pages/menu.php";

	?>

	<div class="card" id="formulario">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Edição de Laboratórios</h4>
			<hr>
			<p class="text-danger text-center" name="msg-erro"></p>
			<form method="POST" action="../php/registrar.php">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="nome" id="nome" class="form-control" placeholder="Nome" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-map"></i></span>
						</div>
						<input name="endereco" id="endereco" class="form-control" placeholder="Endereço" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
						</div>
						<input name="telefone" id="telefone" class="form-control" placeholder="Telefone" type="text" required>
					</div>
				</div>
				<script type="text/javascript">
					$("#telefone").mask("(00) 00000-0000");
				</script>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input name="email" id="email" class="form-control" placeholder="Email" type="email" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
						</div>
						<input name="exame" id="exame" class="form-control" placeholder="Exames ofertados" type="text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-id-card"></i></span>
						</div>
						<input name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" type="text" required>
					</div>
				</div>
				<script type="text/javascript">
					$("#cnpj").mask("00.000.000/0000-00");
				</script>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input name="senha" id="senha" class="form-control" placeholder="Senha" type="password" required>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" style="width:100%">Salvar</button>
			</form>
		</article>
	</div>
</body>

</html>