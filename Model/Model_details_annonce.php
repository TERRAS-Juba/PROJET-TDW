<?php
require_once "../Connexion.php";
class ModelDetailsAnnonce
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_annonce_by_id($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM annonce WHERE id_annonce=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_image_annonce_by_id($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("select * from image inner join annonce_image on image.id_image=annonce_image.id_image");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
?>