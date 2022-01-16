<?php
require "../Connexion.php";
class ModelMonProfil
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
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
    public function get_annonces_valides_client()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='valide'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_transaction_transporteur()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_transporteur=? and statut='transaction'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_confirmes_transporteur()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_transporteur=? and statut='confirme'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_en_attente_client()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='en attente'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_transaction_client()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='transaction'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_confirmes_client()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where id_client=? and statut='confirme'");
        $qtf->bindParam(1, $_SESSION["user_name"]);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_transporteurs()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function recuperer_list_trajets_transporteur($id_transporteur)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur_wilaya where id_transporteur=?");
        $qtf->bindParam(1, $id_transporteur);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_images_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("select * from annonce_image  inner join image on image.id_image= annonce_image.id_image");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function supprimer_annonce($id_annonce)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO annoncearchivee (id_annonce,titre,description,emplacement_depart,emplacement_arrive,garantie,tarif,type_transport,fourchette_poid,fourchette_volume,moyen_transport,statut,date_publication,nombre_vues,id_transporteur,id_client) SELECT * FROM annonce WHERE id_annonce=?");
        $qtf->bindParam(1, $id_annonce);
        $qtf->execute();
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM annonce where id_annonce=?");
        $qtf->bindParam(1, $id_annonce);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function ajouter_transporteur_annonce($id_transporteur, $id_annonce)
    {
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("UPDATE annonce set id_transporteur=?,statut='transaction' WHERE id_annonce=?");
        $requete->bindParam(1, $id_transporteur);
        $requete->bindParam(2, $id_annonce);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
    public function decliner_annonce($id_annonce)
    {
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("UPDATE annonce set id_transporteur='',statut='valide' WHERE id_annonce=?");
        $requete->bindParam(1, $id_annonce);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
    public function accepter_annonce($id_annonce)
    {
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("UPDATE annonce set statut='confirme' WHERE id_annonce=?");
        $requete->bindParam(1, $id_annonce);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
    
    public function get_certification_transporteur(){
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("SELECT * from transporteur WHERE id_transporteur=?");
        $requete->bindParam(1,$_SESSION["user_name"]);
        $requete->execute();
        ($this->connexion)->deconnexion();
        return $requete;
    }
    public function ajouter_signalement($id_annonce,$id_client,$id_transporteur,$titre,$description,$emetteur){
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("INSERT INTO signalement(id_annonce,id_client,id_transporteur,titre,description,emetteur) VALUES (?,?,?,?,?,?)");
        $requete->bindParam(1,$id_annonce);
        $requete->bindParam(2,$id_client);
        $requete->bindParam(3,$id_transporteur);
        $requete->bindParam(4,$titre);
        $requete->bindParam(5,$description);
        $requete->bindParam(6,$emetteur);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
    public function noter_transporteur($id_transporteur,$note){
        $conn = ($this->connexion)->connexion();
        $requete = $conn->prepare("UPDATE transporteur SET note=(note+?)/2 where  id_transporteur=?");
        $requete->bindParam(1,$note);
        $requete->bindParam(2,$id_transporteur);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
}
