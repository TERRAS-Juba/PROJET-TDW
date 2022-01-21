<?php
require_once  "../Connexion.php";
class ModelStatistiques
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_nombre_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT COUNT(*) as nb FROM annonce");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_nombre_clients()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT COUNT(*) as nb FROM client");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_nombre_transporteurs()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT COUNT(*) as nb FROM transporteur");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_nombre_transporteurs_certifies()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT COUNT(*) as nb FROM transporteur where certifie=1");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_nombre_news()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT COUNT(*) as nb FROM news");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
