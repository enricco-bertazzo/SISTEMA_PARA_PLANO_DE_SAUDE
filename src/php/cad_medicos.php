<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/cadastro_medicos.xml');

$medicos = $xml -> getElementsByTagName('medicos') -> item(0);

$medico = $xml -> createElement('medico');

    $crm = $xml -> createElement('crm', $crm);
    $senha = $xml -> createElement('senha', $senha);
    $nome = $xml -> createElement('nome', $nome);
    $endereco = $xml -> createElement('endereco', $endereco);
    $telefone = $xml -> createElement('telefone', $telefone);
    $email = $xml -> createElement('email', $email);
    $especialidade = $xml -> createElement('especialidade', $especialidade);

    $medico -> appendChild($crm);
    $medico -> appendChild($senha);
    $medico -> appendChild($nome);
    $medico -> appendChild($endereco);
    $medico -> appendChild($telefone);
    $medico -> appendChild($email);
    $medico -> appendChild($especialidade);

$medicos -> appendChild($medico);
$xml -> formatOutput = true;
$xml -> save('../xml/cadastro_medicos.xml');

?>