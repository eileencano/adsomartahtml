<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
 
<?php
require 'Conexion.php';

$sql= "SELECT * FROM productos INNER JOIN categoria ON productos.categoria_id=categoria.id_productos;";
$resultado = $conn ->query($sql);
?>

<div>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px "> Mostrar Registros</h1>
</div>

<div class="container">
    
   <a href="index.php" class="btn btn-primary">Agregar Nuevo Registro</a>

    <table class= "table table-bordered">

        <thead class ="table-dark">
            <tr>
                <th scope ="col">producto</th>
                <th scope ="col">precio</th>
                <th scope ="col">descripcion</th>
                <th scope ="col">categoria</th>
            </tr>
        </thead>
        <tbody>
   

    <?php
    while ($fila = $resultado->fetch_assoc()){
    ?>
        <tr>
            <th scope="row"><?php echo $fila ['productos']?></th>
            <th scope="row"><?php echo $fila['precio'] ?></th>
            <th scope="row"><?php echo $fila['descripcion'] ?></th>
            <th scope="row"><?php echo $fila['categoria'] ?></th>

            <th>
                  <a href="editar.php?id=<?php echo $fila['id_productos'] ?>" class="btn btn-warning">Editar</a>
                 <a href="eliminar.php?id=<?php echo $fila['id_productos'] ?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
           </th>

        </tr>

        

    <?php } ?>
    </tbody>
    </table>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
