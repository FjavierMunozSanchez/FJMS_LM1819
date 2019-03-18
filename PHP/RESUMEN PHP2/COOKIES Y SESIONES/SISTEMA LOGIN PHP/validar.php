<?php
 
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
 
if(empty($usuario) || empty($pass)){
header("Location: index.html");
exit();
}
 //CONEXIÓN
mysqli_connect("localhost","root","", "cursophp") or die("Error al conectar " . mysqli_error());
//mysqli_select_db('bdejemplo') or die ("Error al seleccionar la Base de datos: " . mysqli_error());
 //CONSULTA
$result = mysqli_query("SELECT nombre from alumnos where nombre='" . $usuario . "'");
 
if($row = mysqli_fetch_array($result)){
if($row['mail'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header('Location: contenido.php');
}else{
header('Location: formulario.html');
exit();
}
}else{
header('Location: formulario.html');
exit();
}
 
 
?>