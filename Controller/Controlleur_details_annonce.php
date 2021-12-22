<?php
require_once "../View/View_details_annonce.php";
require_once "../Model/Model_details_annonce.php";
class ControllerDetailsAnnonce{
    private $view;
    public function __construct()
    {
       $this->view=new ViewDetailsAnnonce();
    }
     public function get_annonce_by_id($id){
         $model=new ModelDetailsAnnonce();
         $resultat=$model->get_annonce_by_id($id);
         return $resultat;
     }
     public function get_image_annonce_by_id($id){
      $model=new ModelDetailsAnnonce();
      $resultat=$model->get_image_annonce_by_id($id);
      return $resultat;
  }
     public function afficher_annonce_by_id($id){
        ($this->view)->get_annonce_by_id($id);
     }
     public function afficher_header(){
        ($this->view)->get_header();
     }
     public function afficher_menu(){
      ($this->view)->get_menu();
     }
     public function afficher_footer(){
      ($this->view)->get_footer();
 }
}
?>