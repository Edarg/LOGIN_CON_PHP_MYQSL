<?php

include('connection.php');
$con = connection();


$usuarios = $_POST['user'];
$credencial = $_POST['pass'];


$sql = "SELECT * FROM sesion WHERE usuario = '$usuarios' and password = '$credencial'";
$query = mysqli_query($con, $sql);

if($dato = $query -> fetch_object()){
    Header("Location: inicio.php");
}else{
    Header("Location: denegado.php");
}





?>



