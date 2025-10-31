<?php
/**
 * Ejercicio 1 -> Función que devuelve la suma de dos números
 * @param int $n1 Primer sumando
 * @param int $n2 Segundo Sumando
 * @return int Resultado de la suma
 */
function sumar(int $n1,  int $n2) : int{
    return $n1 + $n2;
}

/**
 * Ejercicio 4 -> Función que devuelve una lista desordenada con 
 * donde cada elemento de la lista es una de las multiplicaciones de la tabla
 * pasada por parámetro
 * @param int $tabla Número de tabla a mostrar
 * @return string Lista desordenada con la tabla
 */
function tablaMultiplicar(int $tabla): string
{
    $resultado = "<ul>";

    for($i=0;$i<=10;$i++){
        $resultado .= "<li>$tabla x $i = ".($tabla*$i)."</li>";
    }

    $resultado .= "<ul>";

    return $resultado;
}

/**
 * Ejercicio 5 -> Función que devuelve si un número es o no primo
 * @param int $n -> Número a comprobar
 * @return string -> Primo si es primo, no primo en caso contrario
 */
function esPrimo(int $n):string
{
    $primo = true;

    for($i=2;$i<$n;$i++){
        if($n % $i == 0){
            $primo = false;
            break;
        }
    }
    if($primo){
        return "Número primo";
    }else{
        return "Número NO primo";
    }
}

function promedio($numeros):float
{
    if(empty($numeros)){
        $resultado = 0;
    }else{
        $resultado = array_sum($numeros)/count($numeros);
    }
    return $resultado;
}

function convertirBinario(int $num): string{
    $binario = "";
    do{
        $resto = $num%2;
        $binario .= $resto;
        $num = intdiv($num, 2);
    }while($num != 0);

    return strrev($binario);
}

function numDiasMes(int $mes, int $anyo):int
{
    switch($mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $dias = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $dias = 30;
            break;
        case 2:
            //Son bisiestos todos los años múltiplos de 4, excepto aquellos que son múltiplos de 100 pero no de 400.
            //$bisiesto = $anyo % 4 == 0 && !($anyo % 100 == 0 && $anyo % 400 != 0)?true:false;

            if($anyo % 4 == 0 && !($anyo % 100 == 0 && $anyo % 400 != 0)){
                $bisiesto = true;
            }else{
                $bisiesto = false;
            }

            if($bisiesto){
                $dias = 29;
            }else{
                $dias = 28;
            }
            break;
        default:
            $dias = 0;        
    }
    return $dias;
}