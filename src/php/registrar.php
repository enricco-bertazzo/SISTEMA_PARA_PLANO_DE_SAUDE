<?php

//dados em comun//
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//dados especiais de medicos//
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];

//dados especiais de paciente//
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];

//dados expeciais de laboratorio//
$exame = $_POST['exame'];
$cnpj = $_POST['cnpj'];

//dados especiais para exames//
$resultado = $_POST['resultado'];
$data = $_POST['data'];
$laboratorio = $_POST['laboratorio'];
$paciente = $_POST['paciente'];
$exame = $_POST['exame'];

//dados especiais para consultas//
$observacao = $_POST['observacao'];
$data = $_POST['data'];
$medico = $_POST['medico'];
$paciente = $_POST['paciente'];
$receita = $_POST['receita'];
    

if(isset($crm)){
    include 'cad_medicos.php';

} elseif (isset($cpf)){
    include 'cad_pacientes.php';

} elseif (isset($cnpj)){
    include 'cad_laboratorios.php';

} elseif(isset($resultado)){
    include 'cad_exames.php';

} elseif(isset($observacao)){
    include 'cad_consultas.php';
}

header('location: ../pages/dashboard.php');
?>