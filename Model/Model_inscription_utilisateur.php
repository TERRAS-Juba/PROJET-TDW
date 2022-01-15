<?php
require "../Connexion.php";
class ModelInscriptionUtilisateur
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function existe_utilisateur($user_name, $type)
    {
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
    public function get_wilayas()
    {
        $qtf =  (($this->connexion)->connexion())->prepare("Select * from wilaya");
        $qtf->execute();
        return $qtf;
    }
    public function inscription_client($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO client(id_client,nom,prenom,mot_de_passe,email,adresse,numero_telephone) VALUES (?,?,?,?,?,?,?)");
        $qtf->bindParam(1, $user_name);
        $qtf->bindParam(2, $nom);
        $qtf->bindParam(3, $prenom);
        $qtf->bindParam(4, $user_password);
        $qtf->bindParam(5, $email);
        $qtf->bindParam(6, $adresse);
        $qtf->bindParam(7, $numero_telephone);
        $qtf->execute();
    }
    public function inscription_transporteur($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse, $certifie)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO transporteur(id_transporteur,nom,prenom,mot_de_passe,email,adresse,numero_telephone,certifie) VALUES (?,?,?,?,?,?,?,?)");
        $qtf->bindParam(1, $user_name);
        $qtf->bindParam(2, $nom);
        $qtf->bindParam(3, $prenom);
        $qtf->bindParam(4, $user_password);
        $qtf->bindParam(5, $email);
        $qtf->bindParam(6, $adresse);
        $qtf->bindParam(7, $numero_telephone);
        $qtf->bindParam(8, $certifie);
        $qtf->execute();
    }
    public function add_trajets($id_transporteur, $trajets)
    {
        foreach ($trajets as $trajet) {
            $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO transporteur_wilaya(id_transporteur,num_wilaya) values(?,?)");
            $qtf->bindParam(1, $id_transporteur);
            $qtf->bindParam(2, $trajet);
            $qtf->execute();
        }
        $this->connexion->deconnexion();
    }
    public function add_certification($id_transporteur, $chemin)
    {
        $str='../Certifications/'.$chemin;
        $statut='en attente';
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO demandecertification(id_transporteur,statut,chemin) values(?,?,?)");
        $qtf->bindParam(1, $id_transporteur);
        $qtf->bindParam(2, $statut);
        $qtf->bindParam(3, $str);
        $qtf->execute();
        $this->connexion->deconnexion();
    }
}
