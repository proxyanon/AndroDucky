# AndroDucky
Ferramenta para criação de payload HID para android sem nethunter e sem rubber ducky
# Pré Requisitos
<ul>
<li>Android</li>
<li>Servidor PHP</li>
<li>Kernel Stellar Para Android (Atenção isto varia de acordo com o modelo do aparelho)</li>
<li>HID keyboard (<a target='_blank' href='https://github.com/pelya/android-keyboard-gadget/tree/master/hid-gadget-test'>Download</a>)</li>
</ul>
<h1>Como utilizar</h1>
<p>É bem simples, na verdade o próprio script já traz algumas opções de payloads, para criar o payload
basta, abrir o seu servidor no lugar onde colocou o seu <b>AndroDucky</b> e depois passar o payload
via metódo GET, ou somente descer um pouco a página e adequar os scripts de acordo com sua vontade
e clicar em <b>Generate Payload</b></p>
<h1>Exemplos</h1>
<p>localhost/androducky.php?<b>string</b>=WD<font color="red">cmd</font>ED<font color="red">start</font>S<font color="red">chrome.exe</font>E&<b>archive</b>=payload<br>
O primeiro paramêtro <b>string</b> significa o payload e o segundo <b>archive</b> o nome preterído<br>
no script tem explicando o que significa cada um dos comandos
</p>
<h1>Como executar o payload</h1>
<p>Basta acessar o terminal no seu Android ir na pasta onde colocou e digitar<br>
<b>root@titan:~# sh payload.sh</b><br>
Obviamente você precisa estar com o seu Android plugado a algum computador, e esperar a mágica<br>
</p>
