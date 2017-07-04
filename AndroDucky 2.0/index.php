<?php 
	ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>AndroDucky</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
<header class="topo">
	<h2>AndroDucky 2.0</h2>
	<br>
	<a href="https://github.com/proxyanon"><img src="img/github.png" width="80"></a>
	<hr color="white" size="1">
</header>
<center>
<section class="disclaimer">
	<h4>Atenção o AndroDucky é uma ferramenta open-source disponível no GitHub, qualquer valor requisitado pela compra do script<br>não é de responsabilidade do desenvolvedor, o uso e danos causados pela ferramenta é de sua total conta e risco.
	</h4>
</section>
</center>
<section class="howto">
	<h2>Como utilizar</h2>
	<center>
		<ul>
			<li>
				1º Crie o seu payload em formato ducky<br><br>
				<center><img src="img/duck-md.png" width="150"></center>
			</li>
			<li>
				2º Ultilize o RubberToAndro<br><br>
				<img class="pato" src="img/duck-md.png" width="150"><img src="img/arrow.png" width="50" class="arrow"><img src="img/andro.png" width="130" class="andro">
			</li>
			<li>
				3º Passe o payload gerado para o seu android<br><br>
				<img src="img/terminal.png" width="133">
			</li>
		</ul>
	</center>
</section>
<section class="rbtoad">
	<h2>RubberToAndro</h2>
	<center>
	<form method="post" class="script_form">
		<input type="text" name="filename" placeholder="Nome do payload a ser gerado" required><br>
		<input type="file" name="file" required><br>
		<input type="submit" name="env" value="Coverter">
<?php 
	if(isset($_POST["file"])):
		include('rubber_to_andro.php');
	endif;
?>
	</form>
	</center>
</section>
<footer>NoCopyrights &copy; 2017 - Daniel Victor Freire</footer>
</body>
</html>