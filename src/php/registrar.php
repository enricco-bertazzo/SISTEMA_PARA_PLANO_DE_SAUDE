<?php


$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];

$cpf = $_POST['cpf'];
$genero = $_POST['genero'];

$exame = $_POST['exame'];
$cnpj = $_POST['cnpj'];

if(isset($crm)){
    include 'cad_medicos.php';
} elseif (isset($cpf)){
    include 'cad_pacientes.php';
} elseif (isset($cnpj)){
    include 'cad_laboratorios.php';
}


header('location: ../pages/dashboard.html');
?>