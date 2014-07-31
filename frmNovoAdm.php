<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <title>Novo Usuário</title>
        <meta charset="UTF-8">
        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
        <!-- Inclusão do Jquery -->
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Inclusão do Jquery Validate -->
        <!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
        <script type="text/javascript" src="js/validate.js"></script>
        <!-- Validacão do forumlario -->
        <script type="text/javascript">
            $(document).ready(function() {

                $('#meu_form').validate({
                    rules: {
                        login: {
                            required: true,
                            remote: 'includes/verificaemail.php'
                        }, //,
                        conflogin: {
                            required: true,
                            equalTo: "#login"
                        },
                        senha: {
                            required: true
                        },
                        confsenha: {
                            required: true,
                            equalTo: "#senha"
                        },
                        /*código meu*/
                        termos: "required"
                                /*fim código meu*/
                    },
                    messages: {
                        login: {
                            required: 'Este Campo &eacute; obrigat&oacute;rio',
                            remote: '<font color="red">Este Login j&aacute; est&aacute; em uso.</font>'}, //,
                        conflogin: {
                            required: "O campo confirmação de email é obrigatorio.",
                            equalTo: '<font color="red">O campo confirmação de email deve ser identico ao campo email.</font>'
                        },
                        senha: {
                            required: 'Este Campo &eacute; obrigat&oacute;rio'
                        },
                        confsenha:
                                {
                                    required: 'Este Campo &eacute; obrigat&oacute;rio',
                                    equalTo: '<font color="red">O campo confirmação de senha deve ser identico ao campo senha.</font>'
                                },
                        termos: "Para se cadastrar você deve aceitar os termos de uso."
                    }
                });

            });



            window.onload = function() {

                // $('#login').keypress function(){alert("");});

                $("#login").keypress(function() {

                    $('div.loader').show();
                });

                $("#login").focusout(function() {

                    $('div.loader').hide();
                });
                $("#login").keyup(function() {
                    $('div.loader').hide();
                });
            }

        </script>

    </head>
    <body>




        <h1>Cadastro de Usuário</h1>
        <form id="meu_form" action="inserirUsuarioADM.php" method="post" >
            <label>Digite um email válido</label><br/>
            <input type="text" name="login" id="login" />
            <br />
            <label>Confirme o  email</label><br/>
            <input type="text" name="conflogin" id="conflogin" />
            <br />
            <label>Nome</label><br/>
            <input type="text" name="nome" id="nome" />
            <br />
            Senha:<br />
            <input type="password" name="senha" id="senha"/><br />
            <label>Confirme a Senha</label><br/>
            <input type="password" name="confsenha" id="confsenha"/><br />
            <input type="submit" value="Cadastrar" /><br/>
            <a href="admin/indexadmin.php">Voltar</a>
        </form>
        <br/><br/>

        <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>

    </body>
</html>


<!--

     <script>
    function verifica(){
senha = document.getElementById("senha").value;
forca = 0;
mostra = document.getElementById("mostra");
if((senha.length >= 4) && (senha.length <= 7)){
    forca += 10;
}else if (senha.length>7){
    forca += 25;
}
if(senha.match(/[a - z]+/)){
    forca += 10;
}
if(senha.match(/[A-Z]+/)){
    forca += 20;
}
if (senha.macth(/d+/)){
    forca += 20;
}
if (senha.macth(/W+/)){
    forca += 25;
}
return mostra_res();
}
function mostra_res(){
    if(forca <30){
    mostra.innerHTML = '<tr><td bgcolor"red" width=""+forca+'"></td><td>Fraca</td></tr>;
}else if((forca >= 30) && (forca <60)){
    mostra.innerHTML = '<tr><td bgcolor"red" width=""+forca+'"></td><td>Media</td></tr>;
}else if((forca >= 60) && (forca <85)){
    mostra.innerHTML = '<tr><td bgcolor"red" width=""+forca+'"></td><td>Forte</td></tr>;
} else{
    mostra.innerHTML = '<tr><td bgcolor"red" width=""+forca+'"></td><td>Excelente</td></tr>;
}
}
</script>
</head><body>
<form name="formulario">
    <input type="senha" name="senha">
</form>
    <--
