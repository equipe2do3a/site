<?php
//Validando o Usuario 

function validaAutenticacao($link,$tipo){
    if($tipo === "ADM")
    include '../classes/bcrypt.class.php';
    else
        include 'classes/bcrypt.class.php';
    echo '<meta charset=UTF-8>';
    session_start();
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
    {
        session_destroy();
        echo '<script type="text/javascript">
                alert("Acesso negado!  Você não efetuou Login")
             </script>';
        echo '<script type="text/javascript">
                    location.href = "'.$link.'"
               </script>';
    }
    else{
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        $tipoUsuario = $_SESSION['tipoUsuario'];
        if($tipo === 'RES')
        {
            include_once 'conexao/conecta.inc';
        }elseif($tipo === 'ADM'){
            include_once '../conexao/conecta.inc';
        }
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
        $result = mysql_query($query);
        $usuarios = mysql_fetch_array($result);
        $hash = $usuarios['SENHA_USUARIO'];
        /* @var $email type */
        if($email !== $usuarios['EMAIL_USUARIO'])
        {
            session_destroy();
            echo '<script type="text/javascript">
                alert("Acesso negado! \n Usuario não confere")
             </script>';
        echo '<script type="text/javascript">
                    location.href = "'.$link.'"
               </script>';
        }//elseif ($senha !== $usuarios['SENHA_USUARIO'])
        // elseif (Bcrypt::check($senha !== $usuarios['SENHA_USUARIO'], $hash ))
        elseif (!Bcrypt::check($senha, $usuarios['SENHA_USUARIO'] ))
            {
            session_destroy();
            echo '<script type="text/javascript">
                alert("Acesso negado! \n Senha não confere")
             </script>';
        echo '<script type="text/javascript">
                    location.href = "'.$link.'"
               </script>';
            /*echo 'Senha não confere!<br/>';
            echo "<a href=$link>Acesso Negado!</a><brr/>";*/
        
        //Usuario não confere com o tipo 
        }elseif($tipoUsuario !== $tipo){
            session_destroy();
            echo '<script type="text/javascript">
                alert("Acesso negado! \n Acesso Negado")
             </script>';
        echo '<script type="text/javascript">
                    location.href = "'.$link.'"
               </script>';
            /*echo 'Acesso negado para seu tipo de Usuário!<br/>';
            echo "<a href=$link>Acesso Negado!</a><br/>";*/
        }

}
}







/* ---------------------------------------------------------------------------


function nome($nome, $link2){
    echo '<meta charset=UTF-8>';
     if($nome === 'NOME')
        {
            include_once '../conexao/conecta.inc';
        }
    if(!isset($_SESSION['nome'])){
         $nomeUsuario = $_SESSION['nomeUsuario'];
        $query2 = "SELECT * FROM usuario WHERE NOME_USUARIO = '$nomeUsuario'";
        $result2 = mysql_query($query2);
        $nome = mysql_fetch_array($result2);
        if (($nomeUsuario != $nome['NOME_USUARIO'] ) ){
            session_destroy();
            echo '<script type="text/javascript"> alert("Ola "+ "'.$nome.'" </script>';
            echo '<script type=text/javascript"> location.href = "'.$link2.'" </script>';
        }
    }
}        
*/
