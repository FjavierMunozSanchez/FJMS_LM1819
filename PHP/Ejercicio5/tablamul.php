<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<div>
<<?php

for($tabla=1; $tabla<=10; $tabla++) {
 echo "<th>Tabla del $tabla </th>";
 
 while ($i <= 10) {
    echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
}
}
?>
</div>

    
</body>
</html>