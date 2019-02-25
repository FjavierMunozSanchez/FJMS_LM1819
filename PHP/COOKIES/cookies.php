<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COOKIES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
   
<!--Hacerlo en HTML5 http://www.maestrosdelweb.com/tutorial-local-session-storage/-->

<p>
<?php

//$nombre= $_COOKIE['NombreUsu']

//if (isset($nombre)){}

if (isset($_COOKIE['NombreUsu'])) {

    print "Hola". $_COOKIE['NombreUsu'];

} else {
    print "Hola Anónimo";

}

?>
</p>

<p>

<a href="segunda.php">Ir a Segunda</a>

</p>




</body>
</html>


