<?php

include 'classes/bcrypt.class.php';
include 'conexao/conecta.inc';
$email = $_REQUEST['email'];
$senha2 = geraSenha(6);
$senha = Bcrypt::hash($senha2);

$sql = "UPDATE usuario SET SENHA_USUARIO = '$senha' WHERE EMAIL_USUARIO = '$email'";
//$sql.= "VALUES('$senha')";

//Usuario inserido
if (mysql_query($sql)) {
    echo 'Senha trocada com sucesso<br/>';
    echo 'Sua nova senha é:  ' . $senha2 . '<br/>';
    echo '<a href=index.php>Inicio</a>';
} else {
    echo mysql_error();
}
echo'<br/>';

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
    $lmin = 'abcdefghijklmnopqrstuvwxyz';
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $num = '1234567890';
    $simb = '!@#$%*-';
    $retorno = '';
    $caracteres = '';

    $caracteres .= $lmin;
    if ($maiusculas)
        $caracteres .= $lmai;
    if ($numeros)
        $caracteres .= $num;
    if ($simbolos)
        $caracteres .= $simb;

    $len = strlen($caracteres);
    for ($n = 1; $n <= $tamanho; $n++) {
        $rand = mt_rand(1, $len);
        $retorno .= $caracteres[$rand - 1];
    }
    return $retorno;
}

    
