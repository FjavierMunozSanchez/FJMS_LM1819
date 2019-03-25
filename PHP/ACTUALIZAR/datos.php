<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$conexion=mysqli_connect("localhost","root","","cursophp") or die("Problemas con la conexión");
$registro = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail like '$email'");

if ($reg=mysqli_fetch_array($registro)){
    ?>
    
    <form action="actualizar.php" method="POST">
        <label for="email"></label>
        <input type="hidden" name="identificador" id="identificador"
        <?php echo $reg['idAlumno']?>">
        
        <p>
        <label for="nombre">Nombre</label>
        <input type"text" name="nombre" id="nombre"
            value="<?php echo $reg['nombre']; ?>">
        </p>

        <p>
        <label for="email">Email</label>
        <input type"email" name="email" id="email"
            value="<?php echo $reg['mail']; ?>"readonly>
        </p>

        <p>
        <label for="curso">Curso</label>
        <select name="curso" id="curso">
        <input type"email" name="curso" id="curso">
        <?php
        $regcursos= mysqli_query($conexion, "SELECT * FROM curso")
            or die("Problemas con la conexión");
            while ($regc=mysqli_fetch_array($regcurso)){
                if ($regc[idCurso] == $reg['codigocurso']) {
                echo "<option value='$regc[idCurso]' selected>$regc[nombreCurso]</option>";
                }else {
                echo "<option value='$regc[idCurso]'>$regc[nombreCurso]</option>";
            }
        }
        ?>
        </select>
        </p>

</body>
</html>