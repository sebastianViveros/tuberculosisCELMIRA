<?php

/**
 * Description of modelClass
 *
 * @author julianlasso
 */
class modelClass extends dbClass {
  
  static public function getAllUsuario() {
    $sql = 'SELECT id, user_name FROM usuario WHERE deleted_at IS NULL';
    $consulta = self::conectar()->prepare($sql);
    $consulta->execute();
    $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $respuesta;
  }
  
}
