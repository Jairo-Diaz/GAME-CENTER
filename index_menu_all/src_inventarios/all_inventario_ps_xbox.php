<style>

    *{
    padding: 0;
    margin: 0;
    }
    body{
    background-color: #F9D56C;
    }
    #contenedor{
    width: 100%;
    margin: auto;
    }

    main
    {
    margin: 3px;
    margin-left: 0px;
    height: 65px;
    width: 100%;
    background-color: #F9D56C;
    color: #333333;
    font-family: fantasy;
    font-size: 20px;
    text-align: center;
    }

   body{
     background-color: #353534;
   }

    section
    {
    float: left;
    width: 320px;
    height: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 5PX;
    background-color: #B2FEED;
    text-align: justify;
    color: white;
    }

    aside{
    margin: auto;
    margin-bottom: 10px;
    text-align: center;
    color: white;
    font-family: fantasy;
    font-size: 10px;
    margin-top: 5px;
    float: left;
    width: 320px;
    height: 100%;
    margin-left: 5px;
    margin-right: 5PX;
    background-color: #B2FEED;
    }

    footer
    {
    padding-top: 16px;
    padding-bottom: 16px;
    font-size: 16px;
    clear: both;
    width: 100%;
    background-color: #AAFAC7;
    text-align: center;
    color: #434443;
    line-height:30px;
    font-familyS: fantasy;
    }

    table a{
    font-family: fantasy;
    color: #333333;

    }
    table{

      font-size: 15px;
    }
    tr:nth-child(even) {background-color: #616060;}

    tr:hover td{background-color: #F9D56C;
      color: #353534;
    }

    table td tr {
    border-collapse: collapse;
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }

 table TD{
   padding: 5PX;
   font-family: agency fb;
   font-size: 15px;
   color: #F9D56C;
 }
    center table a{
      font-family: fantasy;
      color: #333333;
    color: #434443;
    }

b{
  font-family: agency fb;
  font-size: 30px;
  color: #F9D56C;
}

</style>



<?PHP
INCLUDE ("basedata_conexion.php");
?>

<center>
<br><br><BR><BR>
<b>
VENTAS PLAY STATION 5
 </b>
<BR><BR><BR><BR>
<table >
  <tr>
    <td>ID PRODUCTO</td>
    <td>JUEGO</td>
    <td>PRECIO</td>
    <td>UNIDADES EXISTENTES</td>
    <td>CLASIFICACION</td>
  </tr>

  <?php
  $t=0;
  $sql = "SELECT * from inventario_ps";
  $result=mysqli_query($mysqli,$sql);

  while($registro=mysqli_fetch_array($result)){
   ?>


  <tr>
    <td><?php echo $registro['id_producto']  ?></td>
    <td><?php echo $registro['juego_nombre']?></td>
    <td><?php echo "$ " .  $registro['juego_precio'] . " MXN"?></td>
    <td><?php echo $registro['unidades_existentes'] ?></td>
    <td><?php echo $registro['clasificacion']  ?></td>

  </tr>

<?php
}
 ?>



</table>

  <center>
  <br><br><BR><BR>
  <b>
  VENTAS XBOX SERIES X
   </b>
  <BR><BR><BR><BR>
  <table >
    <tr>
      <td>ID PRODUCTO</td>
      <td>JUEGO</td>
      <td>PRECIO</td>
      <td>UNIDADES EXISTENTES</td>
      <td>CLASIFICACION</td>
    </tr>

    <?php
    $t=0;
    $sql = "SELECT * from inventario_xbox";
    $result=mysqli_query($mysqli,$sql);

    while($registro=mysqli_fetch_array($result)){
     ?>


    <tr>
      <td><?php echo $registro['id_producto']  ?></td>
      <td><?php echo $registro['juego_nombre']?></td>
      <td><?php echo "$ " .  $registro['juego_precio'] . " MXN"?></td>
      <td><?php echo $registro['unidades_existentes'] ?></td>
      <td><?php echo $registro['clasificacion']  ?></td>

    </tr>

  <?php
  }
   ?>

  </table>
