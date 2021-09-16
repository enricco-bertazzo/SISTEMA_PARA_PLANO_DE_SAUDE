<!doctype html>
<html lang="pt-br">

<head>
	<title>SPPS</title>
	<meta charset="utf-8">
	<link rel="icon" href="http://example.com/favicon.png">
	<link href="src/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="src/css/style.css" rel="stylesheet">
	<link href="src/css/login.css" rel="stylesheet">
	<script src="src/js/bootstrap/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/0dc26a975a.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="card" id="login">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">SPPS</h4>
			<hr>
			<p class="text-danger text-center" name="msg-erro"></p>
			<form method="POST" action="src/pages/dashboard.html">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="far fa-user"></i></span>
						</div>
						<input name="login-usuario" class="form-control" placeholder="CPF/CNPJ/CRM" type="text"
							required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input name="senha-medico" class="form-control" placeholder="Senha" type="password" required>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" style="width:100%">Login</button>
					<center><a ref="#" class="btn">Esqueceu sua senha?</a></center>	
			</form>
		</article>
	</div>
</body>

</html>