<!-- Un programa que reciba un string. Luego, que imprima cada letra del string en una línea
diferente, en minúscula y en mayúscula, por ejemplo:
h H
o O
o L
a A -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    @foreach($array as $letter)
        {{ strtolower($letter)}} {{strtoupper($letter) }} <br>
    @endforeach
</body>
</html>