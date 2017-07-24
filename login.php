<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesion</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="assets/css/style-login.css">

  
</head>

<body>
  <div class="login-form">
     <h1>Cluster Impulsar</h1>
     <div class="form-group ">
         <form action='../Impulsar/Control/TLogin.php' method='POST'>
             <input type="text" class="form-control" placeholder="Usuario " id="usuario" name="usuario">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
         <input type="password" class="form-control" placeholder="Contraseña" id="pass" name="pass">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Datos Incorrectos</span>
    
     <button type="submit" class="log-btn" value="Ingresar"  name="OK">Iniciar</button>
     </form>
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="assets/js/index.js"></script>

</body>
</html>
