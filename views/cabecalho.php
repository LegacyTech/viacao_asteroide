<?php



$require = "home/home_view.php";
if( isset($_GET['href']) ){
    $require = $_GET['href'];
}

?>

<!DOCTYPE  html>
<html lang="pt-br">
    <head>
        <title> Menu e Rodapé</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <script type="text/javascript">
            document.documentElement.className += ' js';
        </script>
        <header id="area_menu">
            <div id="logo">
                <img src="../icones/logo.png">
            </div>
            <div id="menu">
                <ul id="menu_principal">
                    <li> <a href="cabecalho.php"> Home </a></li>
                    <li> <a href="cabecalho.php?href=quem_somos/quem_somos_view.php"> Sobre a Empresa </a>
                        <ul class="submenu">
                            <li> <a  href="cabecalho.php?href=missao_visao_valores/missao_visao_valores_view.php"> Missão, Visão e Valores </a> </li>
                            <li> <a  href="cabecalho.php?href=nossas_frotas/nossas_frotas_view.php"> Nossa Frota </a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="cabecalho.php?href=compra_passo1/compra_1_view.php">
                            Compre sua Passagem
                        </a>
						<ul class="submenu">
                            <li> <a  href="cabecalho.php?href=vendas_passagens/vendas_passagens_view.php" >  Venda de Passagens </a> </li>
                            <li> <a  href="cabecalho.php?href=pontos_turisticos/pontos_turisticos_view.php"> Lugares Turísticos </a> </li>
                            <li> <a  href="cabecalho.php?href=dicas/dicas_view.php"> Dicas e Recomendações </a> </li>
                        </ul>
					</li>
                    <li> <a href="cabecalho.php?href=contatos/contatos_view.php"> Contatos </a></li>
                </ul>
            </div>
            <div id="area_usuario">
                <a  href="cabecalho.php?href=login/login_view.php">
				<div id="icon_user_menu">

				</div>
				<div id="words_user_menu">
					Faça seu Login
				</div>
				<div id="words_user_menu2">
					Ou Cadastre-se
				</div>
				<div id="down_user_menu">
				</div>
                </a>
            </div>
			<div id="area_usuario_my">
				<div class="text_menu_area_user">
					Minha Conta
				</div>
				<div class="text_menu_area_user">
					Login/Logout
				</div>
				<div class="text_menu_area_user">
					Cadastrar
				</div>
			</div>
        </header>
        <main id="conteudo">
            <div id="espaco_menu">
            </div>    
            <?php
  
            require("$require");

            ?>

            <div id="mapa_site">
                <div id="container_mapa_site">
                    <div class="caixa_mapa_site">
						<div class="titulo_mapa_site">
							Nossa Empresa
						</div>
						<div class="conteudo_mapa_site">
							<ul>
                                <li> <a href="quem_somos.php"> Sobre a Empresa </a> </li>
                                
								<li> Missão, Visão e Valores </li>
								<li> Nossa Frota </li>
								<li> Postos Rodoviários </li>
							</ul>
						</div>
                    </div>
                    <div class="caixa_mapa_site">
						<div class="titulo_mapa_site">
							Compre sua Passagem
						</div>
						<div class="conteudo_mapa_site">
							<ul>
								<li> Comprar </li>
								<li> Venda de Passagens </li>
								<li> Lugares Turísticos </li>
								<li> Dicas </li>
							</ul>
						</div>
                    </div>
                    <div class="caixa_mapa_site">
						<div class="titulo_mapa_site">
							Contatos
						</div>
						<div class="conteudo_mapa_site">
							<ul>
								<li> Página Contatos </li>
								<li> Telefone: (11)4141-4141 </li>
								<li> E-Mail: viacao@asteroid.com </li>
							</ul>
						</div>
                    </div>
					<div id="mapa_redes_sociais">
						<div class="quadrado_redes_sociais">
						</div>
						<div class="quadrado_redes_sociais">
						</div>
						<div class="quadrado_redes_sociais">
						</div>
					</div>
                </div>
            </div>
        </main>
        <footer id="rodape">
			<div id="text_rodape">
				2018 - Todos os Direitos Reservados
			</div>
        </footer>
	   <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	   <script type="text/javascript" src="../js/app.js"></script>
    </body>
</html>
