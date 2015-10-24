<?php

include '../libs/db1Class.php';
include '../app/login/model/modelClass.php';

/**
 * Description of indexClass
 *
 * @author julianlasso
 */
class indexClass {
  
  public function index() {
    $_SESSION['view']['login'] = true;
    include '../app/login/view/loginView.php';
  }
  
}
