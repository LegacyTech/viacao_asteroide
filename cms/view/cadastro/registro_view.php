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
                                    
                                     <a href="index.php?pagina=cadastro/cadastro_view.php">
                                        Missão
                                     </a>
                                </div>
                                
                                <div class="espaço_menu">
                                    Fale Conosco
                                </div>
                                 <div class="espaço_menu">
                                    Registros
                                </div>

                            </div>

                          <div id="contatos">
                            <!--Aqui estará a lista de registros do Missão, Vissão e Valores-->
                              <div id="espaco_list">
                                <div id="sust_list">
                                  <div class="mvv">
                                    Missão
                                  </div>
                                  <div class="mvv">
                                    Visão
                                  </div>
                                  <div class="mvv">
                                    Valores
                                  </div>
                                  <div class="mvv">
                                      Opções
                                  </div>
                                </div>
                                  
                                   
                                <!--Aqui são as div onde apareceram os registros-->
                                  
                                  
                                <div id="cont_list">
                                  <div id="sust_list1">
                                    <?php

                                        require_once('controller/missao_controller.php');
                                        require_once('models/missao_class.php');

                                        // Instancia o Controller.
                                        $controller_missao = new controllerMissao();

                                        // Chama o metodo para listar todos os registros.
                                        $list = $controller_missao::Listar();

                                        $cont = 0;
                                        while($cont < count($list)){
                                    
                                    ?>
                                    <div class="mvv1" wrap="off">
                                       <?php echo($list[$cont]->missao);?>
                                    </div>
                                    <div class="mvv1" wrap="off">
                                       <?php echo($list[$cont]->visao);?>
                                    </div>
                                    <div class="mvv1" wrap="off">
                                       <?php echo($list[$cont]->valores);?>
                                    </div>
                                    <div class="mvv1">
                                        <a>
                                            <img src="imagens/on.png">
                                        </a>
                                        
                                        <a href="router.php?controller=missao&modo=buscar&id=<?php echo($list[$cont]->idVersao);?>">
                                            <img src="icones/modify16.png">
                                        </a>
                                            
                                        <a href="router.php?controller=missao&modo=excluir&id=<?php echo($list[$cont]->idVersao);?>">
                                            <img src="imagens/delete.png">
                                        </a>
                                    </div>
                                      <?php
                                  $cont += 1;
                                  }
                                  ?>
                                    </div>
                                </div>
                                  
                                  
                              </div>
                            </div>
                        </div>
                    </div>