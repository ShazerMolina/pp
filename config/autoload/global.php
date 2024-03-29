<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    //Array de conexión a la base de datos local
    'db'=>[
      'driver'=>'Pdo_Mysql',
      'database'=>'bd_fhep',
      'charset'>'UTF 8',
      'hostname'=>'localhost:3306',
      'driver_option' => [
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
      ]
    ]
);
