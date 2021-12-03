<?php

include("conexion.php");
$con=conectar();

$idcliente=$_GET['id'];

$sql="DELETE FROM `empleado` WHERE id='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
