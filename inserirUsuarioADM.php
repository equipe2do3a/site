<?php

include_once 'conexao/conecta.inc';
include_once 'classes/bcrypt.class.php';
echo '<meta charset=UTF-8>';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['login'];
$senha = $_REQUEST['senha'];
$senha = Bcrypt::hash($senha);

$sql = "INSERT INTO usuario (NOME_USUARIO, 
                             EMAIL_USUARIO,
                             SENHA_USUARIO,
                             TIPO_USUARIO)";

$sql.= "VALUES('$nome','$email', '$senha', 'ADM')";

//Usuario inserido
if (mysql_query($sql)) {
    echo 'Novo administrador inserido com sucesso<br/>';
    echo '<a href=admin/indexadmin.php>Inicio</a>';
} else {
    echo mysql_error();
}
echo'<br/>';
