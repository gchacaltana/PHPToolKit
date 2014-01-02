<?php
//declaramos la funcion : randomString
function randomString($length, $type = '') {
    // Seleccionamos el tipo de caracteres que deseas que devuelva el string
    switch ($type) {
        case 'num':
            // Solo cuando deseas que devuelva numeros.
            $salt = '1234567890';
            break;
        case 'lower':
            // Solo cuando deseas que devuelva letras en minusculas.
            $salt = 'abcdefghijklmnopqrstuvwxyz';
            break;
        case 'upper':
            // Solo cuando deseas que devuelva letras en mayusculas.
            $salt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        default:
            // Para cuando deseas que la cadena este compuesta por letras y numeros
            $salt = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            break;
    }
    $rand = '';
    $i = 0;
    while ($i < $length) {
        //Loop hasta que el string aleatorio contenga la longitud ingresada.
        $num = rand() % strlen($salt);
        $tmp = substr($salt, $num, 1);
        $rand = $rand . $tmp;
        $i++;
    }
    //Retorno del string aleatorio.
    return $rand;
}

//Para llamar a la función.
//Para este ejemplo mostraremos un string de longitud de 10 caracteres, entre letras y números
echo randomString(10, $type = '');
