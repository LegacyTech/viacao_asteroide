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
            </div>
            <div id="menu">
                <ul id="menu_principal">
                    <li> Home </li>
                    <li> Sobre a Empresa 
                        <ul class="submenu">
                            <li> Missão, Visão e Valores </li>
                            <li> Nossa Frota </li>
                        </ul>
                    </li>    
                    <li> Compre sua Passagem
						<ul class="submenu">
                            <li> Venda de Passagens </li>
                            <li> Lugares Turísticos </li>
							<li> Dicas e Recomendações</li>
                        </ul>
					</li>
                    <li> Contatos </li>
                </ul>
            </div>
            <div id="area_usuario">
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
            <div id="area_compra_fase1">
                <div id="area_pesquisa_viagem">
                    <h3 id="pesquisa_origem"> Origem: </h3>
                    <input id="input_origem" type="text">
                     <h3 id="pesquisa_destino"> Destino: </h3>
                    <input id="input_destino" type="text">
                     <h3 id="text_data_ida"> Data Ida: </h3>
                    <input id="input_data_ida" type="date">       
                    <h3 id="text_data_volta"> Data Volta: </h3>
                    <input id="input_data_volta" type="date">    
                </div> 
                <div id="tabela_ida">
                    <div class="titulo_tabela_viagem">
                        Ida:
                    </div>
                    <div class="informacoes_viagem">
                        <div class="horario_partida">
                            Horário Partida
                        </div>
                        <div class="horario_partida">
                            Horário Chegada
                        </div>   
                        <div class="tipo_onibus">
                            Tipo de Ônibus
                        </div>
                        <div class="preco_viagem">
                            Preço
                        </div>  
                        <div class="escolha_viagem">
                            Escolha
                        </div>                          
                    </div>
                    <div class="conteudo_tabela_viagem">
                        <div class="horario_partida_dados">
                            06:35
                        </div>
                        <div class="horario_chegada_dados">
                            16:00
                        </div>
                        <div class="tipo_onibus_dados">
                            Executivo (Premuium)
                        </div>  
                        <div class="preco_dados">
                            R$ 150,00
                        </div>  
                        <div class="escolha_viagem_dados">
                            <div class="opacao_escolha_viagem"> 
                            </div>
                        </div>
                    </div>
                    <div class="conteudo_tabela_viagem">
                        <div class="horario_partida_dados">
                            06:35
                        </div>
                        <div class="horario_chegada_dados">
                            16:00
                        </div>
                        <div class="tipo_onibus_dados">
                            Executivo (Premuium)
                        </div>  
                        <div class="preco_dados">
                            R$ 150,00
                        </div>
                         <div class="escolha_viagem_dados">
                            <div class="opacao_escolha_viagem"> 
                            </div>
                        </div>                       
                    </div>                    
                </div>
                <div id="tabela_volta">
                     <div class="titulo_tabela_viagem">
                        Volta:
                    </div> 
                    <div class="informacoes_viagem">
                        <div class="horario_partida">
                            Horário Partida
                        </div>
                        <div class="horario_partida">
                            Horário Chegada
                        </div>   
                        <div class="tipo_onibus">
                            Tipo de Ônibus
                        </div>
                        <div class="preco_viagem">
                            Preço
                        </div>  
                        <div class="escolha_viagem">
                            Escolha
                        </div> 
                    </div> 
                    <div class="conteudo_tabela_viagem">
                        <div class="horario_partida_dados">
                            06:35
                        </div>
                        <div class="horario_chegada_dados">
                            16:00
                        </div>
                        <div class="tipo_onibus_dados">
                            Executivo (Premuium)
                        </div>  
                        <div class="preco_dados">
                            R$ 150,00
                        </div>  
                         <div class="escolha_viagem_dados">
                            <div class="opacao_escolha_viagem"> 
                            </div>
                        </div>                           
                    </div>
                    <div class="conteudo_tabela_viagem">
                        <div class="horario_partida_dados">
                            06:35
                        </div>
                        <div class="horario_chegada_dados">
                            16:00
                        </div>
                        <div class="tipo_onibus_dados">
                            Executivo (Premuium)
                        </div>  
                        <div class="preco_dados">
                            R$ 150,00
                        </div>   
                        <div class="escolha_viagem_dados">
                            <div class="opacao_escolha_viagem"> 
                            </div>
                        </div>                           
                    </div>                    
                </div>
                <div id="next_compra">
                    <img src="../icones/right-chevron.png">
                </div>
            </div>         
            <div id="mapa_site">
                <div id="container_mapa_site">
                    <div class="caixa_mapa_site">
						<div class="titulo_mapa_site">
							Nossa Empresa
						</div>
						<div class="conteudo_mapa_site"> 
							<ul>
								<li> Sobre a Empresa </li>
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