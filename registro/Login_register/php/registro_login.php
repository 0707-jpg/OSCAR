<?php
include 'conexion.php';

$Nombre_completo = $_POST['Nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(Nombre_completo, correo, usuario, contrasena) 
VALUES ('$Nombre_completo','$correo','$usuario','$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar){
    header('location: ../index.php');
    echo '
    <script>
    alert("Usuario Almacenado exitosamente);
    window.location = "../index.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Intentalo de nuevo, Usuario no Almacenado);
    window.location = "../index.php";
    </script>   
    ';
}
mysqli_close($conexion);

?>