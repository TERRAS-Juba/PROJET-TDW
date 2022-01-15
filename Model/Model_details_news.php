<?php
require_once "../Connexion.php";
class ModelDetailsNews
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "root", "");
    }
    function __destruct()
    {
    }
    public function get_news_by_id($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM news WHERE id_news=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_image_news_by_id($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("Select * from (select news.id_news,news_image.id_image from news inner join news_image where news.id_news=news_image.id_news) as T inner join image on T.id_image = image.id_image");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
?>