<?php
      

$botao = "Salvar";
$codigo = null;
$missao = null;
$visao = null;
$valores = null;
$ativo = null; 



if(isset($registro)){
    $codigo = $registro->$codigo;
     $codigo = $registro->$missao;
     $codigo = $registro->$visao;
     $codigo = $registro->$valores;
     $codigo = $registro->$ativo;
    
    
    
}

?> 
<!--Essa div tera os objetos para fazer upload-->
                       
                                      <div id="caixa_titulo">
                              Missão
                            </div>
                            <div class="cont">
                                <!--Area das caixas do upload-->
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <form name="frmMVV" method="post" action="">
                                            <table>
                                                <tr id="ajuste">

                                                    <td><textarea id="caixa_texto" wrap="off" name="txt_missao" type="text" value="" required></textarea></td>

                                                  
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                   <!--Visão-->
                                <div id="caixa_titulo">
                                  Visão
                                </div>
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <form name="frmMVV" method="post" action="">
                                            <table>
                                                <tr id="ajuste">

                                                    <td><textarea id="caixa_texto" wrap="off" name="txt_visao" type="text" value="" required></textarea></td>

                                                   
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                    <!--Valores-->
                                <div id="caixa_titulo">
                                  Valores
                                </div>
                                <div class="caixa_MVV1">
                                    <div class="caixa_MVV">
                                        <form name="frmMVV" method="post" action="">
                                            <table>
                                                <tr id="ajuste">

                                                    <td><textarea id="caixa_texto" wrap="off" name="txt_valores" type="text" value="" required></textarea></td>

                                                    <td><input  id="botao"value="Salvar" type="submit" name="btnSalvar"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            