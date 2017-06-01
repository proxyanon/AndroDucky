<!DOCTYPE html>
<html>
<head>
<title>Rubber Ducky Converter to AndroDucky</title>
<style type="text/css">
	body{box-sizing: border-box;font-family: monospace;background-image: url('http://wallpapercave.com/wp/jGWa9U8.jpg');background-size: 100%;background-attachment: fixed;}
	form {color: white;width: 500px;position: relative;left: 50%;margin-left: -250px;margin-top: 10%;padding: 10px;background-color: rgba(0,0,0,.6);text-align: center;padding-bottom: 20px;}
	textarea {position: relative;left: 50%;margin-left: -45%;}
	form h1 {font-size: 3em;}
	form input {border-radius: 4px;width: 90%;}
	form input[type='text'] {border: 1px solid transparent;}
	form input[type='file']{display: none;width: 0%;}
	form input[type='submit']{width: 92%;padding: 10px;border: 1px solid yellow;background-color:yellow;color: black;font-weight: bold;cursor: pointer;}
	label {padding: 10px;background-color: #007FFF;cursor: pointer;font-family: arial;font-size: 13px;}
	span {display:block;text-align: left;color: white;font-size: 14px;width:700px;position: relative;left: 50%;margin-left: -250px;}
</style>
</head>
<body>
<form method="post">
	<h1><b><font color="blue">Rubber</font><font color="yellow">Ducky</font></b> Converter</h1>
	<input type="text" name="filename" maxlength="144" placeholder="FileName Output" style="padding:5px;"><br><br>
	<label for="selecao-arquivo">Carregar arquivo</label><br>
	<input id="selecao-arquivo" type="file" name="file"><br>
	<input type="submit" name="env" value="Enviar">
</form>
<?php 
	ini_set('default_charset', 'UTF-8');
	if(isset($_POST["file"])):
		$get = $_POST["file"];
		$file = file_get_contents($get);
		$array = array("GUI r", "STRING ", "ENTER", "DELAY", "\r\n", " ", "&");
		$arraySub = array("W", "", "E", "D", "", "S", "I");
		$format = str_replace($array, $arraySub, $file);
		$archive = $_POST["filename"] . ".txt";
		$content = $format;
		if (!$abrir = fopen($archive, "a")) {
			echo "Erro ...";
		}
		if (fwrite($abrir, $content)) {
			echo "<script>alert('String criada com sucesso : " . $archive . "  " . filesize($archive) . "bytes')</script>";
			echo "<br><br><textarea style='padding: 10px;padding-bottom:50px;width: 90%;background-color: #000;color: lime;text-shadow: 1px 1px 3px lime;'>".file_get_contents($archive)."</textarea><br>
			<center><h2 style='font-size:2em;color:lime;text-shadow:1px 1px 5px lime;padding:2px;background-color:black;width:92%;margin-left:20px;'>Você pode copiar esse código acima e gerar manualmente o payload</h2></center>";
		}
	endif;
?>
</body>
</html>