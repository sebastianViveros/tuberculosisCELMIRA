<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php echo $_SESSION['view']['mensaje'] ?>
    <br>
    <ol>
      <?php foreach ($_SESSION['view']['objUsuario'] as $usuario): ?>
      <li><?php echo $usuario->id ?> - <?php echo $usuario->user_name ?></li>
      <?php endforeach ?>
    </ol>
    <pre>
    <?php print_r($_SESSION['view']['objUsuario']) ?>

    <?php print_r($_SESSION['view']['objUsuarioPuntual']) ?>
    </pre>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
