<!DOCTYPE html>
<html lang="es-CO" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <meta name="theme-color" content="#ff2e01">

    <!--Tags SEO-->
    <meta name="author" content="un tour por Abejorral">
    <meta name="descripcion" content="Aplicativo para asesorar">
    <meta name="keyworks" content="atractivos, restaurante, hoteles, turismo, WEB APP, web app">

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="../media/logo.png">

    <!--Styles Bootstrap 5.5.1 Alfha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="../assets/css/estilo.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>
   <?php 
   require_once 'conexion.php';

   if(isset($_POST['guardar'])){
    $insert=$conexion->prepare('INSERT INTO usuario (nombre,apellido,correo,clave,celular,tdocumento,documento,genero) VALUES(?,?,?,?,?,?,?,?)');
    
    $insert->bindParam(1,$_POST['nombre']);
    $insert->bindParam(2,$_POST['apellido']);
    $insert->bindParam(3,$_POST['correo']);
    $insert->bindParam(4,$_POST['clave']);
    $insert->bindParam(5,$_POST['celular']);
    $insert->bindParam(6,$_POST['tdocumento']);
    $insert->bindParam(7,$_POST['documento']);
    $insert->bindParam(8,$_POST['genero']);

    if($insert->execute()){
      echo 'Datos registrados';
    }else{
      echo 'Datos no registrados';
    }

   }

   ?>

    <main class="form-signin">
    <h1>¡Registrate!</h1>
    <p>Por favor ingrese la informacion requerida.</p>
    
    <form  action="metho">
      <div class="row">
        <div class="col">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control"  name="nombre" placeholder="Ingrese su nombre" >
        </div>
        <div class="col">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
        </div>
      </div>
      <div class="mb-3">
        <label for="correoelectronico" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electronico" required>
      </div>

      <div class="mb-3">
        <label for="clave" class="form-label">Clave</label>
        <input type="password" class="form-control" name="clave" placeholder="Ingrese su clave"  required>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Celular</label>
        <input type="text" class="form-control"  placeholder="Ingrese su numero de telefono" name="celular" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
      </div>
    
      <select class="form-select mb-3" aria-label="Default select example">
        <option selected>Tipo de documento</option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula extranjera</option>
        <option value="4">otra</option>
      </select>
    
      <div class="mb-3">
        <label for="documento" class="form-label">Documento</label>
        <input type="text" class="form-control" name="documento" placeholder="Ingrese su numero de documento" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
      </div> 
    
      <select class="form-select mb-3" aria-label="Default select example">
        <option selected>Genero</option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">otro</option>
      </select>
  
      <div class="row">
        <button type="submit" class="col-2 btn btn-dark m-3 " name="guardar">Registrarse</button>
        <a href="ingresar.html" class="col-2 btn btn-dark m-3 " role="button">Atras </a>
      </div>
    </form>
  </main>
  
  

</body>
</html>