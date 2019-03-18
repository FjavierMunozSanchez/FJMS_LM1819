<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USUARIO</title>
</head>
<body>
    <div style="margin: 0 auto; width: 100px">
        <div>
            <?php
			//COMPROBAR SI LA VARIABLE ERROR ESTA DEFINIDA
			//IF: Si está establecido (ISSET) un valor (ERROR)
                if (isset($_REQUEST["error"])) {
                    print "<p style='color: red'> $_REQUEST[error] </p>";
                }
            ?>
        </div>
        <h1>LOGIN</h1>
        <form action="ejercicio2segundo.php" method="POST">
            <p>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" value="
                    <?php
					//En este IF vamos a comprobar los usuarios del array COOKIE con su tiempo de expiracion.
                        if (isset($_COOKIE['usuario'])) {
                            echo $_COOKIE['usuario'];
                        }
                    ?>">
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    </div>
</body>
</html>