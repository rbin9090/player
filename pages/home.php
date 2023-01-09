<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/font/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>audio</title>

</head>

<body>
<div class="container_player">

	

	<img src="img/player-bg.png">

<div class="descrincao">
	<h2>java script</h2>
	<i>Nome autor</i>
</div>
<div class="durationmusic">
	<div class="barra">
		<progress value="0" max="1"></progress>
		<div class="pointer"></div>
	</div>
	<div class="time">
		<p class="inicio">0.00</p>
		<p class="fim">0.00</p>
	</div>
</div><!--duracao-->
<div class="player-controls">
	
	<i class="fa-solid fa-backward botao-rr anterior"></i>
	<i class="fa-solid fa-pause botao-pause"></i>
	<i class="fa fa-play botao-play"></i>
	<i class="fa-sharp fa-solid fa-forward botao-ff proximo"></i>
	
	
		
</div><!--player controls-->


<!--<audio preload="metadata">

	<source src="musicas/bondedogatopreto.mp3" type="audio/mpeg">
</audio>
<button>play</button>-->

<audio src="musicas/vinka.mp3"></audio>

</div><!--container-- player-->
<script type="text/javascript" src="js/js.js"></script>

</body>
</html>