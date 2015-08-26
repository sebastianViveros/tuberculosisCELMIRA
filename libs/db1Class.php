<?php

/**
 * Description of dbClass
 *
 * @author julianlasso
 */
class db1Class {

  static private $host = 'localhost';
  static private $user = 'postgres';
  static private $pass = '123';
  static private $port = 5432;
  static private $driver = 'pgsql';
  static private $db = 'tuberculosis';
  static private $instancia = null;

  /**
   * 
   * @return PDO
   */
  static public function conectar() {
    if (self::$instancia === null) {
      self::$instancia = new PDO(self::$driver . ':host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$db, self::$user, self::$pass);
      // PDO::ATTR_ERRMODE: Reporte de errores
      // PDO::ERRMODE_EXCEPTION: Lanza exceptions.
      self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instancia;
  }

}
