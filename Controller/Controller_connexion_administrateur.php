<?php
require "../View/View_connexion_administrateur.php";
require "../Model/Model_connexion_administrateur.php";
class ControllerConnexionAdministrateur
{
    private $view;
    public function __construct()
    {
        $this->view = new ViewConnexionAdministrateur();
    }
    function __destruct()
    {
    }
    public function connexion_administrateur($user_name, $user_password)
    {
        $model = new ModelConnexionAdministrateur();
        $model->connexion_administrateur($user_name, $user_password);
    }
    public function afficher_connexion_administrateur()
    {
        ($this->view)->connexion_administrateur();
    }
}
