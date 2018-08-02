<html>
<head>
<title>Agente Virtual</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="javascript.js"></script>
<?php 

session_start();

$_SESSION['userId'] = rand(1000000000,9999999999);

include "javascript.php"; 

?>
</head>
<link rel = "shortcut icon" type = "imagem/x-icon" href = "img/telemarketer.png"/>
<body style="background-image: url(img/WALLPAPERportalPSD3.png);background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;">

<div id="logos" style="width: 120px; display: block; margin-left: auto; margin-right: auto;">
<img src="img/bot.png" style="width: 120px; padding-top: 30px; padding-bottom: 30px ">
</div>

<div id='bodybox'>
  <div id='chatborder' style="font-size: 12px;background-color:rgba(179,231,255,0.5);">
	<p id="chatlog100" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog99" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog98" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog97" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog96" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog95" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog94" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog93" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog92" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog91" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog90" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog89" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog88" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog87" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog86" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog85" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog84" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog83" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog82" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog81" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog80" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog79" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog78" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog77" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog76" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog75" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog74" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog73" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog72" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog71" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog70" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog69" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog68" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog67" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog66" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog65" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog64" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog63" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog62" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog61" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog60" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog59" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog58" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog57" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog56" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog55" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog54" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog53" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog52" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog51" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog50" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog49" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog48" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog47" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog46" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog45" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog44" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog43" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog42" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog41" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog40" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog39" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog38" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog37" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog36" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog35" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog34" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog33" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog32" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog31" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog30" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog29" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog28" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog27" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog26" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog25" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog24" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog23" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog22" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog21" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog20" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog19" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog18" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog17" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog16" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog15" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog14" class="chatlog" style="font-size: 16px"></p>
	<p id="chatlog13" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog12" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog11" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog10" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog9" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog8" class="chatlog" style="font-size: 16px"></p>
    <p id="chatlog7" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog6" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog5" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog4" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog3" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog2" class="chatlog" style="font-size: 16px">&nbsp;</p>
    <p id="chatlog1" class="chatlog" style="font-size: 16px">Olá, para começar o seu atendimento digite 'iniciar'.</p>
    <input type="text" name="chat" id="chatbox" placeholder="" onfocus="placeHolder()">
  </div>
  <br>
  <br>
  
</div>

</body>
</html>