<?php

require_once 'IConnectInfo.php';

class UniversalConnect implements IConnectInfo
{

    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;

    public function doConnetc()
    {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            echo "Sucesso ao aonectar no MySQL";
        } elseif (mysqli_connect_error(slef::$hookup)) {
            echo "Falha na conexão: " . mysqli_connect_error();
        }
        return self::$hookup;
    }

}