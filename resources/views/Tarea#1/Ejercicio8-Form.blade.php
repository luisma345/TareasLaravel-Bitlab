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
    <form action="{{ route('ejercicio8.rango') }}" method="POST">
        @csrf

        <label for="num1">Ingrese el año de inicio del rango:</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Ingrese el año de fin del rango:</label>
        <input type="text" name="num2"><br><br>
        <button>Enviar</button>
    </form>
</body>
</html>