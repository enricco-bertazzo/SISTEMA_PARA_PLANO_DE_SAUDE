<?php

function cad_pacientes(){

    $xml = new DOMDocument('1.0', 'utf-8');
    $xml -> load('../xml/cadastro_pacientes.xml');

    $pacientes = $xml -> getElementById('pacientes');

    $paciente = $xml -> createElement('paciente');

    $nome = $xml -> createElement('nome', $nome);
    $endereco = $xml -> createElement('endereco', $endereco);
    $telefone = $xml -> createElement('telefone', $telefone);
    $email = $xml -> createElement('email', $email);
    $genero = $xml -> createElement('genero', $genero);
    $cpf = $xml -> createElement('cpf', $cpf);
    $senha = $xml -> createElement('senha', $senha);

    $paciente -> appendChild($nome);
    $paciente -> appendChild($endereco);
    $paciente -> appendChild($telefone);
    $paciente -> appendChild($email);
    $paciente -> appendChild($genero);
    $paciente -> appendChild($cpf);
    $paciente -> appendChild($senha);

    $pacientes -> appendChild($paciente);
    $xml -> save('../xml/cadastro_pacientes.xml');

}


function cad_medicos(){
    $xml = new DOMDocument('1.0');
    $xml -> load('../xml/cadastro_medicos.xml');

    $medicos = $xml -> getElementById('medicos');

    $medico = $xml -> createElement('medico');

    $nome = $xml -> createElement('nome', ' ');
    $endereco = $xml -> createElement('endereco', ' ');
    $telefone = $xml -> createElement('telefone', ' ');
    $email = $xml -> createElement('email', ' ');
    $especialidade = $xml -> createElement('especialidade', ' ');
    $crm = $xml -> createElement('crm', ' ');
    $senha = $xml -> createElement('senha', ' ');

    $medico -> appendChild($nome);
    $medico -> appendChild($endereco);
    $medico -> appendChild($telefone);
    $medico -> appendChild($email);
    $medico -> appendChild($especialidade);
    $medico -> appendChild($crm);
    $medico -> appendChild($senha);

    $medicos -> appendChild($medico);
    $xml -> save('../xml/cadastro_medicos.xml');
}

function cad_laboratorio(){

    $xml = new DOMDocument('1.0');
    $xml -> load('../xml/cadastro_laboratorios.xml');

    $laboratorios = $xml -> getElementById('laboratorios');

    $laboratorio = $xml -> createElement('laboratorio');

    $nome = $xml -> createElement('nome', 'VARIAVEL DO NOME');
    $endereco = $xml -> createElement('endereco', 'VARIAVEL DO ENDERECO');
    $telefone = $xml -> createElement('telefone', 'VARIAVEL DO TELEFONE');
    $email = $xml -> createElement('email', 'VARIAVEL DO EMAIL');
    $exame = $xml -> createElement('exame', 'VARIAVEL DA exame');
    $cnpj = $xml -> createElement('cnpj', 'VARIAVEL DO cnpj');
    $senha = $xml -> createElement('senha', ' ');

    $laboratorio -> appendChild($nome);
    $laboratorio -> appendChild($endereco);
    $laboratorio -> appendChild($telefone);
    $laboratorio -> appendChild($email);
    $laboratorio -> appendChild($exame);
    $laboratorio -> appendChild($cnpj);
    $laboratorio -> appendChild($senha);

    $laboratorios -> appendChild($laboratorio);
    $xml -> save('../xml/cadastro_laboratorios.xml');

}

function consultas(){

    $xml = new DOMDocument('1.0');
    $xml -> load('../xml/consultas.xml');

    $consultas = $xml -> getElementById('consultas');

    $consulta = $xml -> createElement('consulta');

    $data = $xml -> createElement('data', 'VARIAVEL DO data');
    $medico = $xml -> createElement('medico', 'VARIAVEL DO medico');
    $paciente = $xml -> createElement('paciente', 'VARIAVEL DO paciente');
    $receita = $xml -> createElement('receita', 'VARIAVEL DO receita');
    $observacao = $xml -> createElement('observacao', 'VARIAVEL DA observacao');

    $consulta -> appendChild($data);
    $consulta -> appendChild($medico);
    $consulta -> appendChild($paciente);
    $consulta -> appendChild($receita);
    $consulta -> appendChild($observacao);

    $consultas -> appendChild($consulta);
    $xml -> save('../xml/consultas.xml');

}

function exames(){

    $xml = new DOMDocument('1.0');
    $xml -> load('../xml/exames.xml');
    
    $exames = $xml -> getElementById('exames');
    
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
    
}

?>