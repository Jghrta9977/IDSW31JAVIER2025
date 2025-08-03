<?php

$mensaje="Hola mundo";

echo $mensaje."hoy es ".date('Y-m-d');


if(isset($_POST['logear'])){

    if(!empty($_POST['nombre']) && !empty($_POST['contrasena'])){
        $name=$_POST['nombre'];
        $contra=$_POST['contrasena'];
        if($name=="javier"&& $contrasena=="123"){
            echo "bienbenido";
    
        }
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Formulario</h2>

<form  method="POST">
    <br>
    <h2>LOGIN</h2>
<br>
<label for="nombre">nombre</label>
<br>
<input type="text" name="nombre" id="nombre">
<br>
<label for="contrasena">Contrasena</label>
<br>
<input type="password" name="contrasena" id="contrasena">
<br>
<button name="logear">Login</button>

</form>
    
</body>
</html>