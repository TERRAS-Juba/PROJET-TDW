<?php
require "../View/View_statistiques.php";
require "../Model/Model_statistiques.php";
class ControllerStatistiques
{
    private $view;
    public function __construct()
    {
        $this->view = new ViewStatistiques();
    }
    function __destruct()
    {
    }
    public function get_nombre_annonces()
    {
        $model = new ModelStatistiques();
        $resultat = $model->get_nombre_annonces();
        return $resultat;
    }
    public function get_nombre_clients()
    {
        $model = new ModelStatistiques();
        $resultat = $model->get_nombre_clients();
        return $resultat;
    }
    public function get_nombre_transporteurs()
    {
        $model = new ModelStatistiques();
        $resultat = $model->get_nombre_transporteurs();
        return $resultat;
    }
    public function get_nombre_transporteurs_certifies()
    {
        $model = new ModelStatistiques();
        $resultat = $model->get_nombre_transporteurs_certifies();
        return $resultat;
    }
    public function get_nombre_news(){
        $model = new ModelStatistiques();
        $resultat = $model->get_nombre_news();
        return $resultat;
    }
    public function afficher_header()
    {
        ($this->view)->get_header();
    }
    public function afficher_menu()
    {
        ($this->view)->get_menu();
    }
    public function afficher_footer()
    {
        ($this->view)->get_footer();
    }
    public function afficher_contenu()
    {
        ($this->view)->get_contenu();
    }
}
