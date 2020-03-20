<?php

# Definicion de Variables
$variable_entera = 5 ;
$variable_float = 10.5 ;
echo $variable_entera, $variable_float ; // imprime variable por stdin

# No se definen tipos de datos
$variable_sin_tipo = 5 ;
$variable_sin_tipo = 5.1 ;

# Operadores
$suma = $variable_entera + $variable_sin_tipo ;
$resta = 5 - 5 ;
$multiplicacion = 2 * 5 ;
$division = 6 / 2 ;
echo $suma ;

/**
 *  Strings
 */
$nombre = "Tomas";
$str1 = "Hola PAW 2020";
$str2 = 'Hola PAW 2020';
$str3 = "Mi nombre es " . $nombre . ". Mucho gusto."; // concatenar strings
$str4 = "Mi nombre es $nombre. Mucho gusto."; // string formateado
$str4 = 'Mi nombre es $nombre. Mucho gusto.'; // no funciona con comillas simples

// booleanos
$valor_bool = true ; // false
$resultado_booelano = 5 == 4;
$operadores = true || false && (true && false);
$operadores = $valor_bool ||
    $resultado_booelano &&
    (6 >= 5 || $valor_bool);

/**
 *  Arreglos y arreglso asociativos
 */
$lista_de_cosas = array("texto", 4, 5, array("mas texto", 10.5), true);
// Otra forma de declarar el mismo array
$lista_de_cosas = ["texto", 4, 5, ["mas texto", 10.5], true];
// y en multiples lineas para mas legible
$lista_de_cosas = [
    "texto",
    4,
    5,
    [
        "mas texto",
        10.5
    ],
    true
];
// array asociativo (o hash o diccionario)
$assoc_array = [
    2 => 'dos',
    5 => 'cinco',
    'seis' => 6,
    'ocho' => [
        1, 2, 3, 4, 5, 6, 7, 8
    ]
];
// asignacion en array
$numeros = [];
$numeros[1] = 'uno';
$numeros[2] = 'dos';
$numeros[3] = 'tres';
$numeros[4] = 'cuatro';


/**
 * Estructuras de control
 */
$dato_de_aplicacion = rand(1, 10) ; // funcion y asignacion
// if ... else if ... else
if ($dato_de_aplicacion <= 5) {
    echo "Es menor a 5";
} else if (is_integer($dato_de_aplicacion)) {
    echo "Es un entero mayor que 5";
} else {
    echo "Es otra cosa";
}

// for
echo "\n\nRepeticiones\n";
$repeticiones = [];
for ($index=0; $index < 1000; $index++) {
    $random = rand(0, 10);
    //$repeticiones[$random] += 1 ;
    $repeticiones[$random] = $repeticiones[$random] + 1 ;
    // Lo anterior funciona pero no es correcto, que falta?
}
print_r($repeticiones);

// tambien hay while similar al resto de los lenguajes
// mas interesante es el foreach
$productos = [
    "m" => "mate",
    "c" => "cafe",
    "h" => "harina",
    "p" => "palmitos"
];
echo "<select name='productos'>";
foreach ($productos as $clave => $valor) {
    echo "<option value='$clave'>$valor</option>";
}
echo "</select>";

// podemos definir funciones
function sumar($valor1, $valor2)
{
    return $valor1 + $valor2 ;
}
