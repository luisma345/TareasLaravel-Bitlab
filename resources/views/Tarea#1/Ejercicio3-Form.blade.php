<!-- Imprime los números del 1 hasta un número dado, pero debes decir si el número es par
o impar. Ejemplo:
1 es impar
2 es par
3 es impar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="{{ route('ejercicio3.num') }}" method="POST">
        @csrf

        <label for="word">Ingrese un número:</label>
        <input type="text" name="num">
        <button>Enviar</button>
    </form>
</body>
</html>