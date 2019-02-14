<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php

//fuincion que se el pase un nombre de fichero y devuelva la extensión del fichero


function extension($fichero){
    $nombrext = explode(".", $fichero);
//strrpos: Encuentra la ultima posision de la ultima ocurencia del . dentro del fichero, coje la posisión despues del punto.

// $inicio = strrpos($fichero, ".") +1;
// return strtoupper(substr($fichero, $inicio));
    return strtoupper($nombrext[1]);

}

$nombrefichero = "fichero.txt";
$ext = extension($nombrefichero);
print "<p>La extensión del archivo $nombrefichero es extension es $ext</p>"


//

?>



    
</body>
</html>