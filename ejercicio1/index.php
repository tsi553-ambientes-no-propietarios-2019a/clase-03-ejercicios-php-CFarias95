<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
 echo 'con FOR <br>';
	
	for($i =1;$i<=10;$i++){
		$num=2*$i;
		echo "2*$i=$num";
		echo '<br>';
		
	}
	echo'<br>';
	echo 'Con WHILE <br>';
	$x=1;
	while($x<=10){
		
		$num1=2*$x;
		echo "2*$x=$num1";
		echo '<br>';
		$x++;
		
	}
	echo'<br>';
	echo 'Con DO/WHILE <br>';
	$y=1;
	do{
		$num2=2*$y;
		echo "2*$y=$num2";
		echo '<br>';
		$y++;		
	}while($y <=10)
 
 
?>