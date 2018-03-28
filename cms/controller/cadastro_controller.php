<?php


/*

Autor: Vinicius MAtias Rodrigues
Data de modificação: 27/03/2018
Controller: Cadastro

*/


class controllerCadastro{
    
    
    //Insere um novo texto.
    public function Novo(){
        
        //Instancia da classe "cadastro()"
        $cadastro = new Cadastro();
        
        //Carregando os dados digitados pelo usuario
        $cadastro->missao = $_POST['txt_missao'];
        $cadastro->visao = $_POST['txt_visao'];
        $cadastro->valores = $_POST['txt_valores'];
        
        
        $cadastro::Insert($cadastro);
        
    }
    
    public function Listar(){
        
        
        $cadastro = new Cadastro();
        
        return $cadastro::Select();
        
    }
    
}


?>