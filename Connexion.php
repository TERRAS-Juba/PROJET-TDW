<?php
class Connexion
{
    private $dbname;
    private $host;
    private $user;
    private $password;
    function __construct($dbname, $host, $user, $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }
    function __destruct()
    {
    }
    function connexion()
    {
        $dsn = 'mysql:dbname=' . $this->dbname . ';host=' . $this->host . ';';
        $c = new PDO($dsn, $this->user, $this->password);
        return $c;
    }
    function deconnexion()
    {
        $this->__destruct();
    }
}
