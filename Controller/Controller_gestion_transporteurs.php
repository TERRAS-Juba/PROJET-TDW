<?php
require "../View/View_gestion_transporteurs.php";
require "../Model/Model_gestion_transporteurs.php";
class ControllerGestionTransporteurs{
    private $view;
    public function __construct()
    {
       $this->view=new ViewGestionTransporteurs();
    }
function __destruct()
{
    
}
public function get_list_transporteurs(){
   $model=new ModelGestionTransporteurs();
   $resultat=$model->get_list_transporteurs();
   return $resultat;
}
public function supprimer_transporteur($id){
    $model=new ModelGestionTransporteurs();
   $model->supprimer_transporteur($id);
}
public function enregistrer_modifications_transporteur($id,$nom,$prenom,$mdp,$email,$adresse){
    $model=new ModelGestionTransporteurs();
   $model->enregistrer_modifications_transporteur($id,$nom,$prenom,$mdp,$email,$adresse);
}
public function get_list_transporteurs_by_critere($critere,$value){
   $model=new ModelGestionTransporteurs();
   $resultat=$model->get_list_transporteurs_by_critere($critere,$value);
   return $resultat;
   
}
public function get_list_transporteurs_non_certifies(){
   $model=new ModelGestionTransporteurs();
   $resultat=$model->get_list_transporteurs_non_certifies();
   return $resultat;
}
public function get_demande_certification($id){
   $model=new ModelGestionTransporteurs();
   $resultat=$model->get_demande_certification($id);
   return $resultat;
}
public function certifier_transporteur($id){
   $model=new ModelGestionTransporteurs();
   $model->certifier_transporteur($id);
}
public function valider_transporteur($id)
{
   $model=new ModelGestionTransporteurs();
   $model->valider_transporteur($id);
}
public function refuser_transporteur($id)
{
   $model=new ModelGestionTransporteurs();
   $model->refuser_transporteur($id);
}
public function get_transporteur($id)
{
   $model=new ModelGestionTransporteurs();
   return $model->get_transporteur($id);

}
public function afficher_demande_certification($id){
   ($this->view)->get_demande_certification($id);
}
public function afficher_modifier_transporteur($id){
   ($this->view)->modifier_transporteur($id);
}
public function afficher_list_transporteurs(){
   ($this->view)->get_list_transporteurs();
}
public function afficher_list_transporteurs_by_critere($critere,$value){
   ($this->view)->get_list_transporteurs_by_critere($critere,$value);
   
}
public function afficher_contenu(){
   ($this->view)->get_contenu();
}
 public function afficher_list_transorteurs_non_certifies(){
    ($this->view)->get_list_transporteurs_non_certifies();
 }
}
?>