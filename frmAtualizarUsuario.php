<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário - Atualizar Usuário</title>
        <link rel="stylesheet" href="#">
    </head>
    <body>

        <h1>Formulário - Atualizar Usuário</h1>
        <?php
         include_once 'includes/funcoesuteis.inc';
         validaAutenticacao('frmlogin.php', 'RES');
            $email = $_SESSION['email'];
            $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
            $result = mysql_query($query);
            $usuario  = mysql_fetch_array($result);
        ?>
        <form action="atualizarUsuario.php" method="post">
            <label>Nome </label><input type="text" name="nome" value="<?php echo $usuario['NOME_USUARIO']; ?>"><br/> 
            <label>Email </label><input type="email" name="email" value="<?php echo $usuario['EMAIL_USUARIO']; ?>"><br/>
            <label>Confirma Email </label><input type="email" name="email" value="<?php echo $usuario['EMAIL_USUARIO']; ?>"><br/>
            <label>Senha </label><input type="password" name="senha" value="<?php echo $usuario['SENHA_USUARIO']; ?>"><br/>
            <label>Confirmar Senha </label><input type="password" name="confirmeSenha_usuario" value="<?php echo $usuario['SENHA_USUARIO']; ?>"><br/> 
            <input type="submit" value="Enviar">
        </form>
        <a href="index.php">Página inicial</a>

    </body>
</html>