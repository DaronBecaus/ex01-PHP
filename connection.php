<?php

define('DB_DRIVE', 'mysql');
define('NOME_SERVIDOR', 'localhost');
define('NOME_BANCO', 'exphp');
define('USER', 'root');
define('PASSWORD', '');

class Connection
{
    public static function connect()
    {
        $connection = new PDO(DB_DRIVE . ":host=" . NOME_SERVIDOR . ";dbname=" . NOME_BANCO, USER, PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
}
