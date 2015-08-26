<?php

include '../libs/dbClass.php';
include '../app/default/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {

    $_SESSION['view']['mensaje'] = 'Hola mundo';
    include '../app/plantilla/view/indexView.php';
  }
  
}
