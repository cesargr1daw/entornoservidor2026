<? php
function mayor($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

echo "El mayor es: " . mayor(15, 20) . "<br>";

