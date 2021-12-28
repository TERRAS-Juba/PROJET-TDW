<?php
require "../View/View_gestion_news.php";
require "../Model/Model_gestion_news.php";
class ControllerGestionNews{
    private $view;
    public function __construct()
    {
       $this->view=new ViewGestionNews();
    }
function __destruct()
{
    
}
public function get_list_news(){
   $model=new ModelGestionNews();
   $resultat=$model->get_list_news();
   return $resultat;
}
public function afficher_list_news(){
   ($this->view)->get_list_news();
}
public function afficher_contenu(){
   ($this->view)->get_contenu();
}
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
}
}
?>