<?php
require "../View/View_gestion_signalement.php";
require "../Model/Model_gestion_signalements.php";
class ControllerGestionSignalements{
    private $view;
    public function __construct()
    {
       $this->view=new ViewGestionSignalements();
    }
function __destruct()
{
    
}
public function afficher_contenu(){
    ($this->view)->get_contenu();
 }
public function get_list_signalements(){
   $model=new ModelGestionSignalements();
   $resultat=$model->get_list_signalements();
   return $resultat;
}
public function afficher_list_signalements(){
   ($this->view)->get_list_signalements();
}
public function get_client_signalement($id){
    $model=new ModelGestionSignalements();
    $resultat=$model->get_client_signalement($id);
    return $resultat;
}
public function get_transporteur_signalement($id){
    $model=new ModelGestionSignalements();
    $resultat=$model->get_tranporteur_signalement($id);
    return $resultat;
}
/*
public function supprimer_news($id){
   $model=new ModelGestionNews();
   $model->supprimer_news($id);
}
public function afficher_modifier_news(){
   ($this->view)->modifier_news();
}
public function inserer_news($id_news,$titre,$description,$date){
   $model=new ModelGestionNews();
   $model->inserer_news($id_news,$titre,$description,$date);
}
public function afficher_inserer_news(){
   ($this->view)->inserer_news();
}
public function enregistrer_modifcations_news($id,$titre,$description){
   $model=new ModelGestionNews();
   $model->enregistrer_modifcations_news($id,$titre,$description);
}
public function enregistrer_images_news($id,$id_image,$chemin){
   $model=new ModelGestionNews();
   $model->enregistrer_images_news($id,$id_image,$chemin);
}*/
}
?>