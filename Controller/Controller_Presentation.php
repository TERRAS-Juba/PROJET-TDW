<?php
require_once "../View/View_Presentation.php";
require_once "../Model/Model_presentation.php";

class ControllerPresentation
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewPresentation();
      $this->model=new ModelPresentation();
   }
   function __destruct()
   {
   }
   public function get_presentation()
    {
         return $this->model->get_presentation();
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
