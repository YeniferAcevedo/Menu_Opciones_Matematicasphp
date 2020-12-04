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
        <h1>Calcular factorial de un número</h1>
    </header>

        <nav>
            <ul>
                <li id="submenu1" class="activo"><a href="page4.php">Calcular factorial de un número</a></li>
                <li id="submenu2"><a href="page5.php">Calcular 3 números</a></li>
                <li id="submenu3"><a href="page6.php">Regresar al Inicio</a></li>
            </ul>
        </nav>
    </div>

    <form name="form2" method="POST" action="CalcularFac.php">
    <p>Ingrese el número para calcular factorial: <input type="text" name="txtnumero" id="txtnumero"></p>
    <p><input type="submit" name="btncalcular" value="Calcular"></p>
    <p><input type="reset" name="btnborrar" value="Borrar"></p>
    </form>

</body>
</html>