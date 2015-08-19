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
    $objUsuario = modelClass::getAllUsuario();
    $_SESSION['view']['objUsuario'] = $objUsuario;
    include '../app/default/view/indexView.php';
  }
  
}
