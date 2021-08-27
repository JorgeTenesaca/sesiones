<?php 

SESSION_START();

$nom=$_SESSION['nombre'];

$ape=$_SESSION['apellido'];


echo "Variables de sesion: <br>";
echo "El nombre es : $nom<br> El apellido es : $ape<br>";


?>