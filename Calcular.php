
<link rel="stylesheet" type="text/css" href="css/estilos.css">

<?php

if(isset($_POST["btncalcular"])){

    require_once 'Fibonacci.php';

    $fibonacci = new Fibonacci();

    $numero = $_POST["txtnumero"];

    $fibonacci->setValor($numero);

    echo "La serie fibonacci de " . $numero . " es: ";
    
    $fibonacci->calcularFibonacci();
    
}else{
    echo "Acceso no autorizado.";
}

?>

<br>
<br>

<button onclick="location.href='page2.php'">Regresar</button>