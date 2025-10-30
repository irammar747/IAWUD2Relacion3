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
        $resultado .= "<li>$tabla * $i = ".($tabla*$i)."</li>";
    }

    $resultado .= "<ul>";

    return $resultado;
}