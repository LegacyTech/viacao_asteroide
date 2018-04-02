<?php

    $controller = $_GET['controller'];
    $modo = $_GET['modo'];


//verifica qual tipo da controller iremos trabalhar.
    switch($controller){
            
        case 'missao':
            
            // Inclusão dos arquivos para utilizar no projeto.
            require_once('controller/missao_controller.php');
            require_once('models/missao_class.php');
            
            //verifica as ações a serem executadas pela controller(novo, editar e excluir).
            switch($modo)
            {
            
                case 'novo':
                    // Instanciando a classe da controller.
                    $controller_missao = new controllerMissao();
                    // Chama o metodo "Novo()" da controller.
                    $controller_missao::Novo();
                    break;
                    
                case 'excluir':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Excluir();
                    break;
                    
                case 'buscar':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Buscar();
                    break;
                    
                case 'editar':
                    $controller_missao = new controllerMissao();
                    $controller_missao::Editar();
                    break;
            }
            
            break;
            
        case 'turismo':
            
            session_start();
            
            // require_once necessários.
            require_once('controller/turismo_controller.php');
            require_once('models/turismo_class.php');
            
            switch($modo){
                
            // Inserir um novo registro.
            case 'novo':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Novo();
                
                break;
                
            // Excluir um registro existente.
            case 'excluir':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Deletar();
                
                break;
                
            // Buscar um registro existente.
            case 'buscar':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Buscar();
                
                break;
                
            // Editar um registro existente.
            case 'editar':
                
                $turismo_controller = new turismoController();
                
                $turismo_controller::Atualizar();
                
                break;
                
            }
            
            break;
    }

?>