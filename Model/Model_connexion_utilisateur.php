<?php
require "../Connexion.php";
class ModelConnexionUtilisateur
{
    private $connexion;
    function __construct()
    {
    }
    function __destruct()
    {
    }
    public function connexion($user_name, $user_password,$type)
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", $user_name,$user_password);
        if ($type == "client") {
            $qtf =  (($this->connexion)->connexion())->prepare("Select * from client where id_client=?");
            $qtf->bindParam(1, $user_name);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            if ($qtf->rowCount() == 0) {
                return false;
            } else {
                return true;
            }
        } else {
            $qtf =  (($this->connexion)->connexion())->prepare("Select * from transporteur where id_transporteur=?");
            $qtf->bindParam(1, $user_name);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            if ($qtf->rowCount() == 0) {
                return false;
            } else {
                return true;
            }
        }
    }
}
