<?php

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
$nome_exame = $_POST['paciente'];
$exame_cad = $_POST['exame_cad'];

//dados especiais para consultas//
$observacao = $_POST['observacao'];
$data = $_POST['data'];
$medico = $_POST['medico'];
$nome_consulta = $_POST['paciente'];
$receita = $_POST['receita'];



if(isset($cpf_query)){
    foreach($xml -> paciente as $paciente){
        if ($paciente -> cpf == $cpf_query){
            echo $paciente -> cpf;
            echo $paciente -> senha = $senha;
            echo $paciente -> nome = $nome;
            echo $paciente -> endereco = $endereco;
            echo $paciente -> telefone = $telefone;
            echo $paciente -> email = $email;
            echo $paciente -> genero = $genero;
            exit;
        }
    }
} elseif(isset($crm_query)){
    foreach($xml -> medico as $medico){
        if ($medico -> crm == $crm_query){
            echo $medico -> crm;
            echo $medico -> senha = $senha;
            echo $medico -> nome = $nome;
            echo $medico -> endereco = $endereco;
            echo $medico -> telefone = $telefone;
            echo $medico -> email = $email;
            echo $medico -> especialidade = $especialidade;
            exit;
        }
    }
} elseif(isset($cnpj_query)){
    foreach($xml -> laboratorio as $laboratorio){
        if ($laboratorio -> cnpj == $cnpj_query){
            echo $laboratorio -> cnpj;
            echo $laboratorio -> senha = $senha;
            echo $laboratorio -> nome = $nome;
            echo $laboratorio -> endereco = $endereco;
            echo $laboratorio -> telefone = $telefone;
            echo $laboratorio -> email = $email;
            echo $laboratorio -> exame = $exame;
            exit;
        }
    }
} elseif(isset($nome_exame)){
    foreach($xml -> exame as $exame){
        if ($exame -> paciente == $nome_exame){
            echo $exame -> paciente = $paciente;
            echo $exame -> data = $data;
            echo $exame -> laboratorio = $laboratorio;
            echo $exame -> exame = $exame;
            echo $exame -> resultado = $resultado;
        }
    }
} elseif(isset($nome_consulta)){
    foreach($xml -> consulta as $consulta){
        if ($consulta -> paciente == $nome_consulta){
            echo $exame -> paciente = $paciente;
            echo $exame -> observacao= $observacao;
            echo $exame -> data = $data;
            echo $exame -> medico = $medico;
            echo $exame -> receita = $receita;
        }
    }
}

?>