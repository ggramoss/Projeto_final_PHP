<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' media='screen' href='../css/formulario_contato.css'>
	<title>Suspiros Modas-Contato</title>
</head>

<body>
	<?php include 'layout/menu.php'  ?>

	<div id="contatos_e_form">
		<form name="formulario_contato" action="main.php" method="POST">

			<div class="formulario">
				<fieldset>
					<h2 id="titulo">Entre em contato conosco por aqui:</h2>

					<div id="nome">
						<label for="idnome">Nome completo:</label>
						<input type="text" name="nome" id="idnome" class="box" autofocus>
					</div>

					<div class="email">
						<label for="email">E-mail</label>
						<input type="email" name="email" id="email" class="box" placeholder="exemplo@mail.com">
					</div>

					<div class="telefone">
						<label for="cel">Telefone</label>
						<input type="tel" name="cel" id="cel" class="box" placeholder="Digite seu telefone">

					</div>
					<div class="rede_social">
						<label for="rede">Como você chegou até nós?</label>
						<select name="rede" id="rede" class="box">
							<option value="vazio">Escolha uma Opção</option>
							<option value="instagram">Instagram</option>
							<option value="facebook">Facebook</option>
							<option value="twitter">Twitter</option>
							<option value="whatsapp">Whatsapp</option>
							<option value="outra">Outra forma de contato</option>
						</select>
					</div>

					<div class="assuntos">
						<label for="assunto">Assunto Relacionado</label>
						<select name="assunto" id="assunto" class="box">
							<option value="vazio">Escolha uma Opção</option>
							<option value="duvidas">Dúvidas</option>
							<option value="vendas">Vendas</option>
							<option value="troca">Troca</option>
							<option value="devolução">Devolução</option>
							<option value="outros assuntos">Outros assuntos</option>
						</select>
					</div>
					<div class="cxtexto">

						<span id="texto">Deixe seu comentário: <br> </span>

						<textarea cols="40" rows="5" maxlength="150" id="caixa"></textarea>
					</div>
					<input type="submit" name="btnEnviar" id="botao">
				</fieldset>
			</div>
		</form>

		<section>
			<div id="mapa_contato">
				<div class="contato">
					<h2>Outras maneiras de nos encontrar</h2>
					<ul>
						<li>Rua Pandia Calogeras Nº 1595 - Canoas</li>
						<li>suspirosmodas@gmail.com</li>
						<li>Tel: (51) 99356-3035</li>
						<li> <a href="https://www.instagram.com/suspiros.modas/"><img
									src="../img/instagram-icone-icon-1.png" alt="logo Instagram" id="logo_contato" /></a>
						</li>
					</ul>
				</div>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.102416327002!2d-51.16007140000001!3d-29.947732599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519708d6bc26497%3A0xdd2119cdb9488d6e!2sR.%20Pandi%C3%A1%20Cal%C3%B3geras%2C%201595%20-%20Niter%C3%B3i%2C%20Canoas%20-%20RS%2C%2092120-150!5e0!3m2!1spt-BR!2sbr!4v1655317208326!5m2!1spt-BR!2sbr"
					allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>
	</div>

	<?php include 'layout/footer.php' ?>

</body>

</html>