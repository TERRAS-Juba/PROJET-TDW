<?php
require_once  "../Connexion.php";
class ModelNews
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_list_news()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM news");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_images_news()
    {
        $qtf = (($this->connexion)->connexion())->prepare("select * from news_image  inner join image on image.id_image= news_image.id_image");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function set_nb_vues($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE news SET nombre_vues=nombre_vues+1 where id_news=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
}
