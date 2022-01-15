<?php
require "../Connexion.php";
class ModelGestionTransporteurs
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "admin", "admin");
    }
    function __destruct()
    {
    }
    public function get_list_transporteurs()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM transporteur where certifie!='en attente'");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_transporteurs_by_critere($critere, $value)
    {
        $qtf = "SELECT  * FROM transporteur where " . "$critere=" . "'$value'";
        $resultat = (($this->connexion)->connexion())->query($qtf);
        ($this->connexion)->deconnexion();
        return $resultat;
    }
    public function enregistrer_modifications_transporteur($id, $nom, $prenom, $mdp, $email, $adresse)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE transporteur SET mot_de_passe=?,nom=?,prenom=?,email=?,adresse=? WHERE id_transporteur=?");
        $qtf->bindParam(1, $mdp);
        $qtf->bindParam(2, $nom);
        $qtf->bindParam(3, $prenom);
        $qtf->bindParam(4, $email);
        $qtf->bindParam(5, $adresse);
        $qtf->bindParam(6, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function supprimer_transporteur($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM transporteur  WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_list_transporteurs_non_certifies()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur where certifie='en attente'");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_demande_certification($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM demandecertification  WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function certifier_transporteur($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE transporteur set certifie='en cours de traitement' WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function valider_transporteur($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE transporteur set certifie='valide' WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function refuser_transporteur($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE transporteur set certifie='refusee' WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_transporteur($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM transporteur  WHERE id_transporteur=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
