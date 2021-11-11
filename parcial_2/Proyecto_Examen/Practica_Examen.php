<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Examen de programación Backend</title>
</head>
<center>
<body style="background-image: url(watercolor-5062356_1920.jpg)" style="background-position: center">
	<font color="#EAD100">
    <h3>Nombre: Castro Vega Alonso</h3>
	

<?php 
	
	$cal = 0;

	$Nombre_1 = $_GET['Nombre_1'];
	echo "<br> El nombre del alumno es: " . $Nombre_1;


	$Pregunta_1 = $_GET['Pregunta_1'];
	$resp_1 = "accion de programar";
	if ($Pregunta_1 == $resp_1) {
		echo "<br><br><br> 1.-¿Qué es programación? <br> Respuesta correcta! <br><br>";
		$cal++;
	} else {
		echo "<br><br><br> 1.-¿Qué es programación? <br> Respuesta incorrecta :( <br><br>";
	}


	$Pregunta_2 = $_GET['Pregunta_2'];
	if ($Pregunta_2 == "a") {
		echo "<br> 2.-Es un lenguaje para la composición y estructuración de páginas web:<br> a) HTML, Has elegido la respuesta incorrecta <br><br>";
	} if ($Pregunta_2 == "b") {
		echo "<br> 2.-Es un lenguaje para la composición y estructuración de páginas web: <br> b) CSS, Has elegido la respuesta correcta! <br><br>";
		$cal++;
	} if ($Pregunta_2 == "c") {
		echo "<br> 2.-Es un lenguaje para la composición y estructuración de páginas web:<br> c) SQL, Has elegido la respuesta incorrecta <br><br>";
	}


	$Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en html";
     if ( $Pregunta_3 == $resp2) {
    	echo "<br> 3.-¿Que Es Php? <br> Respuesta correcta! <br><br>";
    	$cal++;
    }else {
    	echo "<br> 3.-¿Que Es Php? <br> Respuesta incorrecta <br><br> ";
    }


    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "es un lenguaje de computacion para trabajar con conjuntos de datos y las relaciones entre ellos";
     if ( $Pregunta_4 == $resp3) {
    	echo "<br> 4.-¿Que es SQL? <br> Respuesta correcta! <br><br> ";
    	$cal++;
    }else {
    	echo "<br> 4.-¿Que es SQL? <br> Respuesta incorrecta <br><br> ";
    }


    $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "1") {
    	echo "<br> 5.-Es un sistema de gestión de base de datos (SGBD) de código abierto: <br> Respuesta correcta! <br><br> ";
    	$cal++;
    } else {
    	echo "<br>  5.-Es un sistema de gestión de base de datos (SGBD) de código abierto: <br> Respuesta incorrecta <br><br> ";
    }
    

    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "a") {
      echo "<br> 6.-Programa capaz de almacenar gran cantidad de datos, relacionados y estructurados, que pueden ser consultados rápidamente de acuerdo con las características selectivas que se deseen: <br> a) Workbench, Has elegido la respuesta incorrecta <br><br> ";
    } if ($Pregunta_6 == "b") {
      echo "<br> 6.-Programa capaz de almacenar gran cantidad de datos, relacionados y estructurados, que pueden ser consultados rápidamente de acuerdo con las características selectivas que se deseen: <br> b) Base de datos , Has elegido la respuesta correcta! <br><br> ";
      	$cal++;
    }if ($Pregunta_6 == "c") {
      echo "<br> 6.-Programa capaz de almacenar gran cantidad de datos, relacionados y estructurados, que pueden ser consultados rápidamente de acuerdo con las características selectivas que se deseen: <br> c) Netbeans, Has elegido la respuesta incorrecta  <br><br> ";
    }


    $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "1") {
    	echo "<br> 7.-Son objetos de base de datos que contienen todos sus datos: <br>Respuesta correcta! <br><br> ";
    	$cal++;
    } else {
    	echo "<br> 7.-Son objetos de base de datos que contienen todos sus datos: <br>Respuesta incorrecta <br><br> ";
    }


     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "a") {
      echo "<br> 8.-Es un entorno de desarrollo integrado de código abierto y gratuito para el desarrollo de aplicaciones en los sistemas operativos Windows, Mac, Linux y Solaris: <br> a) Sublime Text, Has elegido la respuesta incorrecta <br><br> ";
    } if ($Pregunta_8 == "b") {
      echo "<br> 8.-Es un entorno de desarrollo integrado de código abierto y gratuito para el desarrollo de aplicaciones en los sistemas operativos Windows, Mac, Linux y Solaris: <br> b) Bloc de notas, Has elegido la respuesta incorrecta <br><br> ";
    }if ($Pregunta_8 == "c") {
      echo "<br> 8.-Es un entorno de desarrollo integrado de código abierto y gratuito para el desarrollo de aplicaciones en los sistemas operativos Windows, Mac, Linux y Solaris: <br> c) Netbeans, Has elegido la respuesta correcta <br><br> ";
      	$cal++;
    }



    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "1") {             
    	echo "<br> 9.-Es el componente más básico de la Web. Define el significado y la estructura del contenido web: <br>Respuesta correcta! <br><br> ";
    	$cal++;
     }if ($Pregunta_9 == "0") {
    	echo "<br> 9.-Es el componente más básico de la Web. Define el significado y la estructura del contenido web: <br>Respuesta incorrecta <br><br> ";
    }


    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "es un paradigma que permite ofrecer servicios de computación a traves de una red que usualmente es internet";
    if ( $Pregunta_10 == $resp10) {
    	echo "<br> 10.-¿Que es la nube? <br> Respuesta correcta! <br><br> ";
    	$cal++;
    	 }else {
    	echo "<br> 10.-¿Que es la nube? <br> Respuesta incorrecta :( <br><br> ";
    }

    echo " Es: " . "$cal/10";

	if ($cal == 10) {
		echo "<br>Felicidades, has sacado un 10!";
	}if  ($cal == 9) {
    	echo "<br>Felicidades, has sacado un 9!";
    }if  ($cal == 8) {
    	echo "<br>Felicidades, has sacado un 8!";
    }if ($cal == 7) {
    	echo "<br>Genial, has sacado un 7!";
    }if ($cal == 6) {
    	echo "<br>Has pasado con 6 pero creo que podemos mejorar!";
    }if ($cal <= 5) {
    	echo "<b>Has reprobado pero creo que podras hacerlo mejor a la proxima!<br>";
    }

	
 ?>
		</font>
 	</body>
</center>
</html>