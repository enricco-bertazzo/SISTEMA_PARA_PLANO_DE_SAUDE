<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/consultas.xml');

$consultas = $xml -> getElementsByTagName('consultas') -> item(0);

$consulta = $xml -> createElement('consulta');

    $paciente = $xml -> createElement('paciente', $paciente);
    $observacao = $xml -> createElement('observacao', $observacao);
    $data = $xml -> createElement('data', $data);
    $medico = $xml -> createElement('medico', $medico);
    $receita = $xml -> createElement('receita', $receita);
    

    $consulta -> appendChild($data);
    $consulta -> appendChild($medico);
    $consulta -> appendChild($paciente);
    $consulta -> appendChild($receita);
    $consulta -> appendChild($observacao);

$consultas -> appendChild($consulta);
$xml -> formatOutput = true;
$xml -> save('../xml/consultas.xml');

?>