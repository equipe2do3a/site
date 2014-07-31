<?php
echo '<meta charset=UTF-8>';
//Configuração
$server = 'localhost';
$user = 'root';
$password = '12345678';
$database = 'login';

// Estabelecendo a conexão
$connection = mysql_connect($server,$user,$password);
if($connection === FALSE)
{
    echo 'Não foi possivel a conexão com o Mysql<br/>';
    echo mysql_error();
}
else{
    //Selecionando o banco de dados
    if(!mysql_select_db($database,$connection))
    {
        echo 'Não foi possivel selecionar o banco de dados'.$database.'<br/>';
        echo mysql_error();
    }
}