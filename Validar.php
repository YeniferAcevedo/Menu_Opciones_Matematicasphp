<link rel="stylesheet" type="text/css" href="css/estilos.css">

<?php

if(isset($_POST["btncalcular"])){

    $numero = $_POST["txtnumero"];
    $numero2 = $_POST["txtnumero2"];
    $numero3 = $_POST["txtnumero3"];

    if(($numero >= $numero2) && ($numero >= $numero3)){
        echo "El número mayor es: " . $numero; 
    }elseif(($numero2 >= $numero3) && ($numero2 >= $numero)){
        echo "El número mayor es: " . $numero2;
    }elseif(($numero3 >= $numero) && ($numero3 >= $numero2)){
        echo "El número mayor es: " . $numero3;
    }

    echo "<br><br>";

    if(($numero <= $numero2) && ($numero <= $numero3)){
        echo "El número menor es: " . $numero;
    }elseif(($numero2 <= $numero3) && ($numero2 <= $numero)){
        echo "El número menor es: " . $numero2;
    }elseif(($numero3 <= $numero) && ($numero3 <= $numero2)){
        echo "El número menor es: " . $numero3;
    }

    echo "<br><br>";

    if(($numero == $numero2)){
        echo "Los números en el 1 y 2 son iguales";
    }elseif(($numero == $numero3)){
        echo "Los números en el 1 y 3 son iguales";
    }elseif(($numero2 == $numero3)){
        echo "Los números en el 2 y 3 son iguales";
    }elseif(($numero2 == $numero)){
        echo "Los números en el 2 y 1 son iguales";
    }
    echo "<br><br>";

    $promedio = ($numero + $numero2 + $numero3) / 3;
    echo "El promedio de los números ingresados es: " . $promedio;

}
?>

<br>
<br>

<button onclick="location.href='page5.php'">Regresar</button>