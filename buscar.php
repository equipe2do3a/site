<?php
require_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';

if (isset($_POST['buscar'])) {
    $q = mysql_escape_string($_POST['txtNome']);
    mysql_select_db($database, $connection);
    $query_Busca = "SELECT * FROM usuario WHERE COD_USUARIO LIKE '%$q' OR
                                                EMAIL_USUARIO LIKE '%$q%' OR
                                                NOME_USUARIO LIKE '%$q%' OR
                                                TIPO_USUARIO LIKE'$q'";
    $Busca = mysql_query($query_Busca, $connection) or die(mysql_error());
    $row_Busca = mysql_fetch_assoc($Busca);
    $totalRows_Busca = mysql_num_rows($Busca);
} else {
    mysql_select_db($database, $connection);
    $query_Busca = "SELECT * FROM usuario";
}
?>
<!DOCKTYPE html>
<html>
    <head>
        <title>Busca do Usuario</title>
    </head>
    <body>
        <table border="1" cellspacig="5" cellpadding="0">
            <tr>
                <td>Codigo</td>
                <td>Email</td> 
                <td>Nome</td>
                <td>Tipo</td>
            </tr>
            <?php do { ?>
                <tr>
                    <td><?php echo $row_Busca['COD_USUARIO']; ?></td>
                    <td><?php echo $row_Busca['EMAIL_USUARIO']; ?></td>
                    <td><?php echo $row_Busca['NOME_USUARIO']; ?></td>
                    <td><?php echo $row_Busca['TIPO_USUARIO']; ?></td>
                </tr>
            <?php } while ($row_Busca = mysql_fetch_assoc($Busca)); ?>
        </table>
        <br/>
        <?php echo '<a href=listarUsuarios.php>Voltar</a>'; ?>
    </body>
</html>