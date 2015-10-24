<?php

include '../libs/db1Class.php';
include '../app/informes/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['informes'] = true;
    include '../app/informes/view/informesView.php';
  }
  
}
