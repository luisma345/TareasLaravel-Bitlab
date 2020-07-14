<!-- Crear un programa que reciba dos años. Luego, imprimará los años bisiestos dentro de
ese rango de años dado (Ej: 1986 – 2020). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    Rango: {{$inicio." - ".$fin}} <br><br>
    @for($i=$inicio;$i<=$fin;$i++)
        @if($i%4==0 && $i%100!=0 || $i%400==0)
            {{"El año $i es bisiesto"}}<br>
        @endif
    @endfor
</body>
</html>