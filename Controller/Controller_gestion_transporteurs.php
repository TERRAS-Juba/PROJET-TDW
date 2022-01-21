<?php
require_once  "../View/View_gestion_transporteurs.php";
require_once  "../Model/Model_gestion_transporteurs.php";
class ControllerGestionTransporteurs
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionTransporteurs();
      $this->model = new ModelGestionTransporteurs();
   }
   function __destruct()
   {
   }
   public function get_list_transporteurs()
   {
      return $this->model->get_list_transporteurs();
   }
   public function supprimer_transporteur($id)
   {
      $this->model->supprimer_transporteur($id);
   }
   public function enregistrer_modifications_transporteur($id, $nom, $prenom, $mdp, $email, $adresse)
   {
      $this->model->enregistrer_modifications_transporteur($id, $nom, $prenom, $mdp, $email, $adresse);
   }
   public function get_list_transporteurs_by_critere($critere, $value)
   {
      return $this->model->get_list_transporteurs_by_critere($critere, $value);
   }
   public function get_list_transporteurs_non_certifies()
   {
      return $this->model->get_list_transporteurs_non_certifies();
   }
   public function get_demande_certification($id)
   {
      return $this->model->get_demande_certification($id);
   }
   public function certifier_transporteur($id)
   {
      $this->model->certifier_transporteur($id);
   }
   public function valider_transporteur($id)
   {
      $this->model->valider_transporteur($id);
   }
   public function refuser_transporteur($id)
   {
      $this->model->refuser_transporteur($id);
   }
   public function get_transporteur($id)
   {
      return $this->model->get_transporteur($id);
   }
   public function afficher_demande_certification($id)
   {
      ($this->view)->get_demande_certification($id);
   }
   public function afficher_modifier_transporteur($id)
   {
      ($this->view)->modifier_transporteur($id);
   }
   public function afficher_list_transporteurs()
   {
      ($this->view)->get_list_transporteurs();
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
   public function afficher_list_transorteurs_non_certifies()
   {
      ($this->view)->get_list_transporteurs_non_certifies();
   }
}
