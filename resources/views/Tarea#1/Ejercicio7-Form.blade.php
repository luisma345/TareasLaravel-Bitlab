<!-- Desarrollar un programa que reciba un número. Luego, basado en un único arreglo de
libros almacenado en el controlador, el programa tomará el número dado de libros, de
forma aleatoria, para indicar que el usuario debe leer esos libros. En la vista de resultados,
deben mostrarse 2 listados: los libros seleccionados para ser leídos y los que no fueron
seleccionados. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="{{ route('ejercicio7.books') }}" method="POST">
        @csrf

        <label for="num">Ingrese un número:</label>
        <input type="text" name="num">
        <button>Enviar</button>
    </form>
</body>
</html>