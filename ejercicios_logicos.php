<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios de Lógica en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6f7;
            margin: 30px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #0056b3;
            margin-top: 25px;
        }
        hr {
            border: 0;
            height: 1px;
            background: #ccc;
            margin: 20px 0;
        }
        pre {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h1> Ejercicios de Lógica con Estructuras de Datos en PHP</h1>

<?php
// 1️.Lista invertida
function listaInvertida($numeros) {
    return array_reverse($numeros);
}

$lista_original = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$lista_invertida = listaInvertida($lista_original);

echo "<h2>1️. Lista Invertida</h2>";
echo "Original: " . implode(", ", $lista_original) . "<br>";
echo "Invertida: " . implode(", ", $lista_invertida) . "<br>";

echo "<hr>";

// 2. Suma de numeros pares
function sumaNumerosPares($numeros) {
    $suma = 0;
    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$suma_pares = sumaNumerosPares($numeros);

echo "<h2>2️. Suma de Números Pares</h2>";
echo "Lista: " . implode(", ", $numeros) . "<br>";
echo "Suma de números pares: $suma_pares<br>";

echo "<hr>";

// 3️. Frecuencia de caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if ($caracter != " ") { // ignorar espacios
            if (isset($frecuencia[$caracter])) {
                $frecuencia[$caracter]++;
            } else {
                $frecuencia[$caracter] = 1;
            }
        }
    }

    return $frecuencia;
}

$texto = "mi gato es bonito";
$frecuencia = frecuenciaCaracteres($texto);

echo "<h2>3️.Frecuencia de Caracteres</h2>";
echo "Texto: \"$texto\"<br>";
echo "<pre>";
foreach ($frecuencia as $caracter => $cantidad) {
    echo "'$caracter' => $cantidad\n";
}
echo "</pre>";

echo "<hr>";

// 4. Bucle anidado de asteriscos
function piramideAsteriscos($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }
}

echo "<h2>4️.Pirámide de Asteriscos</h2>";
piramideAsteriscos(5);

?>

</body>
</html>
