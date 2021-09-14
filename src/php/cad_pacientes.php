<?php

$xml = new DOMDocument('1.0', 'utf-8');
$xml -> load('../xml/cadastro_pacientes.xml');

$pacientes = $xml -> getElementsByTagName('pacientes') -> item(0);

$paciente = $xml -> createElement('paciente');

    $nome = $xml -> createElement('nome', $nome);
    $endereco = $xml -> createElement('endereco', $endereco);
    $telefone = $xml -> createElement('telefone', $telefone);
    $email = $xml -> createElement('email', $email);
    $genero = $xml -> createElement('genero', $genero);
    $cpf = $xml -> createElement('cpf', $cpf);
    $senha = $xml -> createElement('senha', $senha);

    $paciente -> appendChild($nome);
    $paciente -> appendChild($endereco);
    $paciente -> appendChild($telefone);
    $paciente -> appendChild($email);
    $paciente -> appendChild($genero);
    $paciente -> appendChild($cpf);
    $paciente -> appendChild($senha);

$pacientes -> appendChild($paciente);
$xml -> save('../xml/cadastro_pacientes.xml');




?>