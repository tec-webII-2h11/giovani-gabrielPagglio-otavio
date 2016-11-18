<?php

    include "conecta_mysql.php";
    
    $nomeu = $_POST['nomeu'];
    $nomec = $_POST['nomec'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $resultado = mysqli_query($conexao, "INSERT INTO Usuarios(nomeu, nomec, senha, email)
            VALUES ('".$nomeu."','".$nomec."','".$senha."','".$email."')")
            or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
    
    if ($resultado == TRUE){
        echo "<br/>Usuario inserido com sucesso!</br><p>aprecie a tartaruga dando um dabzin</p><img src='turtle.jpg'/><br/>"
        . "<form action='http://localhost/site/admin.html'>
            <input type='submit' value='Voltar para a pagina' />
           </form>";
    }
    else{
        echo "<br/>Erro 404, usuario nao inserido, tente novamente";
    }
    
    //fechamento da conex�o
    mysqli_close($conexao);
?>