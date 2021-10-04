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

    include "menu.php";

    ?>
    <div class="card" id="formulario">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Marcar Consulta</h4>
            <hr>
            <p class="text-danger text-center" name="msg-erro"></p>
            <form method="POST" action="../php/registrar.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input name="data" id="data" class="form-control" placeholder="Data" type="date" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                        </div>
                        <input name="medico" id="medico" class="form-control" placeholder="Médico" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="paciente" id="paciente" class="form-control" placeholder="Paciente" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                        </div>
                        <input name="receita" id="receita" class="form-control" placeholder="Receita" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <textarea id="observacao" name="observacao" class="form-control" rows="5" cols="33" placeholder="Observação"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" style="width:100%">Salvar</button>
                </div>
            </form>
        </article>
    </div>
</body>

</html>