<?php

include("conexion.php");
$con=conectar();

$idfactura=$_POST['id'];
$costo=$_POST['costo'];
$fecha=$_POST['fecha'];
$servicio=$_POST['servicio'];
$vencimiento=$_POST['vencimiento'];

$sql="UPDATE `factura` SET `id`='$idfactura',`costo`='$costo',`fecha`='$fecha',`servicio`='$servicio',`vencimiento`='$vencimiento' WHERE id='$idfactura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>