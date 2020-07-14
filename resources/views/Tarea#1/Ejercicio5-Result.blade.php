<!-- Una empresa encuestadora requiere que le ayudemos a encontrar las frecuencias de
edades. Estas edades se ingresarán todas en un solo campo de texto, separadas por coma.
Al final del conteo, el programa deberá imprimir las edades encontradas con sus
correspondientes frecuencias. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    @for($i=0;$i<count($index);$i++)
        {{"Edad: ".$index[$i]." Frecuencia -> ".$cant[$index[$i]]}}<br>
    @endfor
</body>
</html>