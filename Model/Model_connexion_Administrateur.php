<?php
require "../Connexion.php";
class ModelConnexionAdministrateur
{
    private $connexion;
    function __construct()
    {
        
    }
    function __destruct()
    {
    }
    public function connexion_administrateur($user_name,$user_password)
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", $user_name, $user_password);
       ($this->connexion)->connexion();
       
    }
}
