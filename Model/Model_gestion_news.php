<?php
require_once  "../Connexion.php";
class ModelGestionNews
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("TDW", "127.0.0.1", "admin", "admin");
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
    public function supprimer_news($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM news  WHERE id_news=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function enregistrer_modifcations_news($id_news, $titre, $description)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE news SET titre=? ,description=? WHERE id_news=?");
        $qtf->bindParam(1, $titre);
        $qtf->bindParam(2, $description);
        $qtf->bindParam(3, $id_news);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function inserer_news($id_news, $titre, $description, $date_ajout)
    {
        $qtf = (($this->connexion)->connexion())->prepare("Insert into news(id_news,titre,description,date_ajout,nombre_vues) Values(?,?,?,?,'0')");
        $qtf->bindParam(1, $id_news);
        $qtf->bindParam(2, $titre);
        $qtf->bindParam(3, $description);
        $qtf->bindParam(4, $date_ajout);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function enregistrer_images_news($id_news, $id_image, $chemin)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE from news_image where id_news=?");
        $qtf->bindParam(1, $id_news);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO news_image(id_image,id_news) VALUES(?,?)");
        $qtf->bindParam(1, $id_image);
        $qtf->bindParam(2, $id_news);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO image(id_image,chemin) VALUES(?,?)");
        $qtf->bindParam(1, $id_image);
        $qtf->bindParam(2, $chemin);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function set_nb_vues($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE news SET nombre_vues=nombre_vues+1 where id_news=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function get_news($id){
        $qtf = (($this->connexion)->connexion())->prepare("SELECT * FROM news WHERE id_news=?");
        $qtf->bindParam(1, $id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
}
?>