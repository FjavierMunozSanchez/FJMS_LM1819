<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJERCICIO 2 COOKIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body
style="background-color: <?php 

if (isset($_COOKIE['color'])) {
    print $_COOKIE['color'];

}
?>">

<!--Un formualrio con radio buton, pagina de cookie-->

<form action="cambiar.php" >
<p>
        Seleccione un fondo de color:
        <input type="radio" value="Red" name="color">
        <input type="radio" value="Blue" name="color">
        <input type="radio" value="Green" name="color">
</p>

<p>
        <input type="submit" value="Enviar">
</p>
</form>
</body>
</html>