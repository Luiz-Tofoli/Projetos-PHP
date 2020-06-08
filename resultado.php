<!DOCTYPE  html>
<html>
	<head>
		<title>PHP. Exemplo 1 - Resultado</title>
	</head>
	<body>
		<?php
		if (isset($_POST['nome'])) {
			echo "Olá ".$_POST['nome']." ".$_POST['sobrenome'].". Prazer em conhece-lo";
		} else {
			echo "Você não informou seu nome";
		}
		?>
	</body>
</html>