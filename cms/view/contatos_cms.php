<html>
    
    <head>
        <title>Bem Vindo Usuario</title>
        <link rel="stylesheet" type="text/css" href="../css/contatos_cms.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head>
    <body>
        <form name="MVV" method="post" action="router.php?controller=mvv&modo=novo">
            <!--Essa div é a responsavel para que possa definir o tamanho do layout em si!-->
            <div id="principal">
                <!--A div faixa_menu é responsavel para que possa segurar as outras -->
                <div id="faixa_acima">
                    <!--Aqui ficará a logo-->
                    <div id="caixa_logo">
                        <!--Logo-->
                        <div id="logo">
                            <img src="../imagens/logo2.0.png">
                        </div>
                        <!--Texto Viação Asteroide-->
                        <div id="caixa_text">
                            Viação Asteroide
                        </div>
                    </div>
                    <!--Caixa onde ficará a foto do usuario logado-->
                    <div id="caixa_user">
                        <img src="../imagens/user.png">

                    </div>
                </div>

                <!--Faixa Menu-->
                <div id="faixa_meio">
                    <div id="faixa_menu">
                        <!--Opções menu-->
                        <div class="caixa_menu">
                            Marketing
                        </div>

                         <div class="caixa_menu">
                            Vendas
                        </div>

                         <div class="caixa_menu">
                            Adiministração
                        </div>

                         <div class="caixa_menu">
                            Perfil Adiminstrativo
                        </div>

                          <div class="caixa_menu">
                            Manutenção
                        </div>
                    </div>
                    <!--Aqui terá as caixas para o cadastro dos contatos-->
                    <div id="caixa_cont">

                        <div id="marketing">
                            Marketing
                        </div>

                        <!--Menu do marketing-->
                        <div id="menuMarketing">
                            <div class="menu">
                                Home
                            </div>
                            <div class="menu">
                                Empresa
                            </div>
                            <div class="menu">
                                Pontos
                            </div>
                            <div class="menu">
                                Dicas
                            </div>
                            <div class="menu">
                                Frota
                            </div>
                            <div class="menu">
                                Contatos
                            </div>
                            <div class="menu">
                                Cor
                            </div>
                        </div>
                        <!--O tamanho da div onde haverá  os campos de contatos-->
                        <div id="area_contato">
                            <!--Menu onde irá estar as telas para fazer upload-->
                            <div id="menu_contato">
                                <div class="espaço_menu">
                                    Missão
                                </div>
                                <div class="espaço_menu">
                                    Fale Conosco
                                </div>
                                 <div class="espaço_menu">
                                    Registros
                                </div>

                            </div>

                          <div id="contatos">
                                <?php

                                require_once('cadastro/cadastro_view.php');

                              ?>

                            </div>
                        </div>
                         <div id="rodape">

                        </div>
                    </div>   
                </div>
            </div>
        </form>
    </body>
</html>