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
<div>
<body>

<div style="margin: 0 auto; width: 20px">

<?php
if (isset($_REQUEST["error"])) {
print "<p style='color: red'>".$_REQUEST['error']."</p>";
}


?>



</div>

    <form method="POST" ACTION="segundo.php">
        
        <p>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="<?php
        
        if (isset($_COOKIE["usuaioWeb"])) {
            echo $_COOKIE["usuarioWeb"];
        }
        ?>
        
        
        "/>
        </p>

        <p>
         <label for="password">Contraseña</label>
        <input type="password" name="password" id="password"/>
        </p>

        <p>
            <input type="submit" value="Enviar"/>
        </p>




    </form>
    
</body>
</div>
</html>