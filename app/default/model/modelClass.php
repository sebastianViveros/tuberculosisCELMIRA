<?php

/**
 * Description of modelClass
 *
 * @author julianlasso
 */
class modelClass extends db1Class {
  
  static public function insertUsuario($usuario, $password) {
    $sql = 'INSERT INTO usuario (user_name, password) VALUES (:usuario, :password)';
    $params = array(
        ':usuario' => $usuario,
        ':password' => $password
    );
    $consulta = self::conectar()->prepare($sql);
    $consulta->execute($params);
    return true;
  }
  
  static public function getAllUsuario() {
    $sql = 'SELECT id, user_name FROM usuario WHERE deleted_at IS NULL';
    $consulta = self::conectar()->prepare($sql);
    $consulta->execute();
    $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $respuesta;
  }
  
  static public function getUsuarioById($id) {
    $sql = 'SELECT id, user_name FROM usuario WHERE deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => $id
    );
    $consulta = self::conectar()->prepare($sql);
    $consulta->execute($params);
    $respuesta = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $respuesta;
  }
  
}
