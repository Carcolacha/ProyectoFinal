<?php

include("conexion.php");
$con=conectar();

$idestablecimiento=$_POST['id'];
$nombre=$_POST['nombre'];
$noempleados=$_POST['noempleados'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql="UPDATE `establecimiento` SET `id`='$idestablecimiento',`nombre`='$nombre',`noempleados`='$noempleados',`direccion`='$direccion',`telefono`='$telefono' WHERE id='$idestablecimiento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: establecimiento.php");
    }
?>