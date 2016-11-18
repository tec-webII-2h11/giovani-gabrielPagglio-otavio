<?php
    
    session_start();
	$usuario = strip_tags($_POST['nomeu']);
	$senha = strip_tags($_POST['senha']);
	echo $senha."<br>";
    $senha = sha1(strip_tags($_POST['senha']));
	echo $senha."<br>";
    // conctando ao BD
    include "conecta_mysql.php";

	$query="SELECT * from Usuarios WHERE  nomeu=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $nomeu, $senha);
		mysqli_stmt_fetch($stmt);
	  
		if ($usuario == $nomeu && $senha == $senha) {
			$_SESSION['nomeu'] = $usuario;
			$_SESSION['senha'] = $senha;
			header('location:home.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
	mysqli_close($conexao);
?>