<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <title>COMUSOFT | Crear Asignatura</title>
  </head>
  <body>
    <?php include "menu.php"; ?>
    <div class="container" align="center" style="margin-top:50px">
      <h1>CREAR NUEVA ASIGNATURA</h1>
      <div class="alert alert-info">
        Para crear una nueva asignatura ingrese los datos solicitados y luego de clic en guardar.
      </div>
      <form class="" action="../../app/control/crearAsignatura.php" method="post" name="nuevaAsignatura" id="nuevaAsignatura">
        <div class="card">
          <div class="card-body">
            <div class="form-group" align="left">
              <a style="color:red" align="left">* </a><label >Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="form-group" align="left">
              <a style="color:red" align="left">* </a><label >Código</label>
              <input type="text" class="form-control" name="codigo" id="codigo" required>
            </div>
            <div class="form-group" align="left">
              <a style="color:red" align="left">* </a><label >Semestre</label>
              <input type="number" min="1" max="10" class="form-control" name="semestre" id="semestre" required>
            </div>
            <div class="form-group" align="left">
              <a style="color:red" align="left">* </a><label >Descripción</label>
              <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="form-control" required>
              </textarea>
            </div>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger" onclick="location.href='../../index.php'">CANCELAR</button>
            <button type="submit" class="btn btn-success " form="nuevaAsignatura">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  </body>
</html>
