
<!DOCTYPE html>
<html>
<head>
	<title>exerciocio</title>
</head>
<body>

			<div style=" float: left; position: relative;">

				<a href="produtos.php?categoria=1" > eletronicos</a>
				<a href="produtos.php?categoria=2" >  esportes</a>
				<a href="produtos.php?categoria=3" >  moveis</a>
				<a href="produtos.php?categoria=4" >  roupas</a>								

				<form action="produtos.php" method="POST">	

				<br><br>

					BUSCAR:
					<input type="text" name="pesquisa">
					<input type="submit">

				</form>
			</div>


			<?php 

				session_start();

				if (isset($_SESSION['nome']) AND ($_SESSION['tipo'] == 'a')) {

			
			?>

					<div style=" float: right;">
					<p>Oi ADMIN</p>
					<a href="logout.php">Sair</a>
					</div>
	
			<?php
				}else {
			?>

					<div style=" float: right;">
						<form action="login.php" method="POST">

							<input type="text" name="usuario" placeholder="Nome do usuario">
							<br><br>
							<input type="password" name="senha" placeholder="Sua senha">
							<input type="submit" name="loga" value="VAI!">
							
						</form>
					</div>


			<?php
				}
			?>

			

	

</body>
</html>