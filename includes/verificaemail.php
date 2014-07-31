<?php
//recebendo a informação do formulario
$email = $_GET['login'];
//configurando para conexão com o mysql
$server = 'localhost';
$user = 'root';
$password = '12345678';
$database = 'login';
//estabelecendo a conexão e selecionando o banco de dados, executando a query
$connection = mysql_connect($server,$user,$password);
mysql_select_db($database,$connection);
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
//criando uma "matriz" para armazenar os emails cadastrados com o banco
$emailsCadastrados = array();
//guardando os email na matriz $emailCadastrados
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}
//A função in_array(), verifica se determinado valor faz parte de uma matriz. A função recebe dois parametros
//o "valor a ser pesquisado" e a "matriz"
if(in_array($email, $emailsCadastrados))
{
    echo 'false';
}  else {
    echo 'true';
}
exit();