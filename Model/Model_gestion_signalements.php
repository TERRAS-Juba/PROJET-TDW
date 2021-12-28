<?php 
require "../Connexion.php";
class ModelGestionSignalements{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","admin","admin");
}
function __destruct()
{
    
}
public function get_list_signalements(){
    $qtf="SELECT  * FROM signalement";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_client_signalement($id){
    $qtf="SELECT * FROM client  WHERE id_client='".$id."'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
public function get_tranporteur_signalement($id){
    $qtf="SELECT * FROM transporteur  WHERE id_transporteur='".$id."'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
}
?>