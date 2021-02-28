<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=2.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Agregar</title>
      <link rel="shortcut icon" href="src_img/GC_icono.png">
      <style>

      body{
        padding: 0;
        background: #353534;
      }
      aside{
        width: 55%;
        float: right;
        align-content: center;
      }
      aside img{
        margin-left: 130px;
        margin-right: 130px;
        margin-top: -60px;

      }
      section {
        width: 45%;
        float: left;
        font-family: Agency FB;
        font-size: 30px;
        background: #353534;
        color:  #F9D56C;
        align-items: center;
        margin-top: 40px;
      }
       .register{
         padding-bottom: 10px;
      text-align: center;
      font-size: 14px;
      line-height: 40px;
      margin-bottom:  20px;
      }


      .register{
      color: #F9D56C;
      text-decoration: none;
      }

      .register:hover{
      color: #F9D56C;
      text-decoration: underline;
      }

      .controls  {

      width: 50%;
      border: 0.7px solid #F9D56C;
      margin-bottom: 15px;
      padding: 11px 10px;
      background: #000;
      font-size: 20PX;
      font-family: Agency FB;
      color: #FFF;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
      }

      .buttons{
      width: 55%;
      margin-top: 15px;
      height: 40px;
      background: #F9D56C;
      border: none;
      color: #353534;
      margin-bottom: 16px;
      }


      </style>
    	<title>Login</title>
    </head>

    <body>
      <aside class="">
        <img src="src_img/GC_icono.png" width="60%"height="">
      </aside>


      <section class="Login">
        <center>
          <form action="new_admin_register_access.php" method="post">
          <p>ADMINISTRADOR</p>
          <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
	        <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
          <p>NUEVO ADMINISTRADOR</p>

	        <input class="controls" type="text" name="new_usuario" value="" placeholder="Usuario">
	        <input class="controls" type="password" name="new_contraseña" value="" placeholder="Contraseña">

          <br><a class="register" href="index_login.php">INICIAR SESION</a> <br>
	        <a href="index_menu_all/index_menu.html"> <input class="buttons" type="submit" name="" value="Ingresar" ></a>
        </form>
        </center>
      </section>


    </body>
</html>
