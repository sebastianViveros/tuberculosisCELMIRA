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
class listaClass {
  
  public function lista() {
    $_SESSION['view']['mensaje'] = 'Hola Viejo Celmira';
    include '../app/default/view/listaView.php';
  }
  
}
