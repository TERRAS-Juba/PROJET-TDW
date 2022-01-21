<?php
require_once "../View/View_details_news.php";
require_once "../Model/Model_details_news.php";
class ControllerDetailsNews
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewDetailsNews();
      $this->model = new ModelDetailsNews();
   }
   public function __destruct()
   {
   }
   public function get_news_by_id($id)
   {
      return $this->model->get_news_by_id($id);
   }
   public function get_image_news_by_id($id)
   {
      return $this->model->get_image_news_by_id($id);
   }
   public function afficher_news_by_id($id)
   {
      ($this->view)->get_news_by_id($id);
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
