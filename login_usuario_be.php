<?php

session_start();

include 'conexion_be.php';


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

 $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
 correo='$correo' and contrasena='$contrasena'");
 
 if(mysqli_num_rows($validar_login) > 0){
    $_SESION['nombre'] = $correo;
    header("location: ./index.php");
    exit;
 }else{
    echo '
    <script>
    alert("Usuario o contraseña incorrecta");
    window.location = "./login.php"
    </script>
    ';
 }
 exit;
    
 

?>