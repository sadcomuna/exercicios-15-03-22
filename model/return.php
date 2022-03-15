<?php

$nome = $_REQUEST['NOME'];
$bebida = $_REQUEST['BEBIDA'];
$nascimento = $_REQUEST['ANO'];
$hoje = date("Y-m-d");
$idade = date_diff(date_create($nascimento), date_create($hoje));


if (empty($nome)) {

    $dados = array(

        "mensagem" => 'Existem campos sem informações e/ou incompletos'
        
    );
} 

    else {

    if ($idade -> format('%y') >= 18) {

        $dados = array(

            "alert" => 'alert-success',
            "mensagem" => 'Olá' . $nome . ' a sua bebida favorita é ' . $bebida . 'você é maior de idade e pode ingerir bebidas alcólicas'

        );
    } 
    
    else {

        $dados = array(

            "alert" => 'alert-danger',
            "mensagem" => 'Você é menor de idade! ' . $nome . ' não pode beber por enquanto, espere mais um pouco' 

        );
    }

}

echo json_encode($dados);
