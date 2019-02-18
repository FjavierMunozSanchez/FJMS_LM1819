<?php

$email = trin(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$confir = trin(htmlspecialchars($_REQUEST["confir"], ENT_QUOTES, "UTF-8"));
$noticias = trin(htmlspecialchars($_REQUEST["noticias"], ENT_QUOTES, "UTF-8"));

if (filter_var($email, FILTER_VALIDATE_EMAIL)){

    print "Error en el email";

else if (filter_var($confir, FILTER_VALIDATE_EMAIL)) {

    print "Error en el email de confirmacion";    
}

else if ($email != $confir) {

    print "Debe conicidir el email de confirmacion";    
}

else if ($noticias == -1) {

    print "Debes indicar si desea o no recibir noticias";    
}

else {
    if ($noticias == 0) {

        print "su correro $email no va a recibir noticias";

    }
else {

    print "Su correo $email va a recibir noticias";
}

    print "Debes indicar si desea o no recibir noticias";    
}


}

?>