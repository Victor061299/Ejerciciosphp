<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<link rel="stylesheet" type="text/css" href="./css/responsive.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body>

	<div id="burger-menu">
        <span></span>
    </div>

    <div id="menu2">
        <ul>
        	<li><a href="./index.html">Inicio</a></li>
            <li><a href="vista_factorial.php">Factorial</a></li>
            <li><a href="Conversion.php">Conversion de grados</a></li>
            <li><a href="vista_calculadora.php">Calculadora</a></li>
        </ul>
    </div>

	<nav id="menu">
		<div><a href="./index.html">Inicio</a></div>
		<div><a href="vista_factorial.php">Factorial</a></div>
		<div><a href="Conversion.php">Conversion de grados</a></div>
		<div><a href="vista_calculadora.php">Calculadora</a></div>
	</nav>

	<center>
		<br>
	<section>
    <nav>
        <h1>CALCULADORA</h1>
    </nav>

    <section>
        <form name="calculadora" action="controlador_calculadora.php" method="POST" enctype="multipart/form-data">

            <p>Número 1: <input type="number" name="num1"  autofocus placeholder="Escribe un número"></p>
            <p>Número 2: <input type="number" name="num2"  autofocus placeholder="Escribe un número"></p>
    <br>

    <select name="opcion">
        <option value="0">suma</option>
        <option value="1">resta</option>
        <option value="2">multiplicacion</option>
        <option value="3">division</option>
        <option value="4">modulo</option>
    </select>
       <input type="submit" name="calcular" value="Calcular">
        </form>
    </section>
</center>

<script src="js/script.js"></script>
</body>
</html>