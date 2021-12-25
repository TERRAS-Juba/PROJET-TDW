<?php 
require "../Connexion.php";
class ModelGestionAnnonces{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","admin","admin");
}
function __destruct()
{
    
}
public function get_list_annonces(){
    $qtf="SELECT  * FROM annonce where statut='valide'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_list_annonces_by_critere($critere,$value){
    $qtf="SELECT  * FROM annonce where "."$critere="."'$value'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function supprimer_annonce($id){
    $qtf="DELETE FROM annonce  WHERE id_annonce='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function get_list_annonces_en_attente(){
    $qtf="SELECT  * FROM annonce where statut='en attente'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
 public function valider_annonce($id){
    $qtf="UPDATE annonce set statut='valide' WHERE id_annonce='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
 }
 public function get_client_annonce($id){
    $qtf="Select * from client WHERE id_client='".$id."'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
 }public function get_transporteur_annonce($id){
    $qtf="Select * from transporteur WHERE id_transporteur='".$id."'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
 }
}
?>