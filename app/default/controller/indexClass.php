<?php

include '../libs/db1Class.php';
include '../app/default/model/modelClass.php';
include '../libs/db2Class.php';
include '../app/default/model/modelCaliClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['mensaje'] = 'Hola mundo';
    
    modelClass::insertUsuario('andres', md5('sqlx32'));
    
    $objUsuario = modelClass::getAllUsuario();
    $_SESSION['view']['objUsuario'] = $objUsuario;
    $objUsuarioPuntual = modelClass::getUsuarioById(4);
    $_SESSION['view']['objUsuarioPuntual'] = $objUsuarioPuntual;
    include '../app/default/view/indexView.php';
  }
  
}
