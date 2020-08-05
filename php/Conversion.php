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

<header style="background-color: blue">
    <h1> Convertidor de grados </h1>
  </header>

  <section>
    <article style="background-color: blue">
      <center>
        <form action="Conversion.php" method="POST">
          <table>

            <tr>
              <td>Cantidad:</td>
              <td><input type="number" name="can"></td>
            </tr>

            <tr>
              <td>Unidad:</td>
              <td>
                <select name="uni">
                  <option value="1">Celcius</option>
                  <option value="2">Fahrenheit</option>
                  <option value="3">Kelvin</option>
                </select>
              </td>
            </tr>
          </table>

          <input type="submit" value="Convertir">

        </form>
      </center>
    </article>
  </section>

<script src="js/script.js"></script>
</body>
</html>

<?php
  if ($_POST) {
    $can=$_POST['can'];
    $uni=$_POST['uni'];

    if ($uni==1) {
      $fah=$can*5/9+32;
      $kel=$can+273.15;

      echo "<h2>Fahrenheit: ".round($fah,2)." grados. </h2>";
      echo "<h2>Kelvin: ".round($kel,2)." grados. </h2>";
    }

    if ($uni==2) {
      $cel=($can-32)*5/9;
      $kel=($can-32)*5/9+273.15;

      echo "<h2>Celcius: ".round($cel,2)." grados. </h2>";
      echo "<h2>Kelvin: ".round($kel,2)." grados. </h2>";
    }

    if ($uni==3) {
      $cel=$can-273.15;
      $fah=($can-273.15)*9/5+32;

      echo "<h2>Celcius: ".round($cel,2)." grados. </h2>";
      echo "<h2>Fahrenheit: ".round($fah,2)." grados. </h2>";
    }
  }
?>