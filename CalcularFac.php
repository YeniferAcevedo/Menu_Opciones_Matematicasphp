<link rel="stylesheet" type="text/css" href="css/estilos.css">

<?php

if(isset($_POST["btncalcular"])){

    require_once 'Factorial.php';

    $factorial = new Factorial();

    $numero = $_POST["txtnumero"];

    $factorial->setValor($numero);

    echo "La serie factorial de " . $numero . " es: " . $factorial->calcularFactorial();
    
}else{
    echo "Acceso no autorizado.";
}

?>

<br>
<br>

<button onclick="location.href='page4.php'">Regresar</button>