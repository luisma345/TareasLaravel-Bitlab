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
    <form action="{{ route('ejercicio1.age') }}" method="POST">
        @csrf

        <label for="age">Ingrese su edad:</label>
        <input type="text" name="age">
        <button>Enviar</button>
    </form>
</body>
</html>