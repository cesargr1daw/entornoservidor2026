<?php
$productos = [
["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
["nombre" => "Gorra", "precio" => 12.0, "stock" => 20]
];

//mostrar productos disponibles
foreach($productos as $producto){
    if($producto["stock"]>0){
        print_r($producto);
    }
}

//valor total de inventario
$totalInventario = 0;
foreach ($productos as $producto) {
    $totalInventario += $producto["precio"] * $producto["stock"];
}
echo $totalInventario;


//ordena el array por precio de mayor a menor y muestralo
usort($productos, function ($a, $b) {
    return $b["precio"] <=> $a["precio"];
});

foreach ($productos as $producto) {
    print_r($producto);
}