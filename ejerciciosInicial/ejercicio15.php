<? php
function promedio($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    $average= $suma / count($numeros);
    return $average;
}

$notas = [5, 7, 8, 10];
echo "El promedio es: " . promedio($notas) . "<br>";

