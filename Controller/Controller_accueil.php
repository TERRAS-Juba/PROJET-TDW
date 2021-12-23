<?php
require_once "../View/View_accueil.php";
require_once "../Model/Model_accueil.php";
 class ControllerAccueil{
    private $view;
    public function __construct()
    {
       $this->view=new ViewAccueil();
    }
     public function get_list_annonces(){
         $model=new ModelAccueil();
         $resultat=$model->get_list_annonces();
         return $resultat;
     }
     public function get_annonces_by_emplacement($emplacement_depart,$emplcement_arrive){
      $model=new ModelAccueil();
      $resultat=$model->get_annonces_by_emplacement($emplacement_depart,$emplcement_arrive);
      return $resultat;
  }
 public  function  get_images_annonces(){
   $model=new ModelAccueil();
   $resultat=$model->get_images_annonces();
   return $resultat;
 }
 public function set_nb_vues($id){
   $model=new ModelAccueil();
   $model->set_nb_vues($id);
 }
     public function afficher_list_annonces(){
        ($this->view)->get_list_annonces();
     }
     public function afficher_header(){
        ($this->view)->get_header();
     }
     public function afficher_diaporama(){
      ($this->view)->get_diaporama();
     }
     public function afficher_menu(){
      ($this->view)->get_menu();
     }
     public function afficher_footer(){
      ($this->view)->get_footer();
     }
     public function afficher_zone_recherche(){
      ($this->view)->get_zone_recherche();
     }
     public function afficher_annonces_by_emplacement($emplacement_depart,$emplcement_arrive){
      ($this->view)->get_annonces_by_emplacement($emplacement_depart,$emplcement_arrive);
     }
 }
