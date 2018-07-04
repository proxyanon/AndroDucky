<?php 
		$file = $_POST["file"];
		$texto = file_get_contents($file);
		$archive = filter_input(INPUT_POST, 'filename', FILTER_SANITIZE_SPECIAL_CHARS) . '.sh';
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
			if(!$abrir = fopen($archive, "w")){
				echo "Error";
			}
			$yes = fwrite($abrir, $content);
		}

			if ($yes){
?>
			<script type="text/javascript">
						$(".script_form").css({"float": "left", "margin-left": "350px"});
			 </script>
				<aside class="stats_payload" style="display: none;">
					<h3>Payload</h3>
					<ul>
						<li>Nome : <font><?php echo $archive;?></font></li>
						<li>Tamanho : <font><?php echo filesize($archive) . ' bytes';?></font></li>
						<li>Caminho : <font><?php echo $_SERVER["DOCUMENT_ROOT"].$_SERVER["REQUEST_URI"].'<b>'.$archive.'</b>';?></font></li>
						<li>Compatabilidade : <font>Android</font></li>
						<li>Kernel Compatível :<font> Stellar Kernel</font></li>
					</ul>
				</aside>
			<script type="text/javascript">
				$(".stats_payload").toggle("slow");
			</script>
<?php
			}
?>
