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

<section>
<h1>Factorial de un numero</h1>

<h2>Capture numero</h2>


<form name="factor" action="controlador_factorial.php" method="GET" enctype="multipart/form-data">
	<label>Numero a calcular</label>
    <input type="text" name="num" required="" min="1" max="10" >
    <br>
	<input type="submit" name="calcular" value="Calcular">
</form>

</section>

<script src="js/script.js"></script>
</body>
</html>