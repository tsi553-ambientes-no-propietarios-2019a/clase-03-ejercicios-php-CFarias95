<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/
function titulo($tit){
	
	echo"
		
		<center>
		<div align='center'>
		<h1>$tit</h1>
		</div>
		</center>

	";
	
}

titulo('Carlos');
titulo('Caicedo');


