<?php
      

$botao = "Salvar";
$idVersao = null;
$missao = null;
$visao = null;
$valores = null;
$ativo = null;
$action = 'missao&modo=novo';


if(isset($listMissaoBuscar)){
    $idVersao = $listMissaoBuscar->idVersao;
    $missao = $listMissaoBuscar->missao;
    $visao = $listMissaoBuscar->visao;
    $valores = $listMissaoBuscar->valores;
    $action = 'missao&modo=editar&id='.$idVersao;
    $botao = "Editar";
}

?> 
<!--Essa div tera os objetos para fazer upload-->
                       
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
                            <a href="index.php?pagina=cadastro/registro_view.php">
                             <div class="espaço_menu">
                                Registros
                            </div>
                            </a>

                        </div>

                        <div id="contatos">
                           <form name="pg_missao" method="post" action="router.php?controller=<?=$action?>">
                               <div id="caixa_titulo">
                                   Missão
                               </div>
                               <div class="cont">
                                <!--Area das caixas do upload-->
                                   <div class="caixa_MVV1">
                                       <div class="caixa_MVV">
                                           <table>
                                               <tr id="ajuste">
                                                   <td><textarea id="caixa_texto" wrap="off" name="txt_missao" type="text" value="" required><?=$missao;?></textarea></td>
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
                                                   <td><textarea id="caixa_texto" wrap="on" name="txt_visao" type="text" value="" required><?=$visao;?></textarea></td>
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
                                                   <td><textarea id="caixa_texto" wrap="off" name="txt_valores" type="text" value="" required><?=$valores;?></textarea></td>
                                                   <td> <input type="submit" name="btnSalvar" value="<?=$botao;?>"  id="botao"></td>
                                               </tr>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>  