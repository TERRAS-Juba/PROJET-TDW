<?php
require "../Connexion.php";
class ModelGestionAnnonces
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", "admin", "admin");
    }
    function __destruct()
    {
    }
    public function get_list_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM annonce where statut='valide'");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_annonces_by_critere($critere, $value)
    {
        $qtf = "SELECT  * FROM annonce where " . "$critere=" . "'$value'";
        $resultat = (($this->connexion)->connexion())->query($qtf);
        ($this->connexion)->deconnexion();
        return $resultat;
    }
    public function supprimer_annonce($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO annoncearchivee (id_annonce,titre,description,emplacement_depart,emplacement_arrive,garantie,tarif,type_transport,fourchette_poid,fourchette_volume,moyen_transport,statut,date_publication,nombre_vues,id_transporteur,id_client) SELECT * FROM annonce WHERE id_annonce=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM annonce  WHERE id_annonce=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_list_annonces_en_attente()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM annonce where statut='en attente'");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function valider_annonce($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE annonce set statut='valide' WHERE id_annonce=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_client_annonce($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("Select * from client WHERE id_client=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_transporteur_annonce($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("Select * from transporteur WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function set_tarif($id_annonce,$tarif){
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE annonce set tarif=? WHERE id_annonce=?");
        $qtf->bindParam(1, $tarif);
        $qtf->bindParam(2, $id_annonce);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
}
?>