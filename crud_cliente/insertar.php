<?php
include("conexion.php");
$con=conectar();

$idcliente=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$zona=$_POST['zona'];
$direccion=$_POST['direccion'];
$vencimiento=$_POST['vencimiento'];


$sql="INSERT INTO `cliente`(`id`, `nombre`, `apellido`, `zona`, `direccion`, `vencimiento`) VALUES ('$idcliente','$nombre','$apellido','$zona','$direccion','$vencimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
