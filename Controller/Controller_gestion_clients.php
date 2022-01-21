<?php
require_once  "../View/View_gestion_clients.php";
require_once  "../Model/Model_gestion_clients.php";
class ControllerGestionClients
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionClients();
      $this->model = new ModelGestionClients();
   }
   function __destruct()
   {
   }
   public function get_list_clients()
   {
      return $this->model->get_list_clients();
   }
   public function supprimer_client($id)
   {
      return $this->model->supprimer_client($id);
   }
   public function enregistrer_modifcations_client($id, $nom, $prenom, $mdp, $email, $adresse)
   {
      $this->model->enregistrer_modifcations_client($id, $nom, $prenom, $mdp, $email, $adresse);
   }
   public function get_client($id)
   {
      return $this->model->get_client($id);
   }
   public function afficher_modifier_client($id)
   {
      ($this->view)->modifier_client($id);
   }
   public function afficher_list_clients()
   {
      ($this->view)->get_list_clients();
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
}
