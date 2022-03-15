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
            "mensagem" => 'Olá' . $nome . ', A sua bebida favorita é: ' . $bebida

        );
    } 
    
    else {

        $dados = array(

            "alert" => 'alert-danger',
            "mensagem" => 'Você é menor de idade! ' . $nome . ' não pode beber' 

        );
    }

}

echo json_encode($dados);
