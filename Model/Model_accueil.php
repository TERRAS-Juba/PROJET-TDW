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
}
?>