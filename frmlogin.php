   <!doctype html>
<html>
    <head>
        <title>Formulário de Login</title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
    </head>
    <body>
        <form method="post" action="login.php">
            <label>Email:</label><input type="email" name="email"><br/>
            <label>Senha:</label><input type="password" name="senha"><br/>
            <input type="submit" name="Enviar"><br/>
            </form>
        <a href="frmcadastro.php">Cadastre-se</a><br/>
        <a href="senha.php">Esqueceu a senha?</a><br/>
    </body>
    <section>
          <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
                <script type="text/javascript">
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();
			
			});
		</script>
        
    </section>
</html>