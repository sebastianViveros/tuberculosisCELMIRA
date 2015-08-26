<?php

include '../libs/db1Class.php';
include '../app/libroregistro/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['libroRegistro'] = true;
    include '../app/libroregistro/view/libroregistroView.php';
  }
  
}
