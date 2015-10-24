<ul class="nav nav-tabs nav-justified">
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['login'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=login&accion=index" role="button" aria-expanded="false">
      Login
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['inicio'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=inicio&accion=index" role="button" aria-expanded="false">
      Inicio
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['libroRegistro'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=libroregistro&accion=index" role="button" aria-expanded="false">
      Libro de registro
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['quimioProfilaxis'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=quimioprofilaxis&accion=index" role="button" aria-expanded="false">
      Quimioprofilaxis
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['trimestre'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=trimestre&accion=index" role="button" aria-expanded="false">
      Trimestre
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['cohorte'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=cohorte&accion=index" role="button" aria-expanded="false">
      Cohorte
    </a>
  </li>
  <li role="presentation" class="dropdown <?php echo (isset($_SESSION['view']['informes'])) ? 'active' : '' ?>">
    <a href="index.php?modulo=informes&accion=index" role="button" aria-expanded="false">
      Informes
    </a>
  </li>
  <li role="presentation" class="dropdown">
    <a href="inicio.html" role="button" aria-expanded="false">
      Cerrar Sesión
    </a>
  </li>
</ul>