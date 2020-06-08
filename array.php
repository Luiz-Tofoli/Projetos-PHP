<?php

function bubble_sort($numeros){
	
    for($i=0; $i<count($numeros)-1; $i++)
    {
        for($j=0; $j<count($numeros)-1; $j++)
        {                                       /*O bubble sort, ou ordenação por flutuação (literalmente "por bolha"), 
				                                /* é um algoritmo de ordenação dos mais simples. A ideia é percorrer o vetor diversas vezes,
												/*e a cada passagem fazer flutuar para o topo o maior elemento da sequência. */
            if($numeros[$j]> $numeros[$j+1]){
                $temp= $numeros[$j+1];             
                $numeros[$j+1]= $numeros[$j];
                $numeros[$j]= $temp;
            }
        }

    }
    return ($numeros); 
	
}

$array = [];

for ($i= 0; $i < 3; $i++) {
        $array[] = readline("Escolha 3 numeros dando enter a cada escolha: ");
		   
}   

//sort ($array); //

// Ordena array para exibir em ordem crescente 

$array = bubble_sort ($array); 
    


 // tarefa: elaborar uma função que faça ordenação ,equivalente à função "sort"
 // pesquisar 
 // dica um algoritmo comum para a tarefa "bubble sorting"
 
 // da palavra "echo" abaixo em diante não mexer
 
 echo "os numeros digitados foram:\r\n";
 
 $itens = count ($array);
for ($i=0; $i < $itens ; $i++) {
    echo $array[$i]. "\r\n";
		   
}         





  