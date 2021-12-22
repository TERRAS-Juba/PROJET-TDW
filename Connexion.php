<?php
class Connexion{
    private $dbname;
    private $host;
    private $user;
    private $password;
    function __construct($dbname,$host,$user,$password)
    {
        $this->dbname=$dbname;
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
    }
    function __destruct()
    {
    }
    function connexion(){
        $dsn='mysql:dbname='.$this->dbname.';host='. $this->host.';';
        try {
            $c=new PDO($dsn,$this->user,$this->password);
            return $c;
        } catch (PDOException $th) {
            echo '<h1 style="color:red">Connexion impossible a la base de données<h2>';
        }
      
    }
    function deconnexion(){
        $this->__destruct();
    }
}
?>