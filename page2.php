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
        <h1>Serie Fibonacci</h1>
    </header>

        <nav>
            <ul>
            <li id="menu1"><a href="index.php">Inicio</a></li>
            <li id="menu2" class="activo"><a href="page2.php">Serie Fibonacci</a></li>
            <li id="menu3"><a href="page3.php">Cálculos Matemáticos</a></li>
            </ul>
        </nav>
    </div>

    <form name="form1" method="POST" action="calcular.php">
    <p>Ingrese el número para conocer la Serie Fibonacci: <input type="text" name="txtnumero" id="txtnumero"></p>
    <p><input type="submit" name="btncalcular" value="Calcular"></p>
    <p><input type="reset" name="btnborrar" value="Borrar"></p>
    </form>

</body>
</html>