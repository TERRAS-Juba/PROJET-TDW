<?php
require_once "../View/View_mon_profil.php";
require_once "../Model/Model_mon_profil.php";
class ControllerMonProfil
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewMonProfil();
      $this->model = new ModelMonProfil();
   }
   public function get_infos_utilisateur()
   {
      return $this->model->get_infos_utilisateur();
   }
   public function get_annonces_valides_client()
   {
      return $this->model->get_annonces_valides_client();
   }
   public function get_annonces_transaction_transporteur()
   {
      return $this->model->get_annonces_transaction_transporteur();
   }
   public function get_annonces_confirmes_transporteur()
   {
      return $this->model->get_annonces_confirmes_transporteur();
   }
   public function get_annonces_en_attente_client()
   {
      return $this->model->get_annonces_en_attente_client();
   }
   public function get_images_annonces()
   {
      return $this->model->get_images_annonces();
   }
   public function get_list_transporteurs()
   {
      return $this->model->get_list_transporteurs();
   }
   public function recuperer_list_trajets_transporteur($id_transporteur)
   {
      return $this->model->recuperer_list_trajets_transporteur($id_transporteur);
   }
   public function supprimer_annonce($id_annonce)
   {
      return $this->model->supprimer_annonce($id_annonce);
   }
   public function ajouter_transporteur_annonce($id_transporteur, $id_annonce)
   {
      return $this->model->ajouter_transporteur_annonce($id_transporteur, $id_annonce);
   }
   public function get_annonces_transaction_client()
   {
      return $this->model->get_annonces_transaction_client();
   }
   public function get_annonces_confirmes_client()
   {
      return $this->model->get_annonces_confirmes_client();
   }
   public function decliner_annonce($id_annonce)
   {
      return $this->model->decliner_annonce($id_annonce);
   }
   public function accepter_annonce($id_annonce)
   {
      return $this->model->accepter_annonce($id_annonce);
   }
   public function get_certification_transporteur()
   {
      return $this->model->get_certification_transporteur();
   }
   public function ajouter_signalement($id_annonce, $id_client, $id_transporteur, $titre, $description, $emetteur)
   {
      $this->model->ajouter_signalement($id_annonce, $id_client, $id_transporteur, $titre, $description, $emetteur);
   }
   public function noter_transporteur($id_transporteur, $note)
   {
      $this->model->noter_transporteur($id_transporteur, $note);
   }
   public function afficher_noter_transporteur($id_transporteur)
   {
      $this->view->noter_transporteur($id_transporteur);
   }
   public function modifier_client($id_client,$nom,$prenom,$email,$adrese,$numero_telephone,$mot_de_passe){
      $this->model->modifier_client($id_client,$nom,$prenom,$email,$adrese,$numero_telephone,$mot_de_passe);
   }
   public function modifier_transporteur($id_client,$nom,$prenom,$email,$adrese,$numero_telephone,$mot_de_passe){
      $this->model->modifier_transporteur($id_client,$nom,$prenom,$email,$adrese,$numero_telephone,$mot_de_passe);
   }
   public function afficher_annonces_utilisateur()
   {
      $this->view->get_annonces_utilisateur();
   }
   public function afficher_infos_utilisateur()
   {
      $this->view->get_infos_utilisateur();
   }
   public function afficher_modifier_profil()
   {
      $this->view->modifier_profil();
   }
   public function afficher_header()
   {
      ($this->view)->get_header();
   }
   public function afficher_menu()
   {
      ($this->view)->get_menu();
   }
   public function afficher_effectuer_signalement($id_annonce, $id_client, $id_transporteur)
   {
      ($this->view)->effectuer_signalement($id_annonce, $id_client, $id_transporteur);
   }
   public function afficher_footer()
   {
      ($this->view)->get_footer();
   }
}
