<!doctype html>
<html>
    <head>
        <title>Formulário de Cadastro</title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <script type="text/javascript">
            function Validacao(){
                if (Cadastro.email.value !== Cadastro..value){
                    alert ("Email não confere!");
                    return false;
                }
            }
            </script>
    </head>
    <body>
        <form method="post" action="inserirUsuario.php">
            <label>Nome:</label><input type="text" name="nome"><br/>
            <label>Email:</label><input type="email" name="email"><br/>
            <label>Confirmar seu Email:</label><input type="password" name="passwordcon"><br/>
            <label>Senha:</label><input type="password" name="senha"><br/>
            <input type="submit" onClick="return Validacao()" value="Inserir"/>
        </form>
    </body>
</html>