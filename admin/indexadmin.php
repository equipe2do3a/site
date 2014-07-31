<?php
include_once '../includes/funcoesuteis.inc';
echo '<meta charset=UTF-8>';
validaAutenticacao('../frmlogin.php','ADM');

echo '<h3>Página Inicial do Usuario Administrativo</h3><br/>';
echo '<a href=../listarUsuarios.php>Lista de Usuarios Cadastrados</a><br/>';
echo '<a href=../frmNovoAdm.php>Cadastrar novo administrador</a><br/>';
echo '<a href=../sair.php>Sair</a><br/>';


