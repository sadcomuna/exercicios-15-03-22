<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = $_REQUEST['ANO'];
$DataAtual = date("Y-m-d");
$IDADE = date_diff(date_create($NASC), date_create($DataAtual));


//echo 'Idade é '.$IDADE->format('%y');
//echo $DataAtual;

if (empty($NOME)) {
    $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {

    if ($IDADE->format('%y') >= 18) {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Olá' . $NOME . ', A sua bebida favorita é: ' . $BEBIDA
        );
    } else {
        $dados = array(
            "B4" => 'alert-danger',
            "mensagem" => 'Você é menor de idade! ' . $NOME . ', não pode beber'
        );
    }

}

echo json_encode($dados);
