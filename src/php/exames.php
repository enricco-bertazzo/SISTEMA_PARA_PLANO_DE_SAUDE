<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/exames.xml');

$exames = $xml -> getElementsByTagName('exames') -> item(0);

$exame = $xml -> createElement('exame');

    $data = $xml -> createElement('data', 'VARIAVEL DO data');
    $laboratorio = $xml -> createElement('laboratorio', 'VARIAVEL DO laboratorio');
    $paciente = $xml -> createElement('paciente', 'VARIAVEL DO paciente');
    $exame = $xml -> createElement('exame', 'VARIAVEL DO exame');
    $resultado = $xml -> createElement('resultado', 'VARIAVEL DA resultado');

    $exame -> appendChild($data);
    $exame -> appendChild($laboratorio);
    $exame -> appendChild($paciente);
    $exame -> appendChild($exame);
    $exame -> appendChild($resultado);

$exames -> appendChild($exame);
$xml -> save('../xml/exames.xml');

?>