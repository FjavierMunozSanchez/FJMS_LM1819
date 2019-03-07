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
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($referer)){
            echo "<p><a href='$referer'>Volver</a></p>";
        } else {
            echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
        }
    
    $usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
    $password = trim(htmlspecialchars($_REQUEST["password"], ENT_QUOTES, "UTF-8"));

// || = OR

    if (empty($usuario) || empty($password)) {
//?error=Debe rellenar los campos&otracosa=Otro Campo
        header('location: primero.php?error=Debe rellenar los campos&otracosa=Otro Campo');

    } else if ($password != "1234") {

        header('location: primero.php?error=Password Incorrecta');

    } else {

        setcookie("usuarioWeb", $usuario, time()+60*60*24*365);

        //Iniciar sesión mostrando la Edad
        session_start();
        $_SESSION['nombreUsuario'] = $usuario;
        ?>
        <div style="margin: 0 auto; width: 20px">
        <form  method="GET" action="tercero.php">
       
        <p>
        <label for="edad">Edad:</label>
        <input type="date" name="edad" id="edad">
    </p>

    <p>
        <input type="submit" value="Enviar"/>

    </p>

        </form>
    </div>


<?php
    }
    
    
    
    
    
    ?>
</body>
</html>