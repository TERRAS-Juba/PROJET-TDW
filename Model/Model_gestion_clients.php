<?php 
require "../Connexion.php";
class ModelGestionClients{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","admin","admin");
}
function __destruct()
{
    
}
public function get_list_clients(){
    $qtf="SELECT  * FROM client";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function get_list_clients_by_critere($critere,$value){
    $qtf="SELECT  * FROM client where "."$critere="."'$value'";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function enregistrer_modifcations_client($id,$nom,$prenom,$mdp,$email,$adresse){
    $qtf="UPDATE client SET mot_de_passe='$mdp',nom='$nom',prenom='$prenom',email='$email',adresse='$adresse' WHERE id_client='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function supprimer_client($id){
    $qtf="DELETE FROM client  WHERE id_client='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
}
?>