<?php


/*

Autor: Vinicius MAtias Rodrigues
Data de modificação: 27/03/2018
Controller: Cadastro

*/



class Cadastro{
    
    // Atributos da classe.
    public $missao;
    public $visao;
    public $valores;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public function Insert($cadastro_text){
        
        $sql= "INSERT INTO pg_missao(missao, visao, valores, ativo) VALUES('".$cadastro_text->missao."','".$cadastro_text->visao."','".$cadastro_text->valores."',0);";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir no banco de dados.");
        }
        
    }
    
}


?>