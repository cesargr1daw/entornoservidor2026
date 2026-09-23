<?php
$alumnos = [
["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];

//alumno nota mas alta
function($alumnos){
    $notaAlta=0;
    $nombreAlumnoNotaAlta="";
    for($i=0; $i<count($alumnos)-1; $i++){
        if($alumnos[$i]["nota"]>$notaAlta){
            $notaAlta=$alumnos[$i]["nota"];
            $nombreAlumnoNotaAlta=$alumnos[$i]["nombre"];
        }
    }
}

//Calcula y muuestra la media de las notas
function calcularMedia($alumnos){
    $suma=0;
    foreach($alumnos as $alumno) {
        $suma+=$alumno["nota"];
    }
}

//Mayores de 19 años
function mostrarMayores($alumnos){
    $mayores=[];
    $lista=[];
    foreach($alumnos as $alumno) {
        if($alumno["edad"]>19){
            array_push($mayores, $alumno);
            array_push($lista, $alumno["nombre"]);
        }
    }
}
?>

<body>

    <h1>Selecciona una función</h1>

    <form method="get">
        <a href="?opcion=uno">Mostrar el alumno con la nota mas alta</a><br>
        <a href="?opcion=dos">Calcular y mostrar la media de las notas</a><br>
        <a href="?opcion=tres">Mostrar mayores de edad</a>
    </form>

</body>