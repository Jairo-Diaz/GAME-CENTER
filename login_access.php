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
  header("location:index_menu_all/index_menu.php");

}else{
   ?>
   <?php
   include("index_login.php");
   ?>
   <h1 class="bad"> <script>alert('ERROR: VERFICA LOS CAMPOS');</script></h1>
   <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
