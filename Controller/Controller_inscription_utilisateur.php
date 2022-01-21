<?php
require_once "../View/View_inscription_utilisateur.php";
require_once  "../Model/Model_inscription_utilisateur.php";
class ControllerInscriptionUtilisateur
{
    private $view;
    private $model;
    public function __construct()
    {
        $this->view = new ViewInscriptionUtilisateur();
        $this->model = new ModelInscriptionUtilisateur();
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
        return $this->model->existe_utilisateur($user_name, $type);
    }
    public function get_wilayas()
    {
        return $this->model->get_wilayas();
    }
    public function inscription_client($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse)
    {
        $this->model->inscription_client($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse);
    }
    public function add_trajets($id_transporteur, $trajets)
    {
        $this->model->add_trajets($id_transporteur, $trajets);
    }
    public function inscription_transporteur($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse, $certifie)
    {
        $this->model->inscription_transporteur($user_name, $user_password, $nom, $prenom, $email, $numero_telephone, $adresse, $certifie);
    }
    public function add_certification($id_transporteur, $chemin)
    {
        $this->model->add_certification($id_transporteur, $chemin);
    }
}
