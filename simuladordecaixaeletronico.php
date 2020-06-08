<?php

$cedulas = array(
	'20' => 10,
	'50' => 10,
	'100' => 10,
);

printf (" 1 Itaú \n");
printf (" 2 Bradesco \n");
printf (" 3 Santander \n");
printf (" 4 Caixa Econômica Federal \n"); 
printf (" 5 Banco do Brasil \n");
printf (" 6 Nubank \n");
printf (" 7 Banrisul \n");


$numero = readline("Digite o numero do seu banco: ");
switch ($numero) {
case '1':
echo 'Você escolheu o Banco Itaú';
break;

case '2':
echo 'Você escolheu o Banco Bradesco';
break;

case '3':
echo 'Você escolheu o Banco Santander';
break;

case '4':
echo 'Você escolheu o Banco Caixa Econômica Federal';
break;

case '5':
echo 'Você escolheu o Banco do Brasil';
break;

case '6':
echo 'Você escolheu o Banco Nubank';
break;

case '7':
echo 'Você escolheu o Banco Banrisul';
break;
}



/**
 * Soma o valor das cedulas informadas
 *
 * param array $notas
 * return int
 */
function contabilizar($notas) {
	$total = 0;
	
	foreach ($notas as $valor => $quantidade) {
		$total += ($valor * $quantidade);
	}

	return $total;
}

$resposta = null;
do {
	//1 - Mostra quantidade disponivel
	$total = contabilizar($cedulas);
	
	foreach ($cedulas as $valor => $quantidade) {
		echo "Cedula de $valor : $quantidade\r\n";
	}
	
	echo "Valor disponivel: $total\r\n";
	
	//2 - Recebe o valor que o usuario deseja
	do {
		$resposta = readline("Informe quanto deseja sacar ou digite 'sair' para encerrar\r\n");
		
		if ($resposta == 'sair') {
			die();
		}
		
		//Checa tentativas invalidas
		if ($resposta < 0) {
			echo "Nao eh possivel sacar valores negativos\r\n";
		}
		
		if ($resposta > $total) {
			echo "Nao possui saldo suficiente para o saque\r\n";
		}
		
		if (!is_numeric($resposta)) {
			echo "Valor invalido\r\n";
		}
	} while(!is_numeric($resposta));
	
	//3 - Remover as cedulas de acordo com o valor digitado pelo usuario
	$auxiliar = array('100', '50', '20');
	$valorSacado = 0;
	$valorDesejado = $resposta;
	
	//3.1 Checar se é possivel sacar o valor de acordo com as cedulas
	//que a maquina possui
	$divisivel = false;
	
	foreach ($cedulas as $valor => $quantidade) {
		if(($valorDesejado % $valor == 0) && $quantidade > 0) {
			$divisivel = true;
			break;
		}
	}
	
	if (!$divisivel) {
		echo "Nao eh possivel sacar este valor\r\n";
		continue;
	}
	
	//3.2 - Realiza o saque das notas
	foreach ($auxiliar as $valorCedula) {
		//checa se possui a cedula atual
		while (
			$cedulas[$valorCedula] > 0 
			&& $valorDesejado >= $valorCedula
			&& $valorDesejado > 0
		) {
			//Realiza o saque
			$valorSacado += $valorCedula;
			$valorDesejado -= $valorCedula;
			
			//Remove uma cedula
			$cedulas[$valorCedula]--;
		}
	}
} while ($resposta != 'sair');

?>


