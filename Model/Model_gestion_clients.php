<?php
require_once  "../Connexion.php";
class ModelGestionClients
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "admin", "admin");
    }
    function __destruct()
    {
    }
    public function get_list_clients()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM client");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function enregistrer_modifcations_client($id, $nom, $prenom, $mdp, $email, $adresse)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE client SET mot_de_passe=? ,nom=? ,prenom=? ,email=? , adresse=? WHERE id_client=?");
        $qtf->bindParam(1, $mdp);
        $qtf->bindParam(2, $nom);
        $qtf->bindParam(3, $prenom);
        $qtf->bindParam(4, $email);
        $qtf->bindParam(5, $adresse);
        $qtf->bindParam(6, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function supprimer_client($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM client  WHERE id_client=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_client($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM client  WHERE id_client=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
?>