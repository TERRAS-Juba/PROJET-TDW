<?php
require "../View/View_statistiques.php";
require "../Model/Model_statistiques.php";
class ControllerStatistiques
{
    private $view;
    private $model;
    public function __construct()
    {
        $this->view = new ViewStatistiques();
        $this->model = new ModelStatistiques();
    }
    function __destruct()
    {
    }
    public function get_nombre_annonces()
    {
        return $this->model->get_nombre_annonces();
    }
    public function get_nombre_clients()
    {
        return $this->model->get_nombre_clients();
    }
    public function get_nombre_transporteurs()
    {
        return $this->model->get_nombre_transporteurs();
    }
    public function get_nombre_transporteurs_certifies()
    {
        return $this->model->get_nombre_transporteurs_certifies();
    }
    public function get_nombre_news()
    {
        return $this->model->get_nombre_news();
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
