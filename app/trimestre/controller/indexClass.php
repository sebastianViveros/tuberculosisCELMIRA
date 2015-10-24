<?php

include '../libs/db1Class.php';
include '../app/trimestre/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['trimestre'] = true;
    include '../app/trimestre/view/trimestreView.php';
  }
  
}
