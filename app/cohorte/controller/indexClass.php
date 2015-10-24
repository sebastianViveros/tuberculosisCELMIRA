<?php

include '../libs/db1Class.php';
include '../app/cohorte/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['cohorte'] = true;
    include '../app/cohorte/view/cohorteView.php';
  }
  
}
