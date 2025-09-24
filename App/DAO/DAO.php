<?php

namespace App\DAO;

use PDO;

abstract class DAO extends PDO
{
    protected static $conexao = null;

    public function __construct()
    {
        // mysql:host=localhost:3307;dbname=biblioteca
        $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" 
             . $_ENV['DB_NAME'];

        if (self::$conexao == null) 
        {
            self::$conexao = new PDO(
                $dsn,
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                [
                    PDO::ATTR_PERSISTENT => true,                    
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
                ]
            ); // Fecha construtor da classe PDO 
        } // Fecha if
    } // Fecha construtor da classe DAO
} // Fecha classe