<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$RFC=$_POST['RFC'];
$CURP=$_POST['CURP'];

$sql="UPDATE `empleado` SET `id`='$idempleado',`nombre`='$nombre',`apellido`='$apellido',`RFC`='$RFC',`CURP`='$CURP' WHERE id='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>