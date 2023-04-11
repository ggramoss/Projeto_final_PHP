<?php session_start();
$seguranca= isset($_SESSION['ativa']) ? TRUE : header ("location:admin.php");
require_once "fuctions.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'> 
	<title>Painel ADMIN</title>
</head>
<body>
<?php if ($seguranca) { ?>
	<?php include 'layout/menu.php' ?>
	<div id= "box">
		
		<h1>Painel adminstrativo do site</h1>

		<h2>Bem Vindo,<?php echo $_SESSION['nome']; ?></h2>

		<?php 
		$tabela = "usuarios";
		$usuarios = buscar($connect,$tabela);
		?>
		<h2>Usuários cadastrados</h2>
		<div id="tabela">
	
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Data Cadastro</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $usuario ): ?>
						<tr>
							<td><?php echo $usuario['ID'];?></td>
							<td><?php echo $usuario['nome'];?></td>
							<td><?php echo $usuario['email'];?></td>
							<td><?php echo $usuario['data_cadastro'];?></td>
						</tr>
								
					<?php endforeach;  ?>					
				</tbody>
			</table>
		</div>	
	
		<a href="logout.php">SAIR</a>
	</div>


<?php } else{
	header("location: admin.php");

} ?>

<?php include 'layout/footer.php' ?> 

</body>
</html>