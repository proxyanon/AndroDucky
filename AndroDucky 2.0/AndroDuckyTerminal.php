<?php 
	if ($argc < 3) {
		echo "\r\n";
		echo "Script por Daniel Victor Freire Feitosa\r\n";
		echo "---------------------------------------\r\n";
		echo "Uso : php AndroDuckyTerminal.php script_para_ser_convertido.txt nome_do_payload\r\n";
		echo "\r\n";
		echo "GitHub : proxyanon.github.io/AndroDucky/AndroDucky 2.0/\r\n";
	}else {
		$file = $argv[1];
		$texto = file_get_contents($file);
		$archive = $argv[2] . '.sh';
		$array = array("GUI r", "STRING ", "ENTER", "DELAY", "\r\n", " ", "&", "DOWNARROW", "UPARROW", "DREPEAT", "UREPEAT", "ALT");
		$arraySub = array("W", "", "E", "D", "", "S", "I", "A", "O", "V", "U", "T");
		$arrayStrings = array("-", "+", ".", ",", "/", "(", ")", ":", "'", ";", ">", "%", "E", "S", "W", "D", "@", "I", "C");
		$arrayStringsSubs = array('minus', 'kp-plus', 'stop','comma', 'right-alt q', 'left-shift 9', 'left-shift 0', 'left-shift slash', 'tilde', 'slash', 'left-shift period', 'left-shift 5', 'enter', 'space', 'left-meta r', 'ping -c 2 localhost > null && ping -c 2 localhost > null && ping -c 2 localhost > null | APAGUE AQUI', 'left-shift 2', 'left-shift 7', 'left-ctrl t');
		$arrayNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
		$arrayNumbersSub = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
		$string = str_replace($array, $arraySub, $texto);
		for ($i=0; $i < strlen($string); $i++) { 
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
				echo "\r\n";
				echo "Payload criado com sucesso !\r\n";
				echo "--------------------------------\r\n";
				echo "Nome : " . $archive . "\r\n";
				echo "Size : " . filesize($archive) . " bytes\r\n";
				echo "Kernel Compativel : Stellar Kernel\r\n";
				echo "Plataforma : Android\r\n";
	}
}
?>
