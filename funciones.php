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
            //Si encuentra un divisor entre 2 y el número anterior al número calculado es porque no es primo
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

/**
 * Función que calcula el valor medio de los valores de un array
 * @param mixed $numeros Array con los números para calcular el promedio
 * @return float|int //Media de los números introducidos
 */
function promedio($numeros):float
{
    if(empty($numeros)){ //La función empty devuelve true si el array está vacío
        $resultado = 0; //Si el array está vacío el resultado será 0
    }else{
        //array_sum devuelve la suma de los elementos de un array
        //count devuelve el número de elementos de un array
        $resultado = array_sum($numeros)/count($numeros); 
    }
    return $resultado;
}

/**
 * Función que devuelve una cadena con la representación en binario de un número decimal
 * @param int $num Número decimal
 * @return string Cadena de caracteres con el número en binario
 */
function convertirBinario(int $num): string{
    $binario = "";
    do{
        $resto = $num%2;
        $binario .= $resto; //Iremos concatenando los restos a una cadena
        $num = intdiv($num, 2); //intdiv hace la división entera sin sacar decimales
    }while($num != 0); //Dividiremos entre 2 hasta que el número a dividir sea 0

    return strrev($binario); //Finalmente damos la vuelta a la cadena para conseguir el binario en el orden correcto
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

/**
 * Función que devuelve en formato hh:mm:ss una cantidad de segundos
 * @param int $seg Segundos a convertir
 * @return string Cadena que representa las horas, minutos y segundos que había en los segundos proporcionados
 */
function convertirSegundos(int $seg):string{
    $min = intdiv($seg,60); //calculo los minutos que hay en esos seegundos
    $seg = $seg % 60; //Calculo los segundos restantes que no han llegado para formar un minuto más
    $horas = intdiv($min, 60); //Calculo las horas que hay en los minutos calculados
    $min = $min % 60; //Calculo los minutos restantes que no han llegado para formar una hora más

    //El sprintf lo uso para que le de formato al texto, de esta manera si tenemos 1:2:3 lo pondrá como 01:02:03
    //haciendo que la cifra tenga 2 dígitos como mínimo y que rellene con 0s si falta alguno
    return sprintf("%02d : %02d : %02d", $horas, $min, $seg);
}

/**
 * Función que devuelve un array con los divisores de un número
 * @param mixed $num Número a calcular sus divisores
 * @return int[] //Array con los divisores de un número
 */
function obtenerDivisores($num): array{
    $divisores = []; //Declaro un array vacio

    for($i=1;$i<=$num;$i++){
        if($num % $i == 0){
            $divisores[] = $i; //Cada vez que encuentre un divisor lo añado al array
        }
    }
    return $divisores;
}

/**
 * Función que intercambia el valor de dos varibles pasadas como párametro
 * @param mixed $n1
 * @param mixed $n2
 * @return void
 */
function intercambiar(&$n1, &$n2):void{
    $aux = $n1;
    $n1 = $n2;
    $n2 = $aux;
}

/**
 * Función que devuelve un número aletorio entre un mínimo y un máximo
 * @param int $min Número mínimo del sorteo
 * @param int $max Número máximo del sorteo
 * @return int //Número generado
 */
function generarSorteo(int $min, int $max): int
{
    return random_int($min, $max);
}