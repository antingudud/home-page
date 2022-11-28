<?php

class ConnectDB
{
    private $configFile;
    private $configContent;
    private $host;
    private $user;
    private $password;
    private $database;
    protected $conn;
    function __construct()
    {
        $this->configFile = file_get_contents(dirname(__DIR__, 1) . "/config/config.json");
        $this->configContent = json_decode($this->configFile);
        $this->host = $this->configContent->{'host'};
        $this->user = $this->configContent->{'user'};
        $this->password = $this->configContent->{'password'};
        $this->database = $this->configContent->{'database'};
    }
    function connect()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            $this->conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
            return $this->conn;
        } catch (\mysqli_sql_exception $e) {
            throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
        } finally {
            unset($host, $database, $user, $password);
        }
    }
}
