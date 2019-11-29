<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso al sistema</title>

    <style>

    body {
        background-image: url("fondo_botica.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    h1{
        text-align: center;
        font-family: Georgia;
        color: #f3ff32;
        text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
    }
    
    table{
        background-color: #797c7e;
        padding: 5px;
        border: black 2px solid;
        border-radius: 2px 2px;
        font-family: Georgia;
    }

    .no_validado {
        font-size: 18px;
        color: #ff0000;
        font-family: Georgia;
        text-shadow: 2px 0 0 white, -2px 0 0 white, 0 2px 0 white, 0 -2px 0 white, 1px 1px white, -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white;
    }

    .validado {
        font-size: 18px;
        color: black;
        font-family: Georgia;
        text-shadow: 2px 0 0 white, -2px 0 0 white, 0 2px 0 white, 0 -2px 0 white, 1px 1px white, -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white;
        
    </style>

</head>
<body>
    
<h1>PROYECTO BOTICA FISI</h1>

<form action "" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align ="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><label for="contra_usuario"></label>
            <input type="password" name="contra_usuario" id="contra_usuario"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Validar"></td>
        </tr>
    </table>
</form>

<?php

    if(isset($_POST["enviando"])){

        $usuario=$_POST["nombre_usuario"];
        $contra=$_POST["contra_usuario"];

        if($usuario=="ADMIN01" && $contra == 1234){

            //echo "<p class='validado'align='center'>Acceso permitido</p>";
            echo "<p class='validado' align='center'><a href='index.php'>INGRESAR</a></p>";

        } else {
            
            echo "<p class='no_validado'align='center'><b>ACCESO DENEGADO</b></p>";
        }

    }

?>

</body>
</html>