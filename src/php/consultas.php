<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/consultas.xml');

$consultas = $xml -> getElementById("consultas");

$consulta = $xml -> createElement("consulta");

    $data = $xml -> createElement("data", "VARIAVEL DO data");
    $medico = $xml -> createElement("medico", "VARIAVEL DO medico");
    $paciente = $xml -> createElement("paciente", "VARIAVEL DO paciente");
    $receita = $xml -> createElement("receita", "VARIAVEL DO receita");
    $observacao = $xml -> createElement("observacao", "VARIAVEL DA observacao");

    $consulta -> appendChild($data);
    $consulta -> appendChild($medico);
    $consulta -> appendChild($paciente);
    $consulta -> appendChild($receita);
    $consulta -> appendChild($observacao);

$consultas -> appendChild($consulta);
$xml -> save('../xml/consultas.xml');

?>