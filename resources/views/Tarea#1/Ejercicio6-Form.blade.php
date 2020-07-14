<!-- Crear un programa que reciba un número. Luego, deberá imprimir todos los números del
1 hasta ese número dado, indicando si cada número es primo o no. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="{{ route('ejercicio6.primos') }}" method="POST">
        @csrf

        <label for="num">Ingrese un número:</label>
        <input type="text" name="num">
        <button>Enviar</button>
    </form>
</body>
</html>