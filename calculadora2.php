<!DOCTYPE HTML>
<html>
    <head>
        <title>Exercicio</title>
    </head>
    <body>
        <form action="" method="post" >
            Primeiro Numero: <input name="num1" type="text"><br>                
            Segundo numero: <input name="num2" type="text"><br>                  
            <input type="submit" name="operacao" value="+">                      
            <input type="submit" name="operacao" value="-">                     
            <input type="submit" name="operacao" value="*">                      
            <input type="submit" name="operacao" value="/">                      
			                                                              


        <?php
		
        $a = 0;
        $b = 0;
        $op= null;
        
		if (!empty ($_POST['num1']))
			$a = $_POST['num1'];
		if (!empty ($_POST['num2']))
			$b = $_POST['num2'];
		if (!empty ($_POST['operacao']))
			$op= $_POST['operacao'];		
									
    if( !empty($op) ) {                                       
    if($op == '+')                                          
         $c = $a + $b;                                       
    else if($op == '-')                                   
         $c = $a - $b;                                       
    else if ($op == '*')
         $c = $a*$b;
    else
         $c = $a/$b;

    echo "O resultado é: $c";
	  
	  
   }
    
	?>
	
        </form> 
	</body>
</html> 
                                                         
																  
																  
																 
	
   
                                                         
                                                                    
 
                                                                    
 
                                                                   
                                                                  