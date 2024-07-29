<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre, correo, contrasena) 
          VALUES('$nombre', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);


if($ejecutar) {
    echo '
     <script>
          alert("Usuario almacenado exitosamente"); 
          window.location = "./index.php";
     </script>
   ';
}else{
    echo '
      <script>
           alert("Error, intentalo nuevamente"); 
           window. location = "./index.php";
      </script>
    ';
}

mysqli_close($conexion);


?>