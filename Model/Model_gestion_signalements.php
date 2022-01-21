<?php
require_once  "../Connexion.php";
class ModelGestionSignalements
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "admin", "admin");
    }
    function __destruct()
    {
    }
    public function get_list_signalements()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM signalement");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_client_signalement($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM client  WHERE id_client=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_tranporteur_signalement($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur  WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
