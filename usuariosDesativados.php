<?php
include_once './conexao/conecta.inc';
echo '<meta charset=UTF-8>';

$cod = $_GET['id'];
$sql = "SELECT FROM usuario WHERE COD_USUARIO";