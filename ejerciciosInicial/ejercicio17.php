<? php
function factorial($numero) {
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo "El factorial es: " . factorial(5) . "<br>";


