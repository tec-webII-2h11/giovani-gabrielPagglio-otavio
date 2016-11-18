<?php
    include 'conecta_mysql.php';
    
    $resultado = mysqli_query($conexao, "SELECT * from Usuarios")
            or die ("Nao foi possivel retornar a SQL: ".mysqli_error($conexao));
    if ($resultado){
        while ($row = mysqli_fetch_array($resultado)){
            echo "Nome Completo: ".$row["nomec"]." - "."Nome Usuario: ".$row["nomeu"]." - "."Senha: ".$row["senha"]." - "."Email:".$row['email']."<br/>";
        }
    }
    mysqli_close($conexao);
?>
