<?php
include 'conexion.php' ;
$nombre=$_POST["nombre"]
$email=$_POST["email"]
$telefono=$_POST["telefono"]

$sql ="INSERT INTO datos(nombre, email, telefono) VALUES ('$nombre','$email', 'telefono')";

if ($conn->query($sql) === TRUE) {
    header("Location: mostrar.php");
} else {
    echo "Error: " .$sql .<br> .$conn->error;
}
$conn->close();
?>