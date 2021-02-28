
<!DOCTYPE html>
<html lang="es">

<head>
  <title>GAME CENTER</title>
  <link rel="shortcut icon" href="src_img/GC_icono.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="">
  <style>
  body{
    width: 100%;
    margin: 0;
    font-family: Agency FB;
    background: #353534;
  }

  nav{
    width: 100%;
  }

  header{
    width: 100%;
    background: #000000;
  }

  #btn_menu{
    display: none;
  }

  header label img{
    height: 100%;
  }

  header label{
    width: 30px;
    height: 40px;
    padding: 10px;
  }


  header label:hover{
    cursor: pointer;
  }

  .menu ul{
    margin: 0;
    list-style: none;
    padding: 0;
    display: flex;
  }

  .menu li:hover{
    background: #353534;
  }

  .menu li a{
    display: block;
    padding: 20px 20px;
    font-size: 25px;
    color: #F9D56C;
    text-decoration: none;
  }

  main{
    height: 100%;
    width: 92.6%;
    padding: 50px;
    background: #353534;
  }
      header label{
        display: block;
      }

      .menu{
        position:absolute;
        background: #000;
        width: 15%;
        height: 100%;
        margin-left: -30%;
        transition: all 0.5s;
      }

      .menu ul{
        flex-direction: column;
      }

      #btn_menu:checked ~ .menu{
        margin: 0;
      }
      iframe{
        border: 10px;
        margin-top: -20px;
      }

  </style>

</head>

<body>
  <header>
           <input type="checkbox" id="btn_menu">
           <label for="btn_menu"> <img src="src_img/icon_menu.jpg" width="" height = "100%" alt=""></label>
           <nav class="menu">
            <ul>
                <li><a href="src_compras/all_forms_compras.php" target="main_content">VENDER</a></li>
                <li><a href="src_registrar_juegos/all_forms_ps_xbox.php" target="main_content">REGISTRAR JUEGO</a></li>
                <li><a href="src_editar\all_forms_editar.php" target="main_content">EDITAR JUEGO</a></li>
                <li><a href="src_borrar/all_forms_borrar.php" target="main_content">BORRAR JUEGO</a></li>
                <li><a href="src_inventarios\all_inventario_ps_xbox.php" target="main_content">INVENTARIO</a></li>
                <li><a href="src_tablas_ventas\all_ventas_ps_xbox.php" target="main_content">VENTAS</a></li>
                <li><a href="src_borrar_admin\form_borrar_admin.php" target="main_content">GESTIONAR ADMINISTRADORES</a></li>
            </ul>
           </nav>
   </header>

<main>
<iframe src=""  name="main_content" width="100%" height="570x"></iframe>
</main>


</body>

</html>
