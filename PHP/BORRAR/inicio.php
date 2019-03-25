<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BORRADO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="borrar.php" methd="POST">
<?php
if (isset($_REQUEST['error'])){

    print "<p style='color: red'>$_REQUEST[error]</p>";
}

?>
    

    <p>
        <label for="email">Email</label>
        <input type="email" name="mail" id="mail">
    </p>

    <p>
        <input type="submit" value="Borrar">

    </p>

    


    </form>
    
</body>
</html>