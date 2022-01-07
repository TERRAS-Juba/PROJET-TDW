<?php
require "../Connexion.php";
class ModelAccueil
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_list_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM annonce where statut='valide'");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_annonces_by_emplacement($emplacement_depart, $emplacement_arrive)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM annonce Where emplacement_depart=? and emplacement_arrive=?");
        $qtf->bindParam(1, $emplacement_depart);
        $qtf->bindParam(2, $emplacement_arrive);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_images_annonces()
    {
        $qtf = (($this->connexion)->connexion())->prepare("select * from annonce_image  inner join image on image.id_image= annonce_image.id_image");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function set_nb_vues($id)
    {
        $conn = ($this->connexion)->connexion();
        $prepare = $conn->prepare("UPDATE annonce SET nombre_vues=nombre_vues+1 where id_annonce=?");
        $prepare->bindParam(1, $id);
        $prepare->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_type_transport(){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("SELECT * FROM type_transport");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_moyen_transport(){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("SELECT * FROM moyen_transport");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_fourchette_poid(){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("SELECT * FROM fourchette_poid");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_fourchette_volume(){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("SELECT * FROM fourchette_volume");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_wilaya(){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("SELECT * FROM wilaya");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    } 
     public function ajouter_annonce($titre,$description,$emplacement_depart,$emplacement_arrive,$type_transport,$moyen_transport,$fourchette_poid,$fourchette_volume,$id_client,$id_annonce){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("INSERT INTO annonce(titre,description,emplacement_depart,emplacement_arrive,type_transport,moyen_transport,fourchette_poid,fourchette_volume,id_client,date_publication,nombre_vues,statut,id_annonce) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $qtf->bindParam(1,$titre);
        $qtf->bindParam(2,$description);
        $qtf->bindParam(3,$emplacement_depart);
        $qtf->bindParam(4,$emplacement_arrive);
        $qtf->bindParam(5,$type_transport);
        $qtf->bindParam(6,$moyen_transport);
        $qtf->bindParam(7,$fourchette_poid);
        $qtf->bindParam(8,$fourchette_volume);
        $qtf->bindParam(9,$id_client);
        $d=strtotime("now");
        $nombre_vues=0;
        $statut="en attente";
        $date=date("Y-m-d h:i:sa", $d);
        $qtf->bindParam(10,$date);
        $qtf->bindParam(11,$nombre_vues);
        $qtf->bindParam(12,$statut);
        $qtf->bindParam(13,$id_annonce);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function ajouter_image($id_image,$chemin){
        $conn = ($this->connexion)->connexion();
        $qtf = $conn->prepare("INSERT INTO image(id_image,chemin) VALUES(?,?)");
        $qtf->bindParam(1,$id_image);
        $qtf->bindParam(2,$chemin);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function ajouter_images_annonce($id_image,$id_annonce){
        $conn = ($this->connexion)->connexion();
        $requete=$conn->prepare("INSERT INTO annonce_image(id_image,id_annonce) VALUES(?,?)");
        $requete->bindParam(1,$id_image);
        $requete->bindParam(2,$id_annonce);
        $requete->execute();
        ($this->connexion)->deconnexion();
    }
}
?>