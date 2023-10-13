<!DOCTYPE html>
<html>
<head>
    <title>Bucle WHILE</title>
</head>
<body>
    <?php
    $i = 1;
    $fin = rand(1,100);
        while($i <= $fin){
            echo 'Valor del indice a: ';
            echo $i .'<br>';
            $i++;
        }
    ?>
</body>
</html>