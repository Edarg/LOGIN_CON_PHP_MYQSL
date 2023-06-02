<?php

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>Inicio de sesion</h1>
    <div class="container">
        <div class="logo">
            <img class="logo_img" src="img/chamoy.jpg" alt="">
        </div>


        <form action="validar.php" class="form" method = "POST">
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario" name = "user">
            </div>
            <div class="form__clave">
                <label for="">Contraseña</label>
                <input id="clave" type="password" class="clave" name="pass">
                <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
            </div>
            <div class="form__boton">              
                <input type="submit" value="Ingresar" class = "boton">
            </div>
        </form>


    </div>
    <script src="js/main.js"></script>
</body>

</html>