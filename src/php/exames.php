<?php

//https://www.youtube.com/watch?v=CBmB2fc0IUM&ab_channel=SilvysterAbing

$xml = new DOMDocument('1.0');
$xml -> load('../xml/exames.xml');

$exames = $xml -> getElementById("exames");

$exame = $xml -> createElement("exame");

    $data = $xml -> createElement("data", "VARIAVEL DO data");
    $laboratorio = $xml -> createElement("laboratorio", "VARIAVEL DO laboratorio");
    $paciente = $xml -> createElement("paciente", "VARIAVEL DO paciente");
    $exame = $xml -> createElement("exame", "VARIAVEL DO exame");
    $resultado = $xml -> createElement("resultado", "VARIAVEL DA resultado");

    $exame -> appendChild($data);
    $exame -> appendChild($laboratorio);
    $exame -> appendChild($paciente);
    $exame -> appendChild($exame);
    $exame -> appendChild($resultado);

$exames -> appendChild($exame);
$xml -> save('../xml/exames.xml');

?>