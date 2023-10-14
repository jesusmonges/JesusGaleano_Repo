<?php 
    sleep(3);
    function factorial($numerofactorial) {
        if ($numerofactorial < 2) {
            return 1;
        } else{
            return ($numerofactorial*factorial($numerofactorial-1));
        }
    }
        $num = $_POST['numerofactorial'];
        if ($num >= 10){
            echo "prueba con un numero menor a 10";
            exit();
        }
        if(!is_numeric($num)){
            echo "Valor nu valido, no es un numero";
            exit();
        }

        $factorial = factorial($num);
        echo "Correcto! el factorial es: ". $factorial;
?>