<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT `id`, `costo`, `fecha`, `servicio`, `vencimiento` FROM `factura` WHERE 1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Boletos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID de Factura">
                                    <input type="text" class="form-control mb-3" name="costo" placeholder="Costo">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio">
                                    <input type="text" class="form-control mb-3" name="vencimiento" placeholder="Fecha de Vencimiento">

                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>ID de Factura</th>
                                        <th>Costo</th>
                                        <th>Fecha</th>
                                        <th>Servicio</th>
                                        <th>Fecha de Vencimiento</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['costo']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['servicio']?></th>
                                                <th><?php  echo $row['vencimiento']?></th>

                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>