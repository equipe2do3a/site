<?php
include_once '../includes/funcoesuteis.inc';
echo '<meta charset=UTF-8>';
validaAutenticacao('../frmlogin.php','ADM');
/*
echo '<h3>Página Inicial do Usuario Administrativo</h3><br/>';
echo '<a href=../listarUsuarios.php>Lista de Usuarios Cadastrados</a><br/>';
echo '<a href=#>Lista de Usuarios Inativos</a><br/>';
echo '<a href=../frmNovoAdm.php>Cadastrar novo administrador</a><br/>';
echo '<a href=#>Newsletter</a><br/>';
echo '<a href=../sair.php>Sair</a><br/>';
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/script.js"></script>
</head>
    <body>
        <nav id="menu">    
            <ul id="menu_sprite">
                <li><a id="home" class="geral" href="../listarUsuarios.php" title="Usuarios Cadastrados"></a></li>
                <li><a id="romance" class="geral" href="#" title="Usuarios Inativos"></a></li>
                <li><a id="comedia" class="geral" href="../frmNovoAdm.php" title="Cadastrar novo administrador"></a></li>
                <li><a id="acao" class="geral" href="#" title="Newsletter"></a></li>
                <li><a id="drama" class="geral" href="../sair.php" title="Sair"></a></li>
            </ul>
        </nav> 
    </body> 
</html>
         
