<?php

include("conexion.php");
$con=conectar();

$idestablecimiento=$_GET['id'];

$sql="DELETE FROM `boletos` WHERE id='$idestablecimiento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: establecimiento.php");
    }
?>
