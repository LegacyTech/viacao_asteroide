<?php

    $controller = $_GET['controller'];
    $modo = $_GET['modo'];


//verifica qual tipo da controller iremos trabalhar.
    switch($controller){
            
        case 'mvv':
            
            // Inclusão dos arquivos para utilizar no projeto.
            require_once('controller/cadastro_controller.php');
            require_once('models/cadastro_class.php');
            
            //verifica as ações a serem executadas pela controller(novo, editar e excluir).
            switch($modo)
            {
            
                case 'novo':
                    // Instanciando a classe da controller.
                    $controller_mvv = new controllerCadastro();
                    // Chama o metodo "Novo()" da controller.
                    $controller_mvv::Novo();
                    break;
                    
                case 'listar':
                    $controller_contato = new controllerContatos();
                    $controller_contato::Listar();
                    break;
            }
    }

?>