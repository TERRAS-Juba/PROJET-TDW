<?php
require_once  "../View/View_connexion_utilisateur.php";
require_once "../Model/Model_connexion_utilisateur.php";
class ControllerConnexionUtilisateur
{
    private $view;
    private $model;
    public function __construct()
    {
        $this->view = new ViewConnexionUtilisateur();
        $this->model = new ModelConnexionUtilisateur();
    }
    function __destruct()
    {
    }
    public function afficher_connexion()
    {
        $this->view->connexion();
    }
    public function connexion($user_name, $user_password, $type_compte)
    {
        return $this->model->connexion($user_name, $user_password, $type_compte);
    }
}
