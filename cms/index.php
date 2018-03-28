<?php

require_once("models/bd_class.php");

if( isset($_POST['btnOk']) ){
    
    $user = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];
    
    // Instancia a classe do BD.
    $conexao = new Mysql_db();
        
    // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
    $POD_conex = $conexao->Conectar();
    
    $sql = "SELECT idFuncionario, idNivelFuncionario, nome FROM tbl_funcionario WHERE usuario = '$user' AND senha = MD5('$senha') AND ativo = 1 ";
    
    $select = $POD_conex->query($sql);
    
    if( $rs = $select->fetch(PDO::FETCH_ASSOC) ){
        session_start();
        
        $_SESSION['idUser'] = $rs['idFuncionario'];
        $_SESSION['idNivel'] = $rs['idNivelFuncionario'];
        $_SESSION['nome'] = $rs['nome'];
        
        header("location:view/bem_vindo.php");
        
    }else{
        
        header("location:index.php?error=1");
        
    }
    
}

if( isset($_GET['error']) ){
    echo "<script> alert('Usuário ou senha incorretos !!!'); </script>";
}

?>

<html>
    <head>
        <style>
            
            *{
                font-family: Arial;
            }
            
            #container_geral{
                width : 20%;
                height : 300px;
                min-width: 286px;
                border : solid 1px black;
                border-radius: 10px;
                background-color : #999;
                margin : 0 auto;
                margin-top : 50px;
            
            }
            
            #tbl_dados{
                width : 80%;
                height : 200px;
                border: solid 1px black;
                border-radius: 5px;
                background-color: #ccc;
                margin : 0 auto;
                margin-top : 50px;
            }
            
            #tbl_dados td{
                padding: 10px;
            }
            
            input[type="submit"]{
                width : 80px;
                height: 40px;
            }
            
            #logo{
                width : 296px;
                height : 152px;
                margin : 0 auto;
            }
            
        </style>
    </head>
    <body>
        <div id="logo">
            <img src="imagens/Logo%20por%20extenso.png"/>
        </div>
        <div id="container_geral">
            <form method="post" name="frm_login" action="index.php">
            <table id="tbl_dados">
                <tr>
                    <td>
                        Usuário:
                    </td>
                    <td>
                        <input type='text' name="txt_login">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha:
                    </td>
                    <td>
                        <input type='password' name="txt_senha">
                    </td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" name="btnOk"></th>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>