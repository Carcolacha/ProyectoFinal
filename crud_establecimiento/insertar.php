<?php
include("conexion.php");
$con=conectar();

$idestablecimiento=$_POST['id'];
$nombre=$_POST['nombre'];
$noempleados=$_POST['noempleados'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO `establecimiento`(`id`, `nombre`, `noempleados`, `direccion`, `telefono`) VALUES ('$idestablecimiento','$nombre','$noempleados','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: establecimiento.php");
    
}else {
}
