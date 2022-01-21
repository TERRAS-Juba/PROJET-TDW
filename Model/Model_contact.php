<?php
require "../Connexion.php";
class ModelContact
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_contact()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * from contact");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
