<?php

echo '<meta charset=UTF-8>';
include 'conexao/conecta.inc';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

$sql = "UPDATE usuario SET NOME_USUARIO='$nome', EMAIL_USUARIO='$email', SENHA_USUARIO='$senha' WHERE COD_USUARIO = '$cod'";


if (mysql_query($sql)) {
    echo 'Dados inseridos com sucesso !<br/>';
} else {
    echo mysql_error();
}
echo '<a href=indexrestrito.php> Página Inicial</a><br/>';