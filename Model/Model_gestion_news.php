<?php 
require "../Connexion.php";
class ModelGestionNews{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","admin","admin");
}
function __destruct()
{
    
}
public function get_list_news(){
    $qtf="SELECT  * FROM news";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
    
}
public function supprimer_news($id){
    $qtf="DELETE FROM news  WHERE id_news='".$id."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
 public function enregistrer_modifcations_news($id_news,$titre,$description){
    $qtf="UPDATE news SET titre='$titre',description='$description' WHERE id_news='".$id_news."'";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function inserer_news($id_news,$titre,$description,$date_ajout){
    $qtf="Insert into news(id_news,titre,description,date_ajout,nombre_vues) Values('$id_news','$titre','$description','$date_ajout','0')";
    (($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
}
public function enregistrer_images_news($id_news,$id_image,$chemin){
$qtf="DELETE from news_image where id_news='$id_news'";
(($this->connexion)->connexion())->query($qtf);
$qtf="INSERT INTO news_image(id_image,id_news) VALUES('$id_image','$id_news')";
(($this->connexion)->connexion())->query($qtf);
$qtf="INSERT INTO image(id_image,chemin) VALUES('$id_image','$chemin')";
(($this->connexion)->connexion())->query($qtf);
($this->connexion)->deconnexion();
}
public function set_nb_vues($id){
    $conn=($this->connexion)->connexion();
    $prepare=$conn->prepare("UPDATE news SET nombre_vues=nombre_vues+1 where id_news=?");
    $prepare->bindParam(1,$id);
    $prepare->execute();
    ($this->connexion)->deconnexion();
}
}
?>