<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/cadastro_medicos.xml');

$medicos = $xml -> getElementById("medicos");

$medico = $xml -> createElement("medico");

    $nome = $xml -> createElement("nome", "VARIAVEL DO NOME");
    $endereco = $xml -> createElement("endereco", "VARIAVEL DO ENDERECO");
    $telefone = $xml -> createElement("telefone", "VARIAVEL DO TELEFONE");
    $email = $xml -> createElement("email", "VARIAVEL DO EMAIL");
    $especialidade = $xml -> createElement("especialidade", "VARIAVEL DA ESPECIALIDADE");
    $crm = $xml -> createElement("crm", "VARIAVEL DO CRM");

    $medico -> appendChild($nome);
    $medico -> appendChild($endereco);
    $medico -> appendChild($telefone);
    $medico -> appendChild($email);
    $medico -> appendChild($especialidade);
    $medico -> appendChild($crm);

$medicos -> appendChild($medico);
$xml -> save('../xml/cadastro_medicos.xml');

?>