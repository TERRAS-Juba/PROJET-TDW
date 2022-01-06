<?php
require "../Connexion.php";
class ModelMonProfil
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_infos_utilisateur()
    {
        if ($_SESSION["type_compte"] == "client") {
            $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM client where id_client=?");
            $qtf->bindParam(1, $_SESSION["user_name"]);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            return $qtf;
        } else {
            $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur where id_transporteur=?");
            $qtf->bindParam(1, $_SESSION["user_name"]);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            return $qtf;
        }
    }
    public function get_annonces_utilisateur()
    {
        if ($_SESSION["type_compte"] == "client") {
            $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='en attente'");
            $qtf->bindParam(1, $_SESSION["user_name"]);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            return $qtf;
        } else {
            $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_transporteur=?");
            $qtf->bindParam(1, $_SESSION["user_name"]);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            return $qtf;
        }
    }
    public function get_annonces_valides_utilisateur()
    {
        if ($_SESSION["type_compte"] == "client") {
            $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='valide'");
            $qtf->bindParam(1, $_SESSION["user_name"]);
            $qtf->execute();
            ($this->connexion)->deconnexion();
            return $qtf;
        } 
    }
    public function get_images_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("select * from annonce_image  inner join image on image.id_image= annonce_image.id_image");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
