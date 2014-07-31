<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Usuarios</title>
    </head>
    <body>
        <form name="frmBusca" action="buscar.php" method="POST">
            <label>Pesquisar Usuario</label>
            <input type="search" name="txtNome"  results="1">
            <input type="submit" value="Buscar" name="buscar">
        </form>
    </body>
</html>

<?php
include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';

$sql = "SELECT * FROM usuario";
$result = mysql_query($sql);
echo '<table border =1>';
echo '<caption><h2>Lista de Usuarios Cadastrados</h2></caption>
        <tr>
            <th>Nome</th> 
            <th>Email</th>
            <th>Tipo de Usuario</th>
            <th></th>
            <th>Status</th>
            <th>Excluir Usuario</th>
        </tr>
        ';
while ($usuarios = mysql_fetch_array($result)) {
    echo '<tr>';
    echo '<td align=center>' . $usuarios['NOME_USUARIO'] . '</td>';
    echo '<td align=center>' . $usuarios['EMAIL_USUARIO'] . '</td>';
    echo '<td align=center>' . $usuarios['TIPO_USUARIO'] . '</td>';
    echo '<td align=center> <a href=tornarAdm?acao=tornar&cod='. $usuarios['COD_USUARIO'] .'>Tornar ADM' . '</td>';
    echo '<td align=center>' . ' Ativo ' . '</td>';
    //echo '<td align=center> <a href=excluir.php?acao=delete&cod=' . $usuarios['COD_USUARIO'] . '> <center><img src="images/x.jpg" alt="" width="20" height="20" onclick="myFunction()"><center> </a></td>';
    echo '<td align=center> <center><a href=excluir.php?acao=delete&cod=' . $usuarios['COD_USUARIO'] . '><img src="images/x.jpg" alt="" width="20" height="20" onclick="myFunction()"><center> </a></td>';
    echo '</tr>';
}

echo '<script type=text/javascript>
function myFunction() {
    var x;
    if (confirm("Você tem certeza disso?!") == true) {
        x = "";
    } else {
        x = "";
    }
}
</script> ' 
;
echo '</table></br>';
echo "<a href='admin/indexadmin.php'>Voltar</a><br>";