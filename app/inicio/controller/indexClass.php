<?php

include '../libs/db1Class.php';
include '../app/inicio/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['inicio'] = true;
    include '../app/inicio/view/inicioView.html';
  }
  
}
