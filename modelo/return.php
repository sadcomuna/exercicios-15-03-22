<?php

$nome = $_REQUEST['nome'];

$bebida = $_REQUEST['bebida'];

$nascimento = $_REQUEST['ano'];

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
            "mensagem" => 'Olá ' . $nome . ', A sua bebida favorita é: ' . $bebida . 'e é maior de idade, pode ingerir bebidas alcólicas (❤ω❤) '

        );
    } 
    
    else {

        $dados = array(

            "alert" => 'alert-success',
            "mensagem" => 'Você é menor de idade! ' . $nome . ' não pode beber ainda, espere mais um pouco (--_--)' 

        );
    }

}

echo json_encode($dados);
