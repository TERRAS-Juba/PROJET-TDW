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
   public function get_annonces_valides_client()
   {
      $model = new ModelMonProfil();
      return $model->get_annonces_valides_client();
   }
   public function get_annonces_valides_transporteur()
   {
      $model = new ModelMonProfil();
      return $model->get_annonces_valides_transporteur();
   }
   public function get_annonces_en_attente_client()
   {
      $model = new ModelMonProfil();
      return $model->get_annonces_en_attente_client();
   }
   public function get_images_annonces()
   {
      $model = new ModelMonProfil();
      return $model->get_images_annonces();
   }
   public function get_list_transporteurs()
   {
      $model = new ModelMonProfil();
      return $model->get_list_transporteurs();
   }
   public function recuperer_list_trajets_transporteur($id_transporteur)
   {
      $model = new ModelMonProfil();
      return $model->recuperer_list_trajets_transporteur($id_transporteur);
   }
   public function supprimer_annonce($id_annonce)
   {
      $model = new ModelMonProfil();
      return $model->supprimer_annonce($id_annonce);
   }
   public function ajouter_transporteur_annonce($id_transporteur,$id_annonce){
      $model = new ModelMonProfil();
      return $model->ajouter_transporteur_annonce($id_transporteur,$id_annonce);
  }
  public function get_annonces_transaction_client()
    {
      $model = new ModelMonProfil();
      return $model->get_annonces_transaction_client();
    }
    public function get_annonces_confirmes_client()
    {
      $model = new ModelMonProfil();
      return $model->get_annonces_confirmes_client();
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
