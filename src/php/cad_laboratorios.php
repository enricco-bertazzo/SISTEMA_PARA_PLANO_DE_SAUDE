<?php

//https://www.youtube.com/watch?v=CBmB2fc0IUM&ab_channel=SilvysterAbing

$xml = new DOMDocument('1.0');
$xml -> load('../xml/cadastro_laboratorios.xml');

$laboratorios = $xml -> getElementById("laboratorios");

$laboratorio = $xml -> createElement("laboratorio");

    $nome = $xml -> createElement("nome", "VARIAVEL DO NOME");
    $endereco = $xml -> createElement("endereco", "VARIAVEL DO ENDERECO");
    $telefone = $xml -> createElement("telefone", "VARIAVEL DO TELEFONE");
    $email = $xml -> createElement("email", "VARIAVEL DO EMAIL");
    $exame = $xml -> createElement("exame", "VARIAVEL DA exame");
    $cnpj = $xml -> createElement("cnpj", "VARIAVEL DO cnpj");

    $laboratorio -> appendChild($nome);
    $laboratorio -> appendChild($endereco);
    $laboratorio -> appendChild($telefone);
    $laboratorio -> appendChild($email);
    $laboratorio -> appendChild($exame);
    $laboratorio -> appendChild($cnpj);

$laboratorios -> appendChild($laboratorio);
$xml -> save('../xml/cadastro_laboratorios.xml');

?>