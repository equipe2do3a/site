<?php
include_once 'includes/funcoesuteis.inc';
echo '<meta charset=UTF-8>';
validaAutenticacao('frmlogin.php', 'RES');

echo '<h3>Página Inicial do Usuario Restrito</h3><br/>';
echo '<a href=frmAtualizarUsuario.php> Atualize a sua Conta</a><br/>';
// echo '<a href=#>Destivar Conta</a><br/>';
echo '<a href=sair.php>Sair</a><br/>';