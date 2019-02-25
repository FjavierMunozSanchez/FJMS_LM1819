<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJERCICIO COOKIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<form action="ecookie.php" enctype="multipart/form-data" method="POST" >

<p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="
        <?php
        if (isset($_COOKIE['email'])){
                echo $_COOKIE['email'];
        }
        ?>
        ">
</p>

<p>
        <label for="password">Contraseña:</label>
        <input type="password" name="contra" id="contra">
</p>

<p>
        <label for="check">¿Desea recordad el email?:</label>
        <input type="checkbox" name="check" id="check">
</p>

<p>
        <input type="submit" value="Enviar">
</p>



</form>



</body>
</html>