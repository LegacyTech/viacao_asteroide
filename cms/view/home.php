<!--Essa div é a responsavel para que possa definir o tamanho do layout em si!-->
        <div id="principal">
            <!--A div faixa_menu é responsavel para que possa segurar as outras -->
            <div id="faixa_acima">
                <!--Aqui ficará a logo-->
                <div id="caixa_logo">
                    <!--Logo-->
                    <div id="logo">
                        <img src="imagens/logo2.0.png">
                    </div>
                    <!--Texto Viação Asteroide-->
                    <div id="caixa_text">
                        Viação Asteroide
                    </div>
                </div>
                <!--Caixa onde ficará a foto do usuario logado-->
                <div id="caixa_user">
                    <img src="imagens/user.png">
        
                </div>
            </div>
        
            <!--Faixa Menu-->
            <div id="faixa_meio">
                <div id="faixa_menu">
                    <!--Opções menu-->
                    <a href="index.php?pagina=cadastro/cadastro_view.php">
                        <div class="caixa_menu">
                            Marketing
                        </div>
                    </a>

                    <div class="caixa_menu">
                        Vendas
                    </div>
                    
                    <a href="index.php?pagina=turismo/turismo_view.php">
                        <div class="caixa_menu">
                            Adiministração
                        </div>
                    </a>

                    <div class="caixa_menu">
                        Perfil Adiminstrativo
                    </div>

                      <div class="caixa_menu">
                        Manutenção
                    </div>
                </div>
                <div id="conteudo">
                    <?php require_once($_SESSION['pagina']); ?>
                </div>
            </div>
            <div id="rodape">
            
            </div>
        </div>