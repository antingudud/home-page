<?php

class ConnectDB
{
    private $configFile;
    private $configContent;
    private $host;
    private $user;
    private $password;
    private $database;
    function __construct()
    {
        $this->configFile = file_get_contents("/config/config.json");
        $this->configContent = json_decode($this->configFile);
        $this->host = "$this->configContent=>host";
        $this->user = "$this->configContent=>user";
        $this->password = "$this->configContent=>password";
        $this->database = "$this->configContent=>database";
    }
    function connect()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $db = new mysqli($this->host, $this->user, $this->password, $this->database);
            $db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
        } catch (\mysqli_sql_exception $e) {
            throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
        }
    }
}