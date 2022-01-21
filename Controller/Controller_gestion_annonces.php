<?php
require_once "../View/View_gestion_annonces.php";
require_once  "../Model/Model_gestion_annonces.php";
class ControllerGestionAnnonces
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionAnnonces();
      $this->model = new ModelGestionAnnonces();
   }
   function __destruct()
   {
   }
   public function get_list_annonces()
   {
      $resultat = $this->model->get_list_annonces();
      return $resultat;
   }
   public function get_list_annonces_archivees()
   {
      $resultat = $this->model->get_list_annonces_archivees();
      return $resultat;
   }
   public function afficher_list_annonces()
   {
      ($this->view)->get_list_annonces();
   }
   public function afficher_list_annonces_archivees()
   {
      ($this->view)->get_list_annonces_archivees();
   }

   public function supprimer_annonce($id)
   {
      $this->model->supprimer_annonce($id);
   }
   public function supprimer_annonce_archivee($id)
   {
      $this->model->supprimer_annonce_archivee($id);
   }

   public function get_list_annonces_by_critere($critere, $value)
   {
      return $this->model->get_list_annonces_by_critere($critere, $value);
   }
   public function get_list_annonces_en_attente()
   {
      return $this->model->get_list_annonces_en_attente();
   }
   public function afficher_list_annonces_en_attente()
   {
      ($this->view)->get_list_annonces_en_attente();
   }
   public function valider_annonce($id)
   {
      $this->model->valider_annonce($id);
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
   public function get_client_annonce($id)
   {
      $this->model->get_client_annonce($id);
   }
   public function get_transporteur_annonce($id)
   {
      return $this->model->get_transporteur_annonce($id);
   }
   public function  set_tarif($id_annonce, $tarif)
   {
      $this->model->set_tarif($id_annonce, $tarif);
   }
   public function afficher_set_tarif()
   {
      ($this->view)->set_tarif();
   }
}
