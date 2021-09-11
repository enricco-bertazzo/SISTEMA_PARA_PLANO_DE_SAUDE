<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//$especialidade = $_POST['especialidade'];
//$crm = $_POST['crm'];
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];
//$exame = $_POST['exame'];
//$cnpj = $_POST['cnpj']

// verificação de qual cad chamar
// vericação de dados
//verificar cpf
//nome == letras
//genero == letras
//email pelo front
//senha = letras simbolos numeros

include 'cad_pacientes.php';


?>