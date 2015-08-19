<?php
// http://localhost/tuberculosisCELMIRA/web/index.php?modulo=default&accion=index
try {
  session_start();

  $modulo = filter_input(INPUT_GET, 'modulo');
  $accion = filter_input(INPUT_GET, 'accion');

  include '../app/' . $modulo . '/controller/' . $accion . 'Class.php';
  $accionClass = $accion . 'Class';

  $controller = new $accionClass();
  $controller->$accion();
} catch (PDOException $exc) {
  echo $exc->getTraceAsString();
} finally {
  unset($_SESSION['view']);
}