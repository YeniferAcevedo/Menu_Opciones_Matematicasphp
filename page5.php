<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de opciones matemáticas</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="container">

    <header>
        <h1>Calcular 3 números</h1>
    </header>

        <nav>
            <ul>
                <li id="submenu1"><a href="page4.php">Calcular factorial de un número</a></li>
                <li id="submenu2" class="activo"><a href="page5.php">Calcular 3 números</a></li>
                <li id="submenu3"><a href="page6.php">Regresar al Inicio</a></li>
            </ul>
        </nav>
    </div>

    <p>Ingrese 3 números para conocer: cuál es el mayor, el menor y conocer el promedio de los 3 números</p>

    <form name="form3" method="POST" action="Validar.php">
        <p>Ingrese primer número: <input type="text" name="txtnumero" id="txtnumero"></p>
        <p>Ingrese segundo número: <input type="text" name="txtnumero2" id="txtnumero2"></p>
        <p>Ingrese tercer número: <input type="text" name="txtnumero3" id="txtnumero3"></p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>
        <p><input type="reset" name="btnborrar" value="Borrar"></p>
    </form>

</body>
</html>