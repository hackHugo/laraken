<?php
/*
Clase que contiene la funcionalidad de telerik necesaria para crear los results necesarios para sus datasources.
*/

namespace fmelchor\laraken;


use fmelchor\laraken\DataSourceResult;

class TelerikDB
{

    public function getResult()
    {
        $server = env('DB_HOST');
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $port = env('DB_PORT');
        $serverC = 'mysql:host=' . $server . ';dbname=' . $database . ';port=' . $port;
        $result = new DataSourceResult($serverC, $username, $password, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $result;
    }
}