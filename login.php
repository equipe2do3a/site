<?php
/* O include_once, é responsavel em incluir um arquivo apenas quando for necessario, ou seja, se o arquivo ja tiver sido
  incluido anteriormente o include once não é executado */
include_once 'conexao/conecta.inc';
include_once 'classes/bcrypt.class.php';

echo '<meta charset=UTF-8>';
session_start();
if (isset($_POST['email']) and isset($_POST['senha'])) {



    $email = $_POST['email'];
    $senha = $_POST['senha'];



    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $result = mysql_query($query);
    $totalUsuario = mysql_num_rows($result);
    $hash = $totalUsuario['SENHA_USUARIO'];

    if ($totalUsuario === 0) {
        echo 'Usuario não encontrado !<br/>';
    } else {
        //Recuperando a senha do usuario
        //$array = mysql_fecth_array($result);
        $rray = mysql_fetch_array($result);
        $senhaUsuario = $rray['SENHA_USUARIO'];
        $tipoUsuario = $rray['TIPO_USUARIO'];
        /* @var $nomeUsuario type */
        $nomeUsuario = $rray['NOME_USUARIO'];
        //if(Bcrypt::check($senhaUsuario, $hash, $tipoUsuario === 'RES')){
        //if($senha != $senhaUsuario){
        //if (Bcrypt::check($senha != $senhaUsuario, $hash)) {
        if (!Bcrypt::check($senha,$senhaUsuario)) {
            echo 'Senha não confere !';
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            $_SESSION['nomeUsuario'] = $nomeUsuario;
            if ($tipoUsuario === 'RES') {
                echo '<script language= "JavaScript">
                       location.href="indexrestrito.php"
                  </script>';
            } elseif ($tipoUsuario === 'ADM') {
                echo '<script language = "JavaScript">
                       location.href="admin/indexadmin.php"
                  </script>';
            } else {
                echo 'Tipo de Usuário inválido!';
            }
        }
    }
} else {
    echo '<script language = "JavaScript">
               location.href="frmlogin.php"
          </script>';



    $_SESSION['cod'] = $codUsuario;
    $_SESSION['horalogin'] = $horalogin;
    $_SESSION['dataLogin'] = $dataLogin;

   
}
