<?php
    include 'conecta_mysql.php';
    
    $nomeu = $_POST['nomeu'];
    $nomec = $_POST['nomec'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    $resultado = mysqli_query($conexao, "UPDATE Usuarios SET nomec='$nomec', email='$email' WHERE senha='$senha' AND nomeu='$nomeu'")
            or die ("Nao foi possivel executar a SQL: ".mysqli_error($conexao));
    if($resultado == TRUE){
        echo "<br/>Usuario alterado com sucesso!"
        ."<form action='http://localhost/site/admin.html'>
            <input type='submit' value='Voltar para a pagina' />
           </form>";
    }else{
        echo "<br/>Erro na insercao!";
    }
    
    mysqli_close($conexao);
?>