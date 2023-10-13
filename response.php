<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Respuesta PHP a Peticion</h3>
    </div>
    <div>
        <?php
            if(isset($_POST['numero']) && !empty($_POST['numero'])){
                $numero = $_POST['numero'];
                $i = 1;
                while($i <= $numero){
                    echo 'Valor generado: '. $i .'<br>';
                    $i ++;
                }
            } else{
                echo 'Valor no valido';
            }
        ?>
    </div>
</body>
</html>