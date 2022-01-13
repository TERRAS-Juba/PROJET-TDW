<?php
require "../View/View_gestion_clients.php";
require "../Model/Model_gestion_clients.php";
class ControllerGestionClients{
    private $view;
    public function __construct()
    {
       $this->view=new ViewGestionClients();
    }
function __destruct()
{
    
}
public function get_list_clients(){
   $model=new ModelGestionClients();
   $resultat=$model->get_list_clients();
   return $resultat;
}
public function supprimer_client($id){
   $model=new ModelGestionClients();
   $resultat=$model->supprimer_client($id);
   return $resultat;
}
public function enregistrer_modifcations_client($id,$nom,$prenom,$mdp,$email,$adresse){
$model=new ModelGestionClients();
$model->enregistrer_modifcations_client($id,$nom,$prenom,$mdp,$email,$adresse);
}
public function get_list_clients_by_critere($critere,$value){
   $model=new ModelGestionClients();
   $resultat=$model->get_list_clients_by_critere($critere,$value);
   return $resultat;
}
public function get_client($id)
    {
      $model=new ModelGestionClients();
      $resultat=$model->get_client($id);
      return $resultat;
    }
public function afficher_modifier_client($id){
   ($this->view)->modifier_client($id);
}
public function afficher_list_clients(){
   ($this->view)->get_list_clients();
}
public function afficher_list_clients_by_critere($critere,$value){
   ($this->view)->get_list_clients_by_critere($critere,$value);
   
}
 public function afficher_contenu(){
    ($this->view)->get_contenu();
 }
}
?>