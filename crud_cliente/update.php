<?php

include("conexion.php");
$con=conectar();

$idcliente=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$zona=$_POST['zona'];
$direccion=$_POST['direccion'];
$vencimiento=$_POST['vencimiento'];


$sql="UPDATE `cliente` SET `id`='$idcliente',`nombre`='$nombre',`apellido`='$apellido',`zona`='$zona',`direccion`='$direccion',`vencimiento`='$vencimiento' WHERE id='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>