<?php
require "../View/View_connexion_utilisateur.php";
require "../Model/Model_connexion_utilisateur.php";
class ControllerConnexionUtilisateur
{
    private $view;
    public function __construct()
    {
        $this->view = new ViewConnexionUtilisateur();
    }
    function __destruct()
    {
    }
    public function afficher_connexion()
    {
        $this->view->connexion();
    }
    public function connexion($user_name, $user_password,$type_compte)
    {
        $model = new ModelConnexionUtilisateur();
        return $model->connexion($user_name, $user_password,$type_compte);
    }
}
