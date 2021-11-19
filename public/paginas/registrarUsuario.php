<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <title>COMUSOFT | Registrar Usuario</title>
  </head>
  <body>
    <?php
      session_start();
      include "menu.php";
    ?>
    <div class="container" style="margin-top:50px" align="center">
      <h3 class="text-danger">REGISTRO DE USUARIOS</h3>
      <form>
        <div class="card col-6">
          <div class="card-body">
            <div class="mb-3" align="left">
              <a style="color:red" align="left">* </a><label for="exampleInputEmail1" class="form-label">Dirección de correo</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Recuerde que para poder registrarse debe contar con una dirección de correo del dominio institucional @ufps.edu.co.</div>
            </div>
            <div class="mb-3" align="left">
              <a style="color:red" align="left">* </a><label for="exampleInputPassword1" class="form-label">Clave</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3" align="left">
              <a style="color:red" align="left">* </a><label for="exampleInputPassword1" class="form-label">Confirme la clave</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-secondary" onclick="location.href='../../index.php'">CANCELAR</button>
            <button type="submit" class="btn btn-danger " form="login">REGISTRAR</button>
          </div>
        </div>
      </form>
    </div>
    <?php include "footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
