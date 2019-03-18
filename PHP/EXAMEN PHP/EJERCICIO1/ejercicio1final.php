<html>
<head><title>Área del rectangulo</title></head>
<body>
<h2>Resultado: Área del rectangulo</h2>
<p>
<?php
//Extrayendo los imputs del formulario
 extract($_REQUEST, EXTR_SKIP); 

 $result = $base * $altura;
 print "$result = $base * $altura <br>";
?>
</body>
</html>