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
    <form action="{{ route('ejercicio5.ages') }}" method="POST">
        @csrf

        <label for="ages">Ingrese las edades separadas por comas ",":</label>
        <input type="text" name="ages">
        <button>Enviar</button>
    </form>
</body>
</html>