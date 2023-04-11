<?php require_once 'fuctions.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' type='text/css' media='screen' href='../css/admin.css'> 
</head>
<body>

	<?php include 'layout/menu.php' ?>
		<div id="box">
			<div id="login">

				<form action="" method="POST">
				
					
						<h1 id="titulo">Painel de Login</h1>
						<div id="centro">
							<div id="email">
								<label for="email">E_mail</label>
								<input type="email" name="email" placeholder="Digite seu email" required>
							</div>
							<div id="senha">
								<label for= "senha">Senha</label>
								<input type="password" name="senha" placeholder="Digite sua senha" required>
							</div>
							<input type="submit" name="acessar" value="acessar">

							<?php if (isset($_POST['acessar'])) {
										login($connect);
									}?>
						</div>

				</form>
			</div>
		</div>

	

	<?php include 'layout/footer.php' ?> 	
</body>
</html>