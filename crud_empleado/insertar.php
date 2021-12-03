<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$RFC=$_POST['RFC'];
$CURP=$_POST['CURP'];



$sql="INSERT INTO `empleado`(`id`, `nombre`, `apellido`, `RFC`, `CURP`) VALUES ('$idempleado','$nombre','$apellido','$RFC','$CURP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
