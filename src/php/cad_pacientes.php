<?php

//https://www.youtube.com/watch?v=CBmB2fc0IUM&ab_channel=SilvysterAbing

$xml = new DOMDocument('1.0');
$xml -> load('../xml/cadastro_pacientes.xml');

$pacientes = $xml -> getElementById("pacientes");

$paciente = $xml -> createElement("paciente");

    $nome = $xml -> createElement("nome", "VARIAVEL DO NOME");
    $endereco = $xml -> createElement("endereco", "VARIAVEL DO ENDERECO");
    $telefone = $xml -> createElement("telefone", "VARIAVEL DO TELEFONE");
    $email = $xml -> createElement("email", "VARIAVEL DO EMAIL");
    $genero = $xml -> createElement("genero", "VARIAVEL DO GENERO");
    $cpf = $xml -> createElement("cpf", "VARIAVEL DO CPF");

    $paciente -> appendChild($nome);
    $paciente -> appendChild($endereco);
    $paciente -> appendChild($telefone);
    $paciente -> appendChild($email);
    $paciente -> appendChild($genero);
    $paciente -> appendChild($cpf);

$pacientes -> appendChild($paciente);
$xml -> save('../xml/cadastro_pacientes.xml');

?>