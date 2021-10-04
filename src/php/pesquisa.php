<?php

$cpf_query = $_POST['cpf_query'];
$crm_query = $_POST['crm_query'];
$cnpj_query = $_POST['cnpj_query'];

$xml = simplexml_load_file('../xml/cadastro_pacientes.xml');

if(isset($cpf_query)){
    foreach($xml -> paciente as $paciente){
        if ($paciente -> cpf == $cpf_query){
            echo $paciente -> cpf;
            echo $paciente -> senha;
            echo $paciente -> nome;
            echo $paciente -> endereco;
            echo $paciente -> telefone;
            echo $paciente -> email;
            echo $paciente -> genero;
            exit;
        }
    }
} elseif(isset($crm_query)){
    foreach($xml -> medico as $medico){
        if ($medico -> crm == $crm_query){
            echo $medico -> crm;
            echo $medico -> senha;
            echo $medico -> nome;
            echo $medico -> endereco;
            echo $medico -> telefone;
            echo $medico -> email;
            echo $medico -> especialidade;
            exit;
        }
    }
} elseif(isset($cnpj_query)){
    foreach($xml -> laboratorio as $laboratorio){
        if ($laboratorio -> cnpj == $cnpj_query){
            echo $laboratorio -> cnpj;
            echo $laboratorio -> senha;
            echo $laboratorio -> nome;
            echo $laboratorio -> endereco;
            echo $laboratorio -> telefone;
            echo $laboratorio -> email;
            echo $laboratorio -> exame;
            exit;
        }
    }
}

?>