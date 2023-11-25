<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>

<h1> Formulario de contacto</h1>
<form action="validar.php" method="POST">

    <label for="nombre">nombre</label>
    <input type="text" id= "nombre" name="nombre" required><br><br>
    <label for="email">email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="telefono">telefono:</label>
    <input type="telefono" id= "telefono" name= "telefono" required><br><br>
    <input type="submit" value="Enviar">
    <button><a href="mostrar.php">Mostrar datos</a></button>
    
</form>
</body>
</html>