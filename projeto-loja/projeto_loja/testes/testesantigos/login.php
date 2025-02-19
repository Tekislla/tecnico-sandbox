<?php
	
	session_start();

	if (isset($_POST['usuario']) AND isset($_POST['senha'])) {
		

		$usuario =  $_POST['usuario'];
		$senha   =  $_POST['senha'];

		if ($usuario == 'admin' and $senha == '12345') {

			$_SESSION['nome'] = 'Administrador';
			$_SESSION['tipo'] = 'a';
			header("Location:index.php");
			
		}

		else {

			echo "Dados incorretos";
			
		}

	}

	else {
		echo "Preencha usuario e senha";
	}

