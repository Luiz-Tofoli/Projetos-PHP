<?php

//include/require
require 'funcoes.php';

$operacoes = array(
    '+' => "Adição",
    '-' => "Subtração",
    '*' => "Multiplicação",
    '/' => "Divisão",
);

?><!DOCTYPE HTML>
<html>
<head>
    <title>Exercicio</title>
</head>
<body>
<form action="" method="post">
    Primeiro numero: <br/>
    <input name="num1" type="text"><br/>
    Segundo numero: <br/>
    <input name="num2" type="text"><br/>
    Operação:<br/>

    <select name="operacao">
        <?php
        foreach ($operacoes as $operacao => $titulo) {
            echo "<option value=\"$operacao\">$titulo</option>";
        }
        ?>
    </select><br/>

    <?php
    /*foreach ($operacoes as $operacao => $titulo) {
        echo "<label><input type=\"radio\" value=\"$operacao\" name=\"operacao\"/>$titulo</label>";
    }*/
    ?>

    <button type="submit">Enviar</button>

    <?php resultado(); ?>

</form>
</body>
</html> 
                                                         
																  
																  
																 
	
   
                                                         
                                                                    
 
                                                                    
 
                                                                   
                                                                  