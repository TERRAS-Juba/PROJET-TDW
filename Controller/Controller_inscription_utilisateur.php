<?php
require "../View/View_inscription_utilisateur.php";
require "../Model/Model_inscription_utilisateur.php";
class ControllerInscriptionUtilisateur
{
    private $view;
    public function __construct()
    {
        $this->view = new ViewInscriptionUtilisateur();
    }
    function __destruct()
    {
    }
    public function afficher_inscription()
    {
        $this->view->inscription();
    }
    public function existe_utilisateur($user_name, $type)
    {
        $model = new ModelInscriptionUtilisateur();
        return $model->existe_utilisateur($user_name, $type);
    }
    public function get_wilayas()
    {
        $model = new ModelInscriptionUtilisateur();
        return $model->get_wilayas();
    }
    public function inscription_client($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse)
    {
        $model = new ModelInscriptionUtilisateur();
        $model->inscription_client($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse);
    }
    public function add_trajets($id_transporteur, $trajets)
    {
        $model = new ModelinscriptionUtilisateur();
        $model->add_trajets($id_transporteur, $trajets);
    }
    public function inscription_transporteur($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse,$certifie)
    {
        $model = new ModelInscriptionUtilisateur();
        $model->inscription_transporteur($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse,$certifie);
    }
    public function add_certification($id_transporteur, $chemin)
    {
        $model = new ModelInscriptionUtilisateur();
        $model->add_certification($id_transporteur,$chemin);
    }
}
