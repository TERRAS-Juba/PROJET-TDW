<?php 
require "../Connexion.php";
class ModelStatistiques{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","root","");
}
function __destruct()
{
    
}
public function get_nombre_annonces(){
    $qtf="SELECT COUNT(*) as nb FROM annonce";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_nombre_clients(){
    $qtf="SELECT COUNT(*) as nb FROM client";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_nombre_transporteurs(){
    $qtf="SELECT COUNT(*) as nb FROM transporteur";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
    public function get_nombre_transporteurs_certifies(){
        $qtf="SELECT COUNT(*) as nb FROM transporteur where certifie=1";
        $resultat=(($this->connexion)->connexion())->query($qtf);
        ($this->connexion)->deconnexion();
        return $resultat;
    }
    public function get_nombre_news(){
        $qtf="SELECT COUNT(*) as nb FROM news";
        $resultat=(($this->connexion)->connexion())->query($qtf);
        ($this->connexion)->deconnexion();
        return $resultat;
    }

}
?>