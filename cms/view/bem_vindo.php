<?php

 error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    session_start('usuario');

?>

<html>
    
    <head>
        <title>Bem Vindo Usuario</title>
        <link rel="stylesheet" type="text/css" href="../css/bem_vindo.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
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
                    <a href="contatos_cms.php">
                    <div class="caixa_menu">
                        Marketing
                    </div>
                    </a>

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
                <div id="bem_vindo">
                    Seja bem Vindo <?php echo $_SESSION['nome'];?>
                </div>
            </div>
            <div id="rodape">
            
            </div>
        </div>
    </body>
</html>