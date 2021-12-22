<?php
require_once "../Connexion.php";
class ModelDetailsAnnonce{
    private $connexion;
    function __construct()
{
    $this->connexion=new Connexion("base_projet","127.0.0.1","root","");
}
function __destruct()
{
    
}
public function get_annonce_by_id($id){
    $qtf='SELECT  * FROM annonce WHERE id_annonce="'.$id.'"';
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
public function get_image_annonce_by_id($id){
    $qtf='select * from image inner join annonce_image on image.id_image=annonce_image.id_image';
    $resultat=(($this->connexion)->connexion())->query($qtf);
    ($this->connexion)->deconnexion();
    return $resultat;
}
}
?>