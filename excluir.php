<?php

$acao = $_GET['acao'];
$codUsuario = $_GET['cod'];

//delete usuario 
if ($acao === "delete") {
    include("conexao/conecta.inc");
//$idUsuario = $_POST['COD_USUARIO'];
    $con = mysql_connect($server, $user, $password) or die("Não Foi Possível Conectar");
    $sel = mysql_select_db($database) or die("Não Foi Possível Selecionar");
    $delete = mysql_query("DELETE FROM usuario WHERE COD_USUARIO='$codUsuario'");
    if ($delete) {
        echo "<b>Usuario deletado com sucesso!!!</b><br/>";
        echo '<script type="text/javascript">
                    location.href = "listarUsuarios.php"
               </script>';
    }
}