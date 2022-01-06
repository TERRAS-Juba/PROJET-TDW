<?php
require "../View/View_gestion_annonces.php";
require "../Model/Model_gestion_annonces.php";
class ControllerGestionAnnonces{
    private $view;
    public function __construct()
    {
       $this->view=new ViewGestionAnnonces();
    }
function __destruct()
{
    
}
public function get_list_annonces(){
   $model=new ModelGestionAnnonces();
   $resultat=$model->get_list_annonces();
   return $resultat;
}
public function afficher_list_annonces(){
    ($this->view)->get_list_annonces();
 }

public function supprimer_annonce($id){
    $model=new ModelGestionAnnonces();
   $model->supprimer_annonce($id);
}

public function get_list_annonces_by_critere($critere,$value){
   $model=new ModelGestionAnnonces();
   $resultat=$model->get_list_annonces_by_critere($critere,$value);
   return $resultat;
}
public function afficher_list_annonces_by_critere($critere,$value){
    ($this->view)->get_list_annonces_by_critere($critere,$value); 
 }
 
public function get_list_annonces_en_attente(){
   $model=new ModelGestionAnnonces();
   $resultat=$model->get_list_annonces_en_attente();
   return $resultat;
}
public function afficher_list_annonces_en_attente(){
    ($this->view)->get_list_annonces_en_attente();
 }
public function valider_annonce($id){
   $model=new ModelGestionAnnonces();
   $resultat=$model->valider_annonce($id);
   return $resultat;
}
public function afficher_contenu(){
   ($this->view)->get_contenu();
}
public function get_client_annonce($id){
   $model=new ModelGestionAnnonces();
   $resultat=$model->get_client_annonce($id);
   return $resultat;
}
public function get_transporteur_annonce($id){
   $model=new ModelGestionAnnonces();
   $resultat=$model->get_transporteur_annonce($id);
   return $resultat;
}
public function  set_tarif($id_annonce,$tarif){
   $model=new ModelGestionAnnonces();
   $model->set_tarif($id_annonce,$tarif);
}
public function afficher_set_tarif(){
   ($this->view)->set_tarif();
}
}
?>