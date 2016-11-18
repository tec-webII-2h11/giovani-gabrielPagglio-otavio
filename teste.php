<?php
    include "conecta_mysql.php";
    if(isset($_POST['submit'])) { SignIn(); {
        function SignIn() { 
            session_start(); //inicia a sessao do usuario
            if(!empty($_POST['nomeu'])){ //checando se o usuario digitou algo 
             $query = mysqli_query("SELECT * FROM Usuarios WHERE nomeu = '$_POST[nomeu]' AND senha = '$_POST[senha]'") or die(mysqli_error($conexao));
             $row = mysqli_fetch_array($query);
                if(!empty($row['nomeu']) AND !empty($row['senha'])) { 
                    $_SESSION['nomeu'] = $row['senha']; 
                    echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
                } else { 
                    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
                 
                } 
            }
        }
        mysqli_close($conexao);
    }
?>