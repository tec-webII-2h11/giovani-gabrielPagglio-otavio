<?php
    include "conecta_mysql.php";
    
    $senha = $_POST['senha'];
    $nomeu = $_POST['nomeu'];
    
    //executando a operacao de SQL
    $resultado = mysqli_query($conexao, "DELETE FROM Usuarios WHERE nomeu='$nomeu' AND senha='$senha'")
            or die ("Nao foi possivel executar a SQL: ".mysqli_error($conexao));
    if($resultado == TRUE){
        echo "<br/>Usuario deletado com sucesso!"
            ."<form action='http://localhost/site/admin.html'>
                <input type='submit' value='Voltar para a pagina' />
              </form>";
    }else{
        echo "<br/>Erro na insercao!";
    }
    
    //fechamento da conexao
    mysqli_close($conexao);
?>
