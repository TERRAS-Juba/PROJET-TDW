<?php
require_once "../View/View_accueil.php";
require_once "../Model/Model_accueil.php";
class ControllerAccueil
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewAccueil();
      $this->model = new ModelAccueil();
   }
   public function get_list_annonces()
   {
      $resultat = $this->model->get_list_annonces();
      return $resultat;
   }
   public function get_annonces_by_emplacement($emplacement_depart, $emplcement_arrive)
   {
      $resultat = $this->model->get_annonces_by_emplacement($emplacement_depart, $emplcement_arrive);
      return $resultat;
   }
   public  function  get_images_annonces()
   {
      $resultat = $this->model->get_images_annonces();
      return $resultat;
   }
   public function set_nb_vues($id)
   {
      $this->model->set_nb_vues($id);
   }
   public function get_type_transport()
   {
      $resultat = $this->model->get_type_transport();
      return $resultat;
   }
   public function get_moyen_transport()
   {
      $resultat = $this->model->get_moyen_transport();
      return $resultat;
   }
   public function get_fourchette_poid()
   {
      $resultat = $this->model->get_fourchette_poid();
      return $resultat;
   }
   public function get_fourchette_volume()
   {
      $resultat = $this->model->get_fourchette_volume();
      return $resultat;
   }
   public function get_wilaya()
   {
      $resultat = $this->model->get_wilaya();
      return $resultat;
   }
   public function get_list_images_diaporama(){
      return $this->model->get_list_images_diaporama();
   }

   public function ajouter_annonce($titre, $description, $emplacement_depart, $emplacement_arrive, $type_transport, $moyen_transport, $fourchette_poid, $fourchette_volume, $id_client, $id_annonce, $garantie)
   {
      $this->model->ajouter_annonce($titre, $description, $emplacement_depart, $emplacement_arrive, $type_transport, $moyen_transport, $fourchette_poid, $fourchette_volume, $id_client, $id_annonce, $garantie);
   }
   public function ajouter_image($id_image, $chemin)
   {
      $this->model->ajouter_image($id_image, $chemin);
   }
   public function ajouter_images_annonce($id_image, $id_annonce)
   {
      $this->model->ajouter_images_annonce($id_image, $id_annonce);
   }
   public function get_garantie($type_transport)
   {
      $garantie = $this->model->get_garantie($type_transport);
      foreach ($garantie as $row) {
         return $row["garantie"];
      }
   }
   public function afficher_list_annonces()
   {
      ($this->view)->get_list_annonces();
   }
   public function afficher_header()
   {
      ($this->view)->get_header();
   }
   public function afficher_diaporama()
   {
      ($this->view)->get_diaporama();
   }
   public function afficher_menu()
   {
      ($this->view)->get_menu();
   }
   public function afficher_footer()
   {
      ($this->view)->get_footer();
   }
   public function afficher_zone_recherche()
   {
      ($this->view)->get_zone_recherche();
   }
   public function afficher_annonces_by_emplacement($emplacement_depart, $emplcement_arrive)
   {
      ($this->view)->get_annonces_by_emplacement($emplacement_depart, $emplcement_arrive);
   }
   public function afficher_ajouter_annonce()
   {
      ($this->view)->ajouter_annonces();
   }
   public function afficher_comment_sa_marche()
   {
      ($this->view)->comment_sa_mache();
   }
}
