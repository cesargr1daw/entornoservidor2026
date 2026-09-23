<?php
    $alumnos = [
        ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
        ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
        ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
        ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
    ];

    //alumno nota mas alta
    function alumnoNotaAlta($alumnos)
    {
        $notaAlta = 0;
        $nombreAlumnoNotaAlta = "";
        for ($i = 0; $i < count($alumnos) - 1; $i++) {
            if ($alumnos[$i]["nota"] > $notaAlta) {
                $notaAlta = $alumnos[$i]["nota"];
                $nombreAlumnoNotaAlta = $alumnos[$i]["nombre"];
            }
        }
        return $nombreAlumnoNotaAlta;
    };

    //Calcula y muuestra la media de las notas
    function calcularMedia($alumnos)
    {
        $suma = 0;
        foreach ($alumnos as $alumno) {
            $suma += $alumno["nota"];
        }
        return $suma / count($alumnos);
    }

    //Mayores de 19 años
    function mostrarMayores($alumnos)
    {
        $mayores = [];
        foreach ($alumnos as $alumno) {
            if ($alumno["edad"] > 19) {
                array_push($mayores, $alumno);
            }
        }
        return $mayores;
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

<?php
    $opcion = isset($_GET["opcion"]) ? $_GET["opcion"] : "";
    switch ($opcion) {
        case "uno":
            $alumno = alumnoNotaAlta($alumnos);
            echo "<h2>Alumno con la nota más alta:</h2>";
            echo "<p>$alumno</p>";
            break;
        case "dos":
            $media = calcularMedia($alumnos);
            echo "<h2>Media de las notas:</h2>";
            echo "<p>$media</p>";
            break;
        case "tres":
            $mayores = mostrarMayores($alumnos);
            echo "<h2>Alumnos mayores de 19 años:</h2>";
            foreach ($mayores as $alumno) {
                echo "<p>";
                echo $alumno["nombre"] . " - ";
                echo $alumno["edad"] . " años. ";
                echo "</p>";
            }
            break;
    }

?>