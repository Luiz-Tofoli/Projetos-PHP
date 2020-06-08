<?php


//fazer loops mostrando cada numero e informando se é par ou impar
//for
//foreach 
//while
//exemplo de saida ("o numero 63 eh impar")
 

$numeros = array (63,10,79,61,1,46,42,6,5,2);


//exercicio for
echo "for:\n";
for ($i = 0; $i < count($numeros); $i++){
     //  echo ($numeros[$i] % 2) ? "{$numeros[$i] } o numero eh impar\n" : "{$numeros[$i]} o numero eh par\n";
	if ($numeros[$i] % 2 == 1) {
		echo "{$numeros[$i] } o numero eh impar\n";
		
    } else {
		echo "{$numeros[$i] } o numero eh par\n";	
	}
} 


// exercicio foreach
echo "\n foreach:\n";
foreach ($numeros as $numero)
{
    if ($numero % 2 == 1) {
		echo "{$numero} o numero eh impar\n";
		
    } else {
		echo "{$numero} o numero eh par\n";	
	}
} 



//exercicio while

echo "\n while:\n"; 
 $verificar = count($numeros);

  $i = 0;
  while($i < $verificar){
     if ($numeros[$i] % 2 == 1) {
		echo "{$numeros[$i] } o numero eh impar\n";
		
    } else {
		echo "{$numeros[$i] } o numero eh par\n";	
	}
      $i++ ; 
  } 