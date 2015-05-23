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
	<meta name="description" content="Pbg Host">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="http://i.imgur.com/JfpJPVf.jpg" type="image/x-icon"/>
	<link rel="shortcut icon" href="http://i.imgur.com/JfpJPVf.jpg" type="image/x-icon"/>
	<title>Portal Brasil Games</title>
	<!-- ***** Bootstrap ***** -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
	<!-- ***** Font Awesome ***** -->
	<link rel="stylesheet" type="text/css" href="fonts/Awesome/css/font-awesome.min.css">
	<!-- ***** CSS ***** -->
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<!-- ***** Font Oxygen By: Google Fonts ***** -->
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- TOPO DO SITE
================================================== -->
	<header class="main_header">
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
        			<div class="logo-menu nav navbar-nav navbar-left img-responsive">
        				<a href="index.php"><img src="img/logo.png" height="100%" width="100%"></a>
        			</div>
          			<ul class="nav navbar-nav navbar-right">
            			<li class="active"><a href="index.php">Inicio</a></li>
            			<li class="dropdown">
                  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TeamSpeak<span class="caret"></span></a>
                  			<ul class="dropdown-menu" role="menu">
                    			<li><a href="teamspeakinter.php">Internacional</a></li>
                    			<li><a href="teamspeakbr.php">Nacional</a></li>
                  			</ul>
                		</li>
                		<li><a href="blog.php">Blog</a></li>
            			<li><a href="ajuda.php">Ajuda</a></li>
            			<li><a href="contato.php">Contato</a></li>
            			<li class="dropdown">
                  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">A Empresa <span class="caret"></span></a>
                  			<ul class="dropdown-menu" role="menu">
                    			<li><a href="sobrenos.php">Sobre Nós</a></li>
                    			<li><a href="nossaempresa.php">Nossa Empresa</a></li>
                  			</ul>
                		</li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</nav>
	</header>
<!-- WIDGETS DO SITE
================================================== -->
	<!-- Carrousel -->
	<div id="slide-news" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#slide-news" data-slide-to="0" class="active"></li>
			<li data-target="#slide-news" data-slide-to="1"></li>
			<li data-target="#slide-news" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="img/slide/img1.jpg" alt="Servidores Windows" class="img-responsive" width="100%">
				<div class="carousel-caption">
					<h2>Servidores Windows & Linux de Qualidade!</h2>
				</div>
			</div>
			<div class="item">
				<img src="img/slide/img2.jpg" alt="Servidores Linux" class="img-responsive" width="100%">
				<div class="carousel-caption">
					<h2>Os Melhores DataCenters Do Mundo!</h2>
				</div>
			</div>
			<div class="item">
				<img src="img/slide/img3.jpg" alt="Seja Bem Vindo ao Portugal Thug Games" class="img-responsive" width="100%">
				<div class="carousel-caption">
					<h2>Suporte 24hrs Online!</h2>
				</div>
			</div>
		</div>

		<a class="carousel-control left" href="#slide-news" data-slide="prev">
			<span class="icon-prev"></span>
		</a>

		<a class="carousel-control right" href="#slide-news" data-slide="next">
			<span class="icon-right"></span>
		</a>
	</div>

	<hr class="separator"/>
	
	<section class="suporte-ts3">
		<h3 class="text-center mg-md">
			<b>Suporte via teamspeak pelo endereço</b>
		</h3>
		<p class="text-center mg-md">
			<a href="ts3server://ts.com.br?port=7777"><button class="btn btn-primary">suporte.pbghost.com.br</button></a>
		</p>
	</section>

	<hr class="separator"/>
<!-- CONTEUDO DO SITE
================================================== -->
	<!-- Conteudo do Site -->
	<main class="content">
<!-- ********************* Infomarções Rápidas ********************* -->
		<div class="bloc l-bloc ">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-md-4">
						<div class="icon-round">
							<img src="img/secure_img.png" height="88" width="85">
						</div>
						<h3 class="text-center mg-md">
							<b>Seguro & Confiável</b>
						</h3>
						<p class="text-center">
							Os servidores <b>PBG Host</b>, possuem segurança física por firewall e energia redundante. Seus servidores estarão seguros conosco.
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-round">
							<img src="img/fast_img.png" height="88" width="85">
						</div>
						<h3 class="text-center mg-md">
							<b>Conexão Estável</b>
						</h3>
						<p class="text-center">
							Com nossos servidores ultra modernos e fibra óptica, possuimos uma estabilidade incomparável.
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-round">
							<img src="img/support_img.png" height="88" width="85">
						</div>
						<h3 class="text-center mg-md">
							<b>Suporte ao consumidor</b>
						</h3>
						<p class="text-center">
							Possuímos uma equipe dedicada ao suporte de vendas e serviços, para auxiliá-lo a qualquer momento. Você também pode falar conosco via TeamSpeak.
						</p>
					</div>
				</div>
			</div>
		</div>
		<hr class="separator"/>
<!-- ********************* Infomarções Rápidas FIM ********************* -->

<!-- ********************* Planos ********************* -->
		<div class="bloc l-bloc">
			<div class="container bloc-lg b-divider">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center mg-md">
							<b>Planos & Preços</b>
						</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="bloc l-bloc">
			<div class="container">
				<div class="row">
					<div class="col-md-4 zoom">
						<div class="plan-container text-center">
					        <div class="plan">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		TeamSpeak Beta       		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	R$10,00<span class="term">Mensal</span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	        
						        
						        <div class="plan-features">
									<ul>
										<li><strong>Perfeito</strong> para pequenos servidores ou grupos de amigos.</li>
										<li>30 Slots</li>
										<li>Todos os codecs</li>
										<li>Proteção anti-DDoS</li>
										<li>IP Fixo e Personalizado</li>
										<li>Painel de administração</li>
										<li>99,9% de Uptime</li>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">				
									<a href="javascript:;" class="btn">Mais Informações</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->

					</div>
					<div class="col-md-4 zoom">
						<div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title plan-active">
						        		TeamSpeak Vip          		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price plan-active">
					                	R$20,00<span class="term">Mensal</span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	          
						        
						        <div class="plan-features">
									<ul>					
										<li><strong>Perfeito</strong> para médios servidores ou equipes privadas.</li>
										<li>50 Slots</li>
										<li>Todos os codecs</li>
										<li>Proteção anti-DDoS</li>
										<li>IP Fixo e Personalizado</li>
										<li>Painel de administração</li>
										<li>99,9% de Uptime</li>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">				
									<a href="javascript:;" class="btn">Mais Informações</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
					</div>
					<div class="col-md-4 zoom">
						<div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		TeamSpeak Premium	
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	R$30,00<span class="term">Mensal</span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	       
						        
						        <div class="plan-features">
									<ul>
										<li><strong>Perfeito</strong> para grandes servidores ou clãs de jogos onlines.</li>
										<li>100 Slots</li>
										<li>Todos os codecs</li>
										<li>Proteção anti-DDoS</li>
										<li>IP Fixo e Personalizado</li>
										<li>Painel de administração</li>
										<li>99,9% de Uptime</li>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">				
									<a href="javascript:;" class="btn">Mais Informações</a>				
								</div> <!-- /plan-actions -->
					
							</div> <!-- /plan -->
							
					    </div> <!-- /plan-container -->
					</div>
				</div>
			</div>
		</div>

<!-- ********************* Planos FIM ********************* -->
		<hr class="separator"/>
		<section id="parallaxBar" data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" data-type="background">
        	<div class="container-fluid">
        	</div>
    	</section>
    	<hr class="separator"/>

<!-- ********************* Infomarções Geral ********************* -->
		<div class="bloc l-bloc ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="mg-md text-center">
							<p><b>Mais Detalhes</b></p>
						</h1>
						<p>
							<h3 class="text-center">Você ganha muito mais vantagens conosco</h3>
						</p>
					</div>
				</div>
			</div>
		</div>

		<hr class="separator"/>

		<div class="bloc l-bloc ">
			<div class="container">
				<div class="row">
    				<div class="col-md-6 features"> 
    					<img src="img/setup_icon.png" alt="icon">
      					<h4><b>Ativa&ccedil;&atilde;o Imediata</b></h4>
      					<p>Assim que seu pagamento for confirmado, via pagseguro ou dep&oacute;sito, seu servidor ser&aacute; ativo imediatamente. Sem nenhum tempo de espera.</p>
    				</div>
    				<div class="col-md-6 features"> 
    					<img src="img/backup_icon.png" alt="icon">
      					<h4><b>Backups Di&aacute;rios</b></h4>
      					<p>Todos os servidores possuem backups di&aacute;rios. N&oacute;s utilizamos servidores dedicados para backup, disponibilizando um meio r&aacute;pido e f&aacute;cil para resturar e administrar os mesmos.</p>
    				</div>
  				</div>
  				<div class="row">
    				<div class="col-md-6 features"> 
    					<img src="img/git_icon.png" alt="icon">
     					<h4><b>Grupos Pr&eacute;-definidos</b></h4>
      					<p>Nossos TeamSpeaks possuem como opcional a libera&ccedil;&atilde;o com grupos pr&eacute;-definidos. Assim facilitando o uso do TeamSpeak para quem n&atilde;o tem tanto conhecimento sobre permiss&otilde;es.</p>
    				</div>
    				<div class="col-md-6 features"> 
    					<img src="img/money.png" alt="icon">
      					<h4><b>Meios de Pagamento Seguros</b></h4>
     	 				<p>Utilizamos o PagSeguro, para maior seguran&ccedil;a de nossos clientes. Por meio dele &eacute; poss&iacute;vel realizar pagamentos utilizando cart&otilde;es sem risco de furto.</p>
    				</div>
  				</div>
  				<div class="row">
    				<div class="col-md-6 features"> 
    					<img src="img/cpanel_icon.png" alt="icon">
      					<h4><b>Painel de Administra&ccedil;&atilde;o</b></h4>
      					<p>Todos os servi&ccedil;os incluem um painel de administra&ccedil;&atilde;o, onde cada qual possui suas op&ccedil;&otilde;es essenciais. Procurando facilitar e agilizar o uso de seus produtos.</p>
    				</div>
    				<div class="col-md-6 features"> 
    					<img src="img/firewall.png" alt="icon">
      					<h4><b>Firewal F&iacute;sico</b></h4>
      					<p>N&oacute;s possu&iacute;mos total integra&ccedil;&atilde;o &aacute; uma estrutura de mitiga&ccedil;&atilde;o, onde por meio desta garantimos total qualidade e estabilidade em nossos servi&ccedil;os.</p>
    				</div>
  				</div>
			</div>
		</div>		
<!-- ********************* Infomarções Geral FIM ********************* -->
		<hr class="separator"/>

<!-- ********************* DDoS ********************* -->
		<div class="bloc l-bloc">
			<div class="container bloc-lg b-divider">
				<div class="row">
					<div class="col-md-6">
						<h1 class="text-center mg-md">
							<b>Proteção Anti-DDoS</b>
							<br/>
							<br/>
							<img src="img/anti-ddos.jpg" class="text-center">
						</h1>
					</div>
					<div class="col-md-6">
						<!-- Separação com Linha Vertical -->
						<table border=0 align=left width=1 height=400 >
							<tr><td bgcolor=grey></td></tr>
						</table>
						<h4 class="text-center def-ddos">O que são ataques DDoS?</h4>
						<p class="text-center def-ddos">
							É uma tentativa maliciosa de derrubar redes, aplicativos baseados na web ou serviços ao desarmar esses recursos com um volume muito alto de dados ou debilitá-los de outra forma.
						</p>
						<h4 class="text-center def-ddos">A PBG Host Conta com proteção a DDoS?</h4>
						<p class="def-ddos">
							Nós da PBG Host contamos com um dos melhores firewall do mercado contra ddos, e estamos sempre trabalhando contra esse tipo de ataque, por isso nosso suporte é aberto 24hrs, para está auxiliando você cliente com toda a atenção que você merece.
						</p>
					</div>
				</div>
			</div>
		</div>
<!-- ********************* DDoS FIM ********************* -->		

		<hr class="separator"/>

<!-- ********************* Testemunhas e Parceiros ********************* -->
		<div class="bloc l-bloc ">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>
							<b>Testemunhas e Parceiros</b>
						</h2>
						<p class="text-center">
							<h4>Algumas palavras de nossos cliente e parceiros</h4>
							<br/>
							<br/>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 zoom">
						<div class="client-round">
							<img src="img/client.jpg" height="72" width="72">
						</div>
						<p class="text-center">
							Em Breve.
						</p>
						<p class="text-center">
							<b>Em Breve.</b>
						</p>
					</div>
					<div class="col-md-4 zoom">
						<div class="client-round">
							<img src="img/client.jpg" height="72" width="72">
						</div>
						<p class="text-center">
							Em Breve.
						</p>
						<p class="text-center">
							<b>Em Breve.</b>
						</p>
					</div>
					<div class="col-md-4 zoom">
						<div class="client-round">
							<img src="img/client.jpg" height="72" width="72">
						</div>
						<p class="text-center">
							Em Breve.
						</p>
						<p class="text-center">
							<b>Em Breve.</b>
						</p>
					</div>
				</div>
			</div>
		</div>
<!-- ********************* Infomarções Rápidas FIM ********************* -->
		<div class="bloc 1-bloc">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="slide-parceiros" class="carousel slide">
							<div class="carousel-inner text-center">
								<div class="item active">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
								</div>
								<div class="item">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
								</div>
								<div class="item">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
									<img src="img/Parceiros/parceiros.png" alt="Parceiro" class="img-responsive" id="imagem-parceiros" width="100%">
								</div>
							</div>
							<ol class="carousel-indicators" id="next-carousel">
								<li data-target="#slide-parceiros" data-slide-to="0" class="active"></li>
								<li data-target="#slide-parceiros" data-slide-to="1"></li>
								<li data-target="#slide-parceiros" data-slide-to="2"></li>
							</ol>
							<a class="carousel-control left" href="#slide-parceiros" data-slide="prev">
								<span class="icon-prev"></span>
							</a>

							<a class="carousel-control right" href="#slide-parceiros" data-slide="next">
								<span class="icon-next"></span>
							</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<hr class="separator"/>

	</main>

<!-- RODAPÉ DO SITE
================================================== -->
	<!-- Footer -->
    <footer class="rodape text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-2">
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
                        <h3>Empresa</h3>
                        <p><a href="index.html" class="a-btn a-block">Sobre Nós</a></p>
                        <p><a href="register.html" class="a-btn a-block">Nossa Equipe</a></p>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Regras</h3>
                        <p><a href="server-rules.html" class="a-btn a-block">Regras</a></p>
                        <p><a href="index.html" class="a-btn a-block">Privacidade</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Copyright &copy; Lucas Web Developer 
                        <p></p>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline zoom"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline zoom"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline zoom"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline zoom"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline zoom"><i class="fa fa-fw fa-dribbble"></i></a>
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
	<script type="text/javascript" src="js/parallax.js"></script>
</body>
</html>