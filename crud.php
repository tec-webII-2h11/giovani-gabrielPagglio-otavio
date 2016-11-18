<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao){
        case "C": 
            $formulario = "<h3>Inserir Usuario (CRIAR)</h3>
                <form action='create.php' method='POST'>
                    Nome Completo: <input type='text' name='nomec'/><br/>
                    Nome Usuario: <input type='text' name='nomeu'/><br/>
                    Senha: <input type='text' name='senha'/><br/>
                    Email: <input type='text' name='email'/><br/>
                    <input type='submit' value='INSERIR USUARIO'/>
                </form>";
        break;   
    
        case "R":
            $formulario = "<h3>Buscar Usuario (LER)</h3>
                <p>*Aperte buscar para procurar todos os usuarios da tabela!</p>
                <form action='read.php' method='POST'>
                    <input type='submit' value='BUSCAR USUARIOS'/><br/>
                </form>";
        break; 
    
        case "U":
            $formulario = "<h3>Trocar informacoes do usuario (ATUALIZAR)</h3>
                           <p>*OBS: o usuario precisa existir na base de dados</p>
                <form action='update.php' method='POST'>
                    Nome Completo: <input type='text' name='nomec'/><br/>
                    Nome Usuario: <input type='text' name='nomeu'/><br/>
                    Senha: <input type='text' name='senha'/><br/>
                    Email: <input type='text' name='email'/><br/>
                    <input type='submit' value='ATUALIZAR USUARIO'/>
                </form>";
        break; 
    
        case "D":
            $formulario = "<h3>Deletar usuario (APAGAR)</h3>
                <form action='delete.php' method='POST'>
                    Nome Usuario: <input type='text' name='nomeu'/><br/>
                    Senha: <input type='text' name='senha'/><br/>
                    <input type='submit' value='REMOVER USUARIO'/>
                </form>";
        break;
    }
        echo $formulario;
?>