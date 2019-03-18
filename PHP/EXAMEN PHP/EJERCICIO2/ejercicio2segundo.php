<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CALCULAR PESO</title>
</head>
<body>
    <?php 
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($referer)) {
		    echo '<p><a href="'. $referer .'" title="Volver">&laquo; Atrás</a></p>';
		} else {
            echo '<p><a href="javascript:history.go(-1)" title="Volver">&laquo; Atrás</a></p>';
		}
    ?>
    <?php
		//CAPTURAR USUARIO Y PASSWORD
        $usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
        if (empty($usuario)) {
		
            header('location: primero.php?error=Campos vacíos');
        } else {
            setcookie ("usuario", $usuario, time()+60*60*24*365);
			//SESSION_START: Con esto iniciamos la sesion del usuario
            session_start();
            $_SESSION['nombreUsuario'] = $usuario;
            ?>
			<!--Este campo en HTML es un formulario con la fecha-->
            <div style="margin: 100 auto; width: 200px">
                <h1>CALCULAR INDICE MASA CORPORAL</h1>
                
<form name='calculo_imc' action='ejercicio2tercero.php' method='GET'>

<b>Peso:</b><input name='peso'  type='text'/>
<br><b>Altura:</b><input name='altura'  type='text'/>


<br><br><input type='submit' value='Calcular'/>

</form>
    <?php
    }
    ?>
</body>
</html>