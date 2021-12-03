<?php
include("conexion.php");
$con = conectar();

$idcliente=$_GET['id'];

$sql = "SELECT `id`, `nombre`, `apellido`, `zona`, `direccion`, `vencimiento` FROM `cliente` WHERE id='$idcliente'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">
            <input type="text" class="form-control mb-3" name="zona" placeholder="Zona" value="<?php echo $row['zona']  ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
            <input type="text" class="form-control mb-3" name="vencimiento" placeholder="Fecha de Vencimiento" value="<?php echo $row['vencimiento']  ?>">


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>