<?php
require_once  "../View/View_gestion_contenu.php";
require_once  "../Model/Model_gestion_contenu.php";
class ControllerGestionContenu
{
    private $view;
    private $model;
    public function __construct()
    {
        $this->view = new ViewGestionContenu();
        $this->model = new ModelGestionContenu();
    }
    function __destruct()
    {
    }
    public function get_list_type_transport()
    {
        return $this->model->get_list_type_transport();
    }
    public function get_list_moyen_transport()
    {
        return $this->model->get_list_moyen_transport();
    }
    public function get_list_fourchette_poid()
    {
        return $this->model->get_list_fourchette_poid();
    }
    public function get_list_fourchette_volume()
    {
        return $this->model->get_list_fourchette_volume();
    }
    public function get_type_transport($id)
    {
        return $this->model->get_type_transport($id);
    }
    public function get_moyen_transport($id)
    {
        return $this->model->get_moyen_transport($id);
    }
    public function get_fourchette_poid($id)
    {
        return $this->model->get_fourchette_poid($id);
    }
    public function get_fourchette_volume($id)
    {
        return $this->model->get_fourchette_volume($id);
    }
    public function modifier_type_transport($id, $libele, $garantie)
    {
        $this->model->modifier_type_transport($id, $libele, $garantie);
    }
    public function modifier_moyen_transport($id, $libele)
    {
        $this->model->modifier_moyen_transport($id, $libele);
    }
    public function modifier_fourchette_poid($id, $libele)
    {
        $this->model->modifier_fourchette_poid($id, $libele);
    }
    public function modifier_fourchette_volume($id, $libele)
    {
        $this->model->modifier_fourchette_volume($id, $libele);
    }
    public function supprimer_type_transport($id)
    {
        $this->model->supprimer_type_transport($id);
    }
    public function supprimer_moyen_transport($id)
    {
        $this->model->supprimer_moyen_transport($id);
    }
    public function supprimer_fourchette_poid($id)
    {
        $this->model->supprimer_fourchette_poid($id);
    }
    public function supprimer_fourchette_volume($id)
    {
        $this->model->supprimer_fourchette_volume($id);
    }
    public function ajouter_type_transport($libele, $garantie)
    {
        $this->model->ajouter_type_transport($libele, $garantie);
    }
    public function ajouter_moyen_transport($libele)
    {
        $this->model->ajouter_moyen_transport($libele);
    }
    public function ajouter_fourchette_poid($libele)
    {
        $this->model->ajouter_fourchette_poid($libele);
    }
    public function ajouter_fourchette_volume($libele)
    {
        $this->model->ajouter_fourchette_volume($libele);
    }
    public function afficher_list_type_transport()
    {
        $this->view->get_list_type_transport();
    }
    public function afficher_list_moyen_transport()
    {
        $this->view->get_list_moyen_transport();
    }
    public function afficher_list_fourchette_poid()
    {
        $this->view->get_list_fourchette_poid();
    }
    public function afficher_list_fourchette_volume()
    {
        $this->view->get_list_fourchette_volume();
    }
    public function afficher_modifier_type_transport($id_type)
    {
        $this->view->modifier_type_transport($id_type);
    }
    public function afficher_modifier_moyen_transport($id_type)
    {
        $this->view->modifier_moyen_transport($id_type);
    }
    public function afficher_modifier_fourchette_poid($id_type)
    {
        $this->view->modifier_fourchette_poid($id_type);
    }
    public function afficher_modifier_fourchette_volume($id_type)
    {
        $this->view->modifier_fourchette_volume($id_type);
    }
    public function afficher_contenu()
    {
        $this->view->get_contenu();
    }
}
