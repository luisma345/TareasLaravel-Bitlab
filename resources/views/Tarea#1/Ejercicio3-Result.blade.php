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
    @for($i=1;$i<=$num;$i++)
        <?php
        if($i%2==0){
            echo "$i es par";
        }else{
            echo "$i es impar";
        }
        ?>
        <br>
    @endfor
</body>
</html>