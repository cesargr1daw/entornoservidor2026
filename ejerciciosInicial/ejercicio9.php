<?php
function parOImpar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}

echo parOImpar(7) . "<br>";