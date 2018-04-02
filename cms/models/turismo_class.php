<?php

/*

Autor: Gabriel de Melo Marcondes
Data de modificação: 28/02/2018
Controller: Contatos
Obs: Essa classe é uma réplica dos campos do BD
com os metodos de ações do CRUD

*/

class Turismo{
    
    // Atributos da classe.
    public $idPontoTuristico;
    public $epoca;
    public $idEpoca;
    public $imagem;
    public $descricao;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public static function Insert($turismo){
        
        $sql = "INSERT INTO pg_pontoturistico(idEpoca, imagem, descricao, ativo)
        VALUES(".$turismo->idEpoca.", '".$turismo->imagem."', '".$turismo->descricao."', 0);";
        
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
            echo($sql);
        }
        
    }
    
    // Atualiza o registro no BD.
    public function Update($turismo){
        
        $sql = "UPDATE pg_pontoturistico SET idEpoca = ".$turismo->idEpoca.", imagem = '".$turismo->imagem."', descricao = '".$turismo->descricao."' WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
            echo($sql);
        }
        
    }
    
    // Deleta o registro no BD.
    public function Delete($turismo){
        $sql = "DELETE FROM pg_pontoturistico WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
            echo("Erro ao deletar no banco de dados.");
        }
    }
    
    // Lista todos os registros do BD.
    public function Select(){
        
        $sql = "SELECT t.idPontoTuristico, e.epoca, t.idEpoca, t.imagem, t.descricao, t.ativo FROM pg_pontoturistico AS t INNER JOIN tbl_epoca AS e ON t.idEpoca = e.idEpoca ORDER BY t.idPontoTuristico DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listTurismo[] = new Turismo();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listTurismo[$cont]->idPontoTuristico = $rs['idPontoTuristico'];
            $listTurismo[$cont]->epoca = $rs['epoca'];
            $listTurismo[$cont]->idEpoca = $rs['idEpoca'];
            $listTurismo[$cont]->imagem = $rs['imagem'];
            $listTurismo[$cont]->descricao = $rs['descricao'];
            $listTurismo[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTurismo)){
            return $listTurismo;
        }
        
    }
    
    // Busca um registro específico no BD.
    public function SelectById($turismo){
        
        $sql = "SELECT * FROM pg_pontoturistico WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listTurismo = new Turismo();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listTurismo->idPontoTuristico = $rs['idPontoTuristico'];
            $listTurismo->idEpoca = $rs['idEpoca'];
            $listTurismo->imagem = $rs['imagem'];
            $listTurismo->descricao = $rs['descricao'];
            $listTurismo->ativo = $rs['ativo'];
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTurismo)){
            return $listTurismo;
        }
        
        $conex->Desconectar();
        
    }
    
}

?>