<?php

//Filename: IConnectInfo.php
interface IConnectInfo
{

    const HOST = "localhost";
    const UNAME = "root";
    const PW = "";
    const DBNAME = "lab_padroes_projetos";

    public function doConnect();
}

?>