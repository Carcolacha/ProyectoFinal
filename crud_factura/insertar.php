<?php
include("conexion.php");
$con=conectar();

$idfactura=$_POST['id'];
$costo=$_POST['costo'];
$fecha=$_POST['fecha'];
$servicio=$_POST['servicio'];
$vencimiento=$_POST['vencimiento'];



$sql="INSERT INTO `factura`(`id`, `costo`, `fecha`, `servicio`, `vencimiento`) VALUES ('$idfactura','$costo','$fecha','$servicio','$vencimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: factura.php");
    
}else {
}
