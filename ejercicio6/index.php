<?php
// Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
// Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

// Ejemplos:
// Murciélago
// aceituno
// acuífero
// http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 

 function contar($palabra){

    $numero = strlen($palabra);
    
    $a = substr_count($palabra, 'a') + substr_count($palabra, 'A');
    $e = substr_count($palabra, 'e') + substr_count($palabra, 'E');
    $i = substr_count($palabra, 'i') + substr_count($palabra, 'I');
    $o = substr_count($palabra, 'o') + substr_count($palabra, 'O');
    $u = substr_count($palabra, 'u') + substr_count($palabra, 'U');

    echo "El número total de letras en $palabra es: $numero \n";
    echo"<br>";
    if($a===1 and $e===1 and $i===1 and $o===1 and $u===1){
        echo"La palabra $palabra contiene todas las vocales sin repetir\n";
    }elseif($a<1 and $e<1 and $i<1 and $o<1 and $u<1){
        echo"La palabra $palabra contiene todas las vocales pero algunas se repiten\n";
    }else {
        echo"La palabra $palabra no contiene todas las vocales\n";
    }
 }

contar("Andres");
