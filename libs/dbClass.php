<?php

/**
 * Description of dbClass
 *
 * @author julianlasso
 */
class dbClass {

  static private $host = 'localhost';
  static private $user = 'postgres';
  static private $pass = 'sqlx32';
  static private $port = 5432;
  static private $driver = 'pgsql';
  static private $db = 'soho_framework';
  static private $instancia = null;

  /**
   * 
   * @return PDO
   */
  static public function conectar() {
    if (self::$instancia === null) {
      self::$instancia = new PDO(
              self::$driver . ':host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$db, self::$user, self::$pass);
      // PDO::ATTR_ERRMODE: Reporte de errores
      // PDO::ERRMODE_EXCEPTION: Lanza exceptions.
      self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instancia;
  }

}
