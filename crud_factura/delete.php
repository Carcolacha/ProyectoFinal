<?php

include("conexion.php");
$con=conectar();

$idfactura=$_GET['id'];

$sql="DELETE FROM `boletos` WHERE id='$idfactura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
