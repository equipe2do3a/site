<?php

$acao = $_GET['acao'];
$codUsuario = $_GET['cod'];
$tipo = $_GET['ADM'];

if ($acao === "tornar") {
    include("conexao/conecta.inc");
    $con = mysql_connect($server, $user, $password) or die("Não Foi Possível Conectar");
    $sel = mysql_select_db($database) or die("Não Foi Possível Selecionar");
    $tornarAdm = mysql_query("UPDATE usuario SET COD_USUARIO='$codUsuario', TIPO_USUARIO='$tipo'");
    if ($tornarAdm){
        echo "<b>Novo administrador inserido com sucesso!!!</b><br/>";
        echo '<script type="text/javascript">
                    location.href = "listarUsuarios.php"
               </script>';
    }
}