<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>cadastro do usuario</title>
	</head>
	<body>
	
	<?php
            
            $nomeu = strip_tags($_POST['nomeu']);
            $nomec = strip_tags($_POST['nomec']); 
            $senha = sha1(strip_tags($_POST['senha']));  
            $senha2 = sha1(strip_tags($_POST['senha2']));
            $email = strip_tags($_POST['email']);            
            
            if( $senha==$senha2 ){
                    include "create.php"; 
            }else{
                echo "Senhas não conferem! Tente novamente!";   
            }

            header("Location: index.php");

	?>
	</body>
</html>