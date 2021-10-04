<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/exames.xml');

$exames = $xml -> getElementsByTagName('exames') -> item(0);

$exame = $xml -> createElement('exame');

    $paciente = $xml -> createElement('paciente', $paciente);
    $resultado = $xml -> createElement('resultado', $resultado);
    $data = $xml -> createElement('data', $data);
    $laboratorio = $xml -> createElement('laboratorio', $laboratorio);
    $exame_cad = $xml -> createElement('exame', $exame_cad);
    

    $exame -> appendChild($data);
    $exame -> appendChild($laboratorio);
    $exame -> appendChild($paciente);
    $exame -> appendChild($exame_cad);
    $exame -> appendChild($resultado);

$exames -> appendChild($exame);
$xml -> formatOutput = true;
$xml -> save('../xml/exames.xml');

?>