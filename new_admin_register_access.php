<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root","","proyecto_game_center");

$consulta="SELECT * FROM administradores WHERE nombre_admin='$usuario' and password_admin='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
 $new_user=$_POST['new_usuario'];
 $new_password=$_POST['new_contraseña'];

 $sql = "INSERT INTO administradores (id_admin, nombre_admin, password_admin) VALUES ('','$new_user', '$new_password')";
 echo "<script>alert('REGISTRADO');</script>";
 if (mysqli_query($conexion, $sql)) {

      header("location:index_login.php");
 } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
 }



}else{
   ?>
   <?php
   include("register_admin.php");
   ?>
   <h1 class="bad"> <script>alert('ERROR: VERFICA LOS CAMPOS');</script></h1>
   <?php
}
