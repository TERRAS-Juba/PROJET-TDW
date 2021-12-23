<?php 
require "../Connexion.php";
class ModelNews{
private $connexion;
function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","root","");
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
    public function get_images_news(){
    $qtf="select * from news_image  inner join image on image.id_image= news_image.id_image";
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
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