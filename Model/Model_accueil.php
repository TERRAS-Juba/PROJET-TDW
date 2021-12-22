<?php 
require "../Connexion.php";
class ModelAccueil{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","root","");
}
function __destruct()
{
    
}
public function get_list_annonces(){
    $qtf="SELECT  * FROM annonce";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_annonces_by_emplacement($emplacement_depart,$emplacement_arrive){
    $qtf='SELECT * FROM annonce Where emplacement_depart="'.$emplacement_depart.'" and emplacement_arrive="'.$emplacement_arrive.'"';
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    }
}
?>