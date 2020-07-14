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
     @for($j=1;$j<=$num;$j++)
        <?php
        $no=0;
        if($j!=1){
            for($i=2;$i<$j;$i++){
                if(($j%$i)==0){
                    $no++;
                }
            }
        }
        if($no>0){
            echo $j." no es primo";
        }
        else{
            echo $j." es primo";
    
        }
        ?>
        <br>
    @endfor
    
</body>
</html>