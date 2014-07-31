<?php
include 'classes/bcrypt.class.php';
include 'conexao/conecta.inc';  
$email = $_REQUEST['email'];
$senha = '!@#$%&';
$senha = Bcrypt::hash($senha);

$sql = "INSERT INTO usuario (EMAIL_USUARIO,
                             SENHA_USUARIO)";  
$sql.= "VALUES('$email', '$senha')";    
    
//Usuario inserido
    if(mysql_query($sql)){
        echo 'Senha trocada com sucesso<br/>';
        echo 'Sua nova senha é:  ' . $senha . '<br/>';
        echo '<a href=index.php>Inicio</a>';
    }else{
        echo mysql_error();
    } 
    echo'<br/>';
    
    