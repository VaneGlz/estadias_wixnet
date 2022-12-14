<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recibir datos </title>
</head>
    <body>
        <h3>Recibir datos del formulario.</h3>
    <p>
<?php
	if (($_POST['usuario'])=="") {
         echo "Debes escribir tu usuario";
    } 
    else{
        $alfanum = "/^[a-zA-Z\s]+$/";
        if  (!preg_match($alfanum, $_POST["usuario"])) 
		      {
		      echo "Debes escribir tu usuario solo con letras.";
		      } 
		   else {
             $numeros = "/^[[:digit:]]+$/";
             // Comprueba que la clave son números
             if  (preg_match($numeros, $_POST["clave"])) {
                echo " Clave correcta <b>".$_POST["clave"]."</b> para el usuario: ". $_POST['usuario'];
                } 
             else {
                echo " La clave <b>".$_POST["clave"]."</b> es incorrecta para el usuario: ". $_POST['usuario'];
             }
        }
    }
?>
</p>
<button onclick="goBack()">Volver</button>
<script> function goBack() { window.history.back(); }</script>
</body>
</html>