<?php 
require "../Connexion.php";
class ModelGestionTransporteurs{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","admin","admin");
}
function __destruct()
{
    
}
public function get_list_transporteurs(){
    $qtf="SELECT  * FROM transporteur where certifie=1";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_list_transporteurs_by_critere($critere,$value){
    $qtf="SELECT  * FROM transporteur where "."$critere="."'$value'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function enregistrer_modifications_transporteur($id,$nom,$prenom,$mdp,$email,$adresse){
    $qtf="UPDATE transporteur SET mot_de_passe='$mdp',nom='$nom',prenom='$prenom',email='$email',adresse='$adresse' WHERE id_transporteur='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function supprimer_transporteur($id){
    $qtf="DELETE FROM transporteur  WHERE id_transporteur='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function get_list_transporteurs_non_certifies(){
    $qtf="SELECT  * FROM transporteur where certifie=0";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
public function get_demande_certification($id){
    $qtf="SELECT * FROM demandecertification  WHERE id_transporteur='".$id."'";
    echo $qtf;
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
 }
 public function certifier_transporteur($id){
    $qtf="UPDATE transporteur set certifie=1 WHERE id_transporteur='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
 }
}
?>