<?php
require_once  "../View/View_gestion_news.php";
require_once "../Model/Model_gestion_news.php";
class ControllerGestionNews
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionNews();
      $this->model = new ModelGestionNews();
   }
   function __destruct()
   {
   }
   public function get_list_news()
   {
      return $this->model->get_list_news();
   }
   public function get_news($id)
   {
      return $this->model->get_news($id);
   }

   public function afficher_list_news()
   {
      ($this->view)->get_list_news();
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
   public function supprimer_news($id)
   {
      $this->model->supprimer_news($id);
   }
   public function afficher_modifier_news($id)
   {
      ($this->view)->modifier_news($id);
   }
   public function inserer_news($id_news, $titre, $description, $date)
   {
      $this->model->inserer_news($id_news, $titre, $description, $date);
   }
   public function afficher_inserer_news()
   {
      ($this->view)->inserer_news();
   }
   public function enregistrer_modifcations_news($id, $titre, $description)
   {
      $this->model->enregistrer_modifcations_news($id, $titre, $description);
   }
   public function enregistrer_images_news($id, $id_image, $chemin)
   {
      $this->model->enregistrer_images_news($id, $id_image, $chemin);
   }
}
