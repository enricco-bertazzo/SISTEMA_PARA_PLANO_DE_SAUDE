<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/consultas.xml');

$consultas = $xml -> getElementsByTagName('consultas') -> item(0);

$consulta = $xml -> createElement('consulta');

    $observacao = $xml -> createElement('observacao', 'VARIAVEL DA observacao');
    $data = $xml -> createElement('data', 'VARIAVEL DO data');
    $medico = $xml -> createElement('medico', 'VARIAVEL DO medico');
    $paciente = $xml -> createElement('paciente', 'VARIAVEL DO paciente');
    $receita = $xml -> createElement('receita', 'VARIAVEL DO receita');
    

    $consulta -> appendChild($data);
    $consulta -> appendChild($medico);
    $consulta -> appendChild($paciente);
    $consulta -> appendChild($receita);
    $consulta -> appendChild($observacao);

$consultas -> appendChild($consulta);
$xml -> formatOutput = true;
$xml -> save('../xml/consultas.xml');

?>