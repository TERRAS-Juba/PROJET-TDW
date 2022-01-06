<?php
require_once "../View/View_mon_profil.php";
require_once "../Model/Model_mon_profil.php";
class ControllerMonProfil
{
   private $view;
   public function __construct()
   {
      $this->view = new ViewMonProfil();
   }
   public function get_infos_utilisateur()
   {
      $model = new ModelMonProfil();
      return $model->get_infos_utilisateur();
   }
   public function get_annonces_utilisateur()
   {
      $model = new ModelMonProfil();
      return $model->get_annonces_utilisateur();
   }
   public function get_annonces_valides_utilisateur()
   {
      $model = new ModelMonProfil();
      return $model->get_annonces_valides_utilisateur();
   }
   public function get_images_annonces()
   {
      $model = new ModelMonProfil();
      return $model->get_images_annonces();
   }
   public function afficher_annonces_valides_utilisateur()
   {
      $this->view->get_annonces_valides_utilisateur();
   }
   public function afficher_annonces_utilisateur()
   {
      $this->view->get_annonces_utilisateur();
   }
   public function afficher_infos_utilisateur()
   {
      $this->view->get_infos_utilisateur();
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
}
