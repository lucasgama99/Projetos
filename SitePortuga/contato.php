<!-- 
********************************************
*** @Author:Lucas Gama
***	@Template:Portugal Thug Games
***	@Date:15/05/2015
***	Copyright - Todos os direitos reservados
********************************************
-->

<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Grupo Conceição">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portugal Thug Games - Contato</title>
	<!-- ***** Bootstrap ***** -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <!-- ***** Font Awesome ***** -->
    <link rel="stylesheet" type="text/css" href="fonts/Awesome/css/font-awesome.min.css">
    <!-- ***** CSS ***** -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- ***** Musica ***** -->
	<audio autoplay="autoplay" loop="loop">
    	<source src="https://www.dropbox.com/s/bn35c4vnxr247kk/Classic%20Old%20School%20Hip%20Hop%20Beat%20_%20Rap%20Instrumental%202014%20__%20Boombap%20_%20Mobb%20Deep%20Style%20__%20Free.mp3?dl=1" type="audio/mp3" />
	</audio>
</head>
<body oncontextmenu="return false" onkeydown="return false">

<!-- TOPO DO SITE
================================================== -->
	<header class="main_header container">
		<nav class="navbar navbar-inverse navbar-fixed-top"><!-- quiser fundo preto no menu add: navbar-inverse -->
      		<div class="container-fluid">
        		<div class="navbar-header">
          			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
        		</div>
        		<div id="navbar" class="collapse navbar-collapse">
          			<ul class="nav navbar-nav navbar-right">
            			<li><a href="index.php">Home</a></li>
            			<li><a href="#about">Registrar</a></li>
            			<li><a href="equipe.php">Nossa Equipe</a></li>
            			<li class="active"><a href="contato.php">Contato</a></li>
            			<li class="dropdown">
                  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Regras <span class="caret"></span></a>
                  			<ul class="dropdown-menu" role="menu">
                    			<li><a href="#">Servidor</a></li>
                    			<li><a href="#">Fórum</a></li>
                    			<li><a href="#">Ts3</a></li>
                  			</ul>
                		</li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</nav>
	</header>
	<div class="clear"></div>
<!-- WIDGETS DO SITE
================================================== -->
	<hr/>
	<!-- Imagem Topo -->
	<div class="img_header">
		<img src="img/header.png" class="img-responsive" alt="">
	</div>

	<hr class="separator"/>

<!-- CONTEUDO DO SITE
================================================== -->
	<!-- Conteudo do Site -->
		<main class="content">
			<!-- Bloco 1 - Contato -->
			<div class="bloc l-bloc ">
				<div class="container bloc-lg b-divider">
					<div class="row">
						<div class="col-sm-7">
							<form method="post" id="fContato" action="#">
								<fieldset id="info-usuario">
									<legend>Contato:</legend>
									<font size="2">
										<p><label for="cNome">Nick InGame:</label> <input type="text" name="tNome" id="cNome" size="50" maxlength="50" placeholder="Nome no Jogo"/></p>
										<p><label for="cEmail">Email Game:</label> <input type="email" name="tEmail" id="cEmail" size="50" maxlength="30" placeholder="Seu Email"/></p>
										<p><label for="cNivel">Level Game:</label> <input type="text" name="tNivel" id="cNivel" size="50" maxlength="30" placeholder="Seu Nivel"/></p>
										<p><label for="cVip">Vip InGame:</label> <input type="text" name="tVip" id="cVip" size="50" maxlength="30" placeholder="Apenas Sim ou Não"/></p>
									</font>
								</fieldset>

								<fieldset id="info-mensagem">
									<legend>Mensagem do usúario:</legend>
									<font size="2">
										<p><label for="cMsg">Mensagem:</label> 
										<br/>
										<textarea name="tMsg" id="cMsg" coluns="45" rows="5" placeholder="Digite aqui sua mensagem..." style="width: 441px; height: 142px;"></textarea></p>
									</font>
								</fieldset>

								<br/>
								<button type="bt btn-primary" class="btn btn-lg btn-warning" id="bt-enviar">Enviar</button> 
           					</form>
						</div>
						<div class="col-sm-5">
							<!-- Separação com Linha Vertical -->
							<table border=0 align=left width=1 height=600 >
								<tr><td bgcolor=grey></td></tr>
							</table>

							<h3 class="text-center mg-md">
								Siga-Nos Nas Redes Sociais
							</h3>
							<p class="txt-social">E fique por dentro de todas as novidades, lançadas recentemente no servidor, desde de notícias sobre regras até mesmo notícias sobre atualizações no gamemode !</p>
							<ul class="text-center img-social">
								<li class="iten-face"><a href=""><img src="img/facebook_dark.png" height="32" width="32"></a></li>
								<li class="iten-twit"><a href=""><img src="img/twitter_dark.png" height="32" width="32"></a></li>
								<li class="iten-ytb"><a href=""><img src="img/youtube_dark.png" height="32" width="32"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!-- bloc-1 FIM -->
		<hr class="separator"/>
	</main>

<!-- RODAPÉ DO SITE
================================================== -->
	<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3">
                        <h3>Sobre</h3>
                        <p><a href="the-team.html" class="a-btn a-block">Time de Administração</a></p>
                        <p><a href="contact.html" class="a-btn a-block">Contato</a></p>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Comunidade</h3>
                        <p><a href="index.html" class="a-btn a-block">Forum</a></p>
                        <p><a href="index.html" class="a-btn a-block">Facebook</a></p>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>UCP</h3>
                        <p><a href="index.html" class="a-btn a-block">Logar</a></p>
                        <p><a href="register.html" class="a-btn a-block">Registrar</a></p>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Regras</h3>
                        <p><a href="server-rules.html" class="a-btn a-block">Regras</a></p>
                        <p><a href="index.html" class="a-btn a-block">Privacidade</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Lucas Web Developer 
                        <p></p>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	
	<!-- ***** Scripts Bootstrap ***** -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>