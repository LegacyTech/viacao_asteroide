<!DOCTYPE html>
<html>
    <head>
        
        <title>Aviação Asteroide</title>
        <link rel="stylesheet" type="text/css" href="css/cms.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <!--Essa div é que ira definir o tamanho da tela do CMS-->
        <div class="principal">
            <!--Ela será responsavel pra segurar os conteudos-->
            <div class="caixa_center">
                <!--Faixa de Seja Bem vindo-->
                <div class="faixa">
                    <div class="boas_vindas">
                         Seja Bem Vindo
                    </div>
                </div>
                <!--Essa Div será responsavel para que possa segurar o conteudo !-->
                <div id="caixa_conteudo">
                    
                    <!-- Caixas do conteudo-->
                    <div class="conteudo">
                        
                        <!-- Div aonde estará a logo da empresa-->
                       <div id="img_logo">
                           
                        <img src="imagens/Logo.png" alt="Viação Asteroide">  
                        </div>
                    </div>
                    
                     <div class="conteudo">
                        
                        <!--Div onde ficará as caixas para se logar-->
                        <div id="caixa_login">
                            
                            <!--Form será utilizada para fazer funcionar a area do login-->
                            <form name="frmlogin" method="post" action="">
                               <div id="login">
                                   <table>
                                       <!--Aqui é onde as caixa de login e de password se encontra, junto com o botão-->
                                         <tr>
                                            <td>Login : </td>
                                            <td>
                                               <input  placeholder=""  name="txtnome" pattern="[a-z A-Z ã Ã õ Õ é É ô Ô ç Ç]*" title="Digitação apenas de Letras" type="text" value="" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password :</td>
                                            <td>
                                                <input type="password" name="txtsenha"  required/>
                                            
                                            </td>
                                    
                                        </tr>
                                       <!--Essa div é responsavel para posicionar o botão corretamente-->
                                        <div id="botao">
                                            <a href="/view/bem_vindo.php">
                                                <input  id="botao"value="Entar" type="submit" name="btnSalvar">
                                            </a>
                                         </div>
                                   </table>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>