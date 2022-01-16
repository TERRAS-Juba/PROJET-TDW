<?php
require "../View/View_gestion_signalement.php";
require "../Model/Model_gestion_signalements.php";
class ControllerGestionSignalements
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionSignalements();
      $this->model = new ModelGestionSignalements();
   }
   function __destruct()
   {
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
   public function get_list_signalements()
   {
      return $this->model->get_list_signalements();
   }
   public function afficher_list_signalements()
   {
      ($this->view)->get_list_signalements();
   }
   public function get_client_signalement($id)
   {
      return $this->model->get_client_signalement($id);;
   }
   public function get_transporteur_signalement($id)
   {
     
      return $this->model->get_tranporteur_signalement($id);
   }
}
