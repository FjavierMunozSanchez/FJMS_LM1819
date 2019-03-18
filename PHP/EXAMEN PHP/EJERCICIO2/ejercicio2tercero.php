<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESULTADO</title>
</head>
<body>

<?php


  echo "<center>";   
  echo "<br><br><br><br>"; 

   $peso=$_GET["peso"];   
   $altura=$_GET["altura"];

   echo "<b>El peso es:</b> $peso
   <br><b>La Altura es:</b>  $altura";


   $IMC=($peso/($altura*$altura))*10000;  

   echo "<br><b>Tu IMC es:</b> ".$IMC;

 if ($IMC<16) { $ESCALA="Estas muy delgado";}
 if (($IMC>=16)&&($IMC<17) ){ $ESCALA="Sigues estando delgado pero menos";}
 if (($IMC>=17)&&($IMC<18.5) ){ $ESCALA="Delgadez aceptable";}
 if (($IMC>=18.5)&&($IMC<25) ){ $ESCALA="Peso normal";}
 if (($IMC>=25)&&($IMC<30) ){ $ESCALA="Obeso moderado";}
 if (($IMC>=30)&&($IMC<35) ){ $ESCALA="Bbesidad alta";}
 if (($IMC>=35)&&($IMC<40) ){ $ESCALA="Obesidad muy alta";}
 if ($IMC>=40){ $ESCALA="Obesidad extrema";}

  echo "<br><b>Escala: </b>$ESCALA";   
  

  echo "</center>";

?> 
</body>
</html>