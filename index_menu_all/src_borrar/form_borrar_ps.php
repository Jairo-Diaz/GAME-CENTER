<?PHP
INCLUDE ("basedata_conexion.php");
$consulta_datos_select = mysqli_query($mysqli,"SELECT *  FROM inventario_ps");
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
  <form action="" method="post">
   <a><br><CENTER>ELIMINAR JUEGO PLAY STATION 5<CENTER><br></a>

  <select name= "dato">
     <?php
         while($datos = mysqli_fetch_array($consulta_datos_select))
         {
     ?>
             <option value="<?php echo $datos['id_producto']?>"> <?php echo $datos['juego_nombre']?> </option>
     <?php
         }
     ?>
   </select>

     <P><input type="checkbox" class="ch" required name="terms" name="" value=""> SEGURO QUE  QUIERES BORRA EL REGISTRO</P>

             <input class="botons" type="submit" value="ELIMINAR">
              </form>
</section>

</body>

</html>
<center>

<?php   if(isset($_POST['dato']))
  {

      $id_producto=$_POST['dato'];

      if ($_POST){
        mysqli_query($mysqli,"DELETE FROM inventario_ps WHERE id_producto='$id_producto'");
      }

}
  ?>


  <?php


   ?>
