<?php

include '../libs/db1Class.php';
include '../app/quimioprofilaxis/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['quimioProfilaxis'] = true;
    include '../app/quimioprofilaxis/view/quimioprofilaxisView.php';
  }
  
}
