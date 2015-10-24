
<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de Infromación de Tuberculosis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">        
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Inicio de Sesión</div>
            <div class="panel-body">

              <form class="form-horizontal" role="form" action="../app/inicio/view/inicioView.html">


                <div class="form-group">
                  <label class="col-md-4 control-label">USUARIO</label>
                  <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="USUARIO">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">CONTRASEÑA</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Contraseña">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember"> Recordarme
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">Iniciar</button>

                    <a class="btn btn-link" href="">Olvido la contraseña?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>