<?php
require "../View/View_gestion_contenu.php";
require "../Model/Model_gestion_contenu.php";
class ControllerGestionContenu
{
    private $view;
    public function __construct()
    {
        $this->view = new ViewGestionContenu();
    }
    function __destruct()
    {
    }
    public function get_list_type_transport()
    {
        $model = new ModelGestionContenu();
        return $model->get_list_type_transport();
    }
    public function get_list_moyen_transport()
    {
        $model = new ModelGestionContenu();
        return $model->get_list_moyen_transport();
    }
    public function get_list_fourchette_poid()
    {
        $model = new ModelGestionContenu();
        return $model->get_list_fourchette_poid();
    }
    public function get_list_fourchette_volume()
    {
        $model = new ModelGestionContenu();
        return $model->get_list_fourchette_volume();
    }
    public function get_type_transport($id)
    {
        $model = new ModelGestionContenu();
        return $model->get_type_transport($id);
    }
    public function get_moyen_transport($id)
    {
        $model = new ModelGestionContenu();
        return $model->get_moyen_transport($id);
    }
    public function get_fourchette_poid($id)
    {
        $model = new ModelGestionContenu();
        return $model->get_fourchette_poid($id);
    }
    public function get_fourchette_volume($id)
    {
        $model = new ModelGestionContenu();
        return $model->get_fourchette_volume($id);
    }
    public function modifier_type_transport($id,$libele,$garantie){
        $model = new ModelGestionContenu();
        $model->modifier_type_transport($id,$libele,$garantie);
    }
    public function modifier_moyen_transport($id,$libele){
        $model = new ModelGestionContenu();
        $model->modifier_moyen_transport($id,$libele);
    }
    public function modifier_fourchette_poid($id,$libele){
        $model = new ModelGestionContenu();
        $model->modifier_fourchette_poid($id,$libele);
    }
    public function modifier_fourchette_volume($id,$libele){
        $model = new ModelGestionContenu();
        $model->modifier_fourchette_volume($id,$libele);
    }
    public function supprimer_type_transport($id){
        $model = new ModelGestionContenu();
        return $model-> supprimer_type_transport($id);
    }
    public function supprimer_moyen_transport($id){
        $model = new ModelGestionContenu();
        return $model-> supprimer_moyen_transport($id);
    }
    public function supprimer_fourchette_poid($id){
        $model = new ModelGestionContenu();
        return $model-> supprimer_fourchette_poid($id);
    }
    public function supprimer_fourchette_volume($id){
        $model = new ModelGestionContenu();
        return $model-> supprimer_fourchette_volume($id);
    }
    public function ajouter_type_transport($libele,$garantie)
    {
        $model = new ModelGestionContenu();
        $model-> ajouter_type_transport($libele,$garantie);
    }
    public function ajouter_moyen_transport($libele)
    {
        $model = new ModelGestionContenu();
        $model-> ajouter_moyen_transport($libele);
    }
    public function ajouter_fourchette_poid($libele)
    {
        $model = new ModelGestionContenu();
        return $model-> ajouter_fourchette_poid($libele);
    }
    public function ajouter_fourchette_volume($libele)
    {
        $model = new ModelGestionContenu();
        return $model-> ajouter_fourchette_volume($libele);
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
