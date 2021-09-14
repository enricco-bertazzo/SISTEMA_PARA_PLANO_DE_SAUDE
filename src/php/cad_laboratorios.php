<?php

$xml = new DOMDocument('1.0');
$xml -> load('../xml/cadastro_laboratorios.xml');

$laboratorios = $xml -> getElementsByTagName('laboratorios') -> item(0);

$laboratorio = $xml -> createElement('laboratorio');

    $nome = $xml -> createElement('nome', $nome);
    $endereco = $xml -> createElement('endereco', $endereco);
    $telefone = $xml -> createElement('telefone', $telefone);
    $email = $xml -> createElement('email', $email);
    $exame = $xml -> createElement('exame', $exame);
    $cnpj = $xml -> createElement('cnpj', $cnpj);
    $senha = $xml -> createElement('senha', $senha);

    $laboratorio -> appendChild($nome);
    $laboratorio -> appendChild($endereco);
    $laboratorio -> appendChild($telefone);
    $laboratorio -> appendChild($email);
    $laboratorio -> appendChild($exame);
    $laboratorio -> appendChild($cnpj);
    $laboratorio -> appendChild($senha);

$laboratorios -> appendChild($laboratorio);
$xml -> save('../xml/cadastro_laboratorios.xml');

?>