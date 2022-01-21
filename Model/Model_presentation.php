<?php
require_once  "../Connexion.php";
class ModelPresentation
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_presentation()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * from presentation");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
