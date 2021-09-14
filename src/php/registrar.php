<?php

// verificação de qual cad chamar
// vericação de dados
//verificar cpf
//nome == letras
//genero == letras
//email pelo front
//senha = letras simbolos numeros

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
}

if (isset($cpf)){
    include 'cad_pacientes.php';
}

if (isset($cnpj)){
    include 'cad_laboratorios.php';
}


header('location: ../pages/dashboard.html');
?>