<?php
require_once "../View/View_news.php";
require_once "../Model/Model_news.php";
class ControllerNews
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewNews();
      $this->model = new ModelNews();
   }
   public function get_list_news()
   {
      return $this->model->get_list_news();
   }
   public  function  get_images_news()
   {
      $this->model->get_images_news();
   }
   public function set_nb_vues($id)
   {
      $this->model->set_nb_vues($id);
   }
   public function afficher_list_news()
   {
      ($this->view)->get_list_news();
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
