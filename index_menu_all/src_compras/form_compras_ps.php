<?PHP
INCLUDE ("basedata_conexion.php");
$consulta_datos_select = mysqli_query($mysqli,"SELECT *  FROM inventario_ps");
$consulta_datos_select1 = mysqli_query($mysqli,"SELECT *  FROM administradores");
?>


<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}
h4{
  font-family: Agency FB;
}
.form-register {
  width: 80%;
  height: 90%;
  background: #353534;
  padding: 30px;
  margin: auto;
  border-radius: 4px;
  font-family: Agency FB;
  color: #F9D56C;
}

.form-register h4{
  font-size: 14px;
  margin-bottom: 20px;
}

.controls{
width: 80%;
height: 12%;
background: #000;
padding:  10px;
border-radius: 4px;
margin-bottom: 16px;
border: 2px solid #F9D56C;
font-family: Agency FB;
font-size: 15px;
color: #fff;
}


.form-register p {
height: 40px;
text-align: center;
font-size: 11px;
line-height: 40px;
}


.form-register a {
color: #F9D56C;
text-decoration: none;
font-size: 30px;
}

.form-register a:hover {
color: #F9D56C;
text-decoration: underline;
}



.form-register .botons{
  font-family: Agency FB;
  width: 80%;
  height: 15%;
  padding: 8px;
 margin-top: 10px;
  font-size: 17px;
  background: #F9D56C;
  border: none;
  color: #353534;

}

select option :hover{
  text-decoration: #B2FEED;
}

select{
  background: #000;
  border: 2px solid #F9D56C;
  width: 80%;
  height: 12%;
  margin-bottom: 20px;
  font-family: Agency FB;
  font-size: 15px;
  color: #fff;
}

</style>

</head>

<body>

<section Class="form-register">
  <form action="form_compras_ps.php" method="post">
   <a><br><CENTER>JUEGOS PLAY STATION 5<CENTER><br></a>

     <select name= "dato1">

       <?php
           while($datos = mysqli_fetch_array($consulta_datos_select1))
           {
       ?>
               <option value="<?php echo $datos['id_admin']?>"> <?php echo $datos['nombre_admin']?> </option>
       <?php
           }
       ?>
     </select>

   <select name= "dato">

     <?php
         while($datos = mysqli_fetch_array($consulta_datos_select))
         {
     ?>
             <option value="<?php echo $datos['id_producto']?>"> <?php echo $datos['juego_nombre'] . " - $" . $datos['juego_precio'] . ".00 MXN" ?> </option>
     <?php
         }
     ?>
   </select>

     <input class="controls" type="number" name="unidades" placeholder="UNIDADES">

             <input class="botons" type="submit" value="Registrar">
              </form>
</section>

</body>

</html>
<center>

<?php   if(isset($_POST['dato']))
  {

      $id_producto=$_POST['dato'];
      $id_admin=$_POST['dato1'];
      $consulta_datos_inventario = mysqli_query($mysqli,"SELECT *  FROM inventario_ps where id_producto = $id_producto");
      $dato_inventario_sql = mysqli_fetch_array($consulta_datos_inventario);

      $consulta_datos_admin = mysqli_query($mysqli,"SELECT *  FROM administradores where id_admin = $id_admin");
      $dato_admin_sql = mysqli_fetch_array($consulta_datos_admin);

      $nombre_admin=$dato_admin_sql['nombre_admin'];

      $dato_precio = $dato_inventario_sql['juego_precio'];
      $dato_unidades_existentes = $dato_inventario_sql['unidades_existentes'];
      $dato_nombre_juego = $dato_inventario_sql['juego_nombre'];
      $unidades_a_comprar = $_POST['unidades'];

}
  ?>


  <?php
if ($_POST){
  if($unidades_a_comprar<=$dato_unidades_existentes){

  $unidades_resultantes = $dato_unidades_existentes - $unidades_a_comprar;
    settype($unidades_resultantes, "integer");

  mysqli_query($mysqli, "UPDATE inventario_ps SET unidades_existentes=$unidades_resultantes WHERE id_producto = $id_producto");

  $registro_compra = "INSERT INTO compras_ps (id_compra, id_admin, nombre_admin, juego_nombre, juego_precio, unidades_a_comprar, id_producto) VALUES ('','$id_admin','$nombre_admin','$dato_nombre_juego','$dato_precio','$unidades_a_comprar','$id_producto')";


  if (mysqli_query($mysqli, $registro_compra)) {
        echo "<script>alert('VENTA REGISTRADA - INVENTARIO ACTUALIZADO');</script>";
  } else {
          echo "Error: " . $registro_compra . "<br>" . mysqli_error($mysqli);
  }

  }else{
  echo "<script>alert('NO HAY UNIDADES SUFIENTES');</script>";
  }
}
   ?>
