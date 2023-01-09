<?php
if (!isset($_GET['busca'])) {
	header("Location: pages/busca.php");
	exit;
}

$autor = "%".trim($_GET['busca'])."%";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=music_play', 'root', '');

$sth = $dbh->prepare("SELECT * FROM `tb_all-music` WHERE `autor` LIKE :autor");
$sth->bindParam(':autor', $autor, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Buscar faixa por nome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font/css/all.min.css">

	
</head>
<body>
	<script src="js/jquery-3.6.3.min.js"></script>

	<div class="container">
			<div class="mold">
				<div class="player-container">








   <div class="musiclist_php">
	<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>

<?
}else{
?>
						
						<ul>
										<?php 


										if (file_exists($Resultado['autor'].".mp3")) {
											//echo "arquivo existe";
										}else{
											echo "<label>o arquivo nao existe ou foi removido do diretório</label>";
										}



										?>	<li><i class="fa-brands fa-teamspeak"></i> <?php echo $Resultado['id']; ?> - <?php echo $Resultado['autor']; ?></li>
											<audio preload="auto" tabindex="0" controls="">
										
											<source src="<?php echo $Resultado['autor'].".mp3" ?>" type="">
												
										</audio>
										
									
										
											
						</ul>
				
				
<!--<label>Não foram encontrados resultados pelo termo buscado.</label>-->
<?php
}
}
?>
			
	
          </div><!--music musiclist_php-->

</div><!--player content--content-->
</div><!--mold-->
</div><!--container-->
</body>
</html>