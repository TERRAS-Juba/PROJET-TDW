<?php
require_once "../View/View_contact.php";
require_once "../Model/Model_contact.php";
class ControllerContact
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewContact();
      $this->model = new ModelContact();
   }
   function __destruct()
   {
   }
   public function get_contact()
   {
      return $this->model->get_contact();
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
