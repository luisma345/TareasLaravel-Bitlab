<!-- Crea un programa que simule la tabla de división del 2, la cual debe ir en orden
descendente del 25 al 0 y, además, debe mostrar el residuo. Por ejemplo:
25 entre 2 es igual a 12 y me sobra 1.
24 entre 2 es igual a 12 y me sobra 0. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    @for($i=25;$i>=0;$i--)
        {{"$i entre 2 es igual a ".intval($i/2)." y me sobra ".($i%2)}}
        <br>
    @endfor
</body>
</html>