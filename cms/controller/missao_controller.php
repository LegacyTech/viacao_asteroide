<?php


/*

Autor: Vinicius MAtias Rodrigues
Data de modificação: 27/03/2018
Controller: Cadastro

*/

class controllerMissao{
    
    
    //Insere um novo texto.
    public function Novo(){
        
        //Instancia da classe "cadastro()"
        $missao = new Missao();
        
        //Carregando os dados digitados pelo usuario
        $missao->missao = $_POST['txt_missao'];
        $missao->visao = $_POST['txt_visao'];
        $missao->valores = $_POST['txt_valores'];
        
        
        $missao::Insert($missao);
        
    }
    
    public function Excluir(){
        
        $idVersao = $_GET['id'];
        
        $missao = new Missao();
        
        $missao->idVersao = $idVersao;
        
        $missao::Delete($missao);
        
    }
    
    public function Listar(){
        
        $missao = new Missao();
        
        return $missao::Select();
        
    }
    
    public function Buscar(){
        
        $idVersao = $_GET['id'];
        
        $missao = new Missao();
        
        $missao->idVersao = $idVersao;
        
        $listMissaoBuscar = $missao::SelectById($missao);
        
        $_SESSION['pagina'] = 'cadastro/cadastro_view.php';
        
        require_once('view/partida.php');
        
    }
    
    public function Editar(){
        
        $idVersao = $_GET['id'];
        
        $missao = new Missao();
        
        $missao->idVersao = $idVersao;
        $missao->missao = $_POST['txt_missao'];
        $missao->visao = $_POST['txt_visao'];
        $missao->valores = $_POST['txt_valores'];
        
        $missao::Update($missao);
        
    }
    
}


?>