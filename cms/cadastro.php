<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/contatos_cms.css">
        <meta http-equiv="content-type" content="text/html; charset=uft-8" />
        
        
    </head>
    <body>
        
              <!--Missão-->
                        <form name="MVV" method="post" action="router.php?controller=mvv&modo=novo">
                            <div id="caixa_titulo">
                              Missão
                            </div>
                            <div class="cont">
                                <!--Area das caixas do upload-->
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <table>
                                            <tr id="ajuste">

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_missao" type="text" value="" required></textarea></td>


                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                   <!--Visão-->
                                <div id="caixa_titulo">
                                  Visão
                                </div>
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <table>
                                            <tr id="ajuste">

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_visao" type="text" value="" required></textarea></td>


                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                    <!--Valores-->
                                <div id="caixa_titulo">
                                  Valores
                                </div>
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <table>
                                            <tr id="ajuste">

                                                <td><textarea id="caixa_texto" wrap="off" name="txt_valores" type="text" value="" required></textarea></td>

                                                <td><input  id="botao"value="Salvar" type="submit" name="btnSalvar"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
        
    </body>
</html>