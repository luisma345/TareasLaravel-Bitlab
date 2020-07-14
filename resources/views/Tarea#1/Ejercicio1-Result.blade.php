<!-- Escribe un programa que cuente desde tu edad actual hasta 0 (cuenta regresiva) y que -->
<!-- imprima dichos números. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Edad {{$age}}</h1>
    @for($i=$age;$i>=0;$i--)
        {{ $i }} <br>
    @endfor
</body>
</html>