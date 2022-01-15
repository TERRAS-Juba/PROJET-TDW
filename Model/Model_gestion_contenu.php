<?php
require "../Connexion.php";
class ModelGestionContenu
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Connexion("base_projet", "127.0.0.1", "admin", "admin");
    }
    function __destruct()
    {
    }
    public function get_list_type_transport()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM type_transport");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_moyen_transport()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM moyen_transport");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_fourchette_poid()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM fourchette_poid");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_list_fourchette_volume()
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM fourchette_volume");
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_type_transport($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM type_transport WHERE id_type=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_moyen_transport($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM moyen_transport WHERE id_moyen=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_fourchette_poid($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM fourchette_poid WHERE id_fourchette=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function get_fourchette_volume($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("SELECT  * FROM fourchette_volume WHERE id_fourchette=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
        return $qtf;
    }
    public function modifier_type_transport($id,$libele,$garantie)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE type_transport set libele=?,garantie=? where  id_type=?");
        $qtf->bindParam(1,$libele);
        $qtf->bindParam(2,$garantie);
        $qtf->bindParam(3,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function ajouter_type_transport($libele,$garantie)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO type_transport(libele,garantie) VALUES(?,?)");
        $qtf->bindParam(1,$libele);
        $qtf->bindParam(2,$garantie);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function supprimer_type_transport($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM  type_transport where  id_type=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function modifier_moyen_transport($id,$libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE moyen_transport set libele=?  where id_moyen=?");
        $qtf->bindParam(1,$libele);
        $qtf->bindParam(2,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function ajouter_moyen_transport($libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO moyen_transport(libele) VALUES(?)");
        $qtf->bindParam(1,$libele);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function supprimer_moyen_transport($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM  moyen_transport where  id_moyen=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function modifier_fourchette_poid($id,$libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE fourchette_poid set libele=?  where id_fourchette=?");
        $qtf->bindParam(1,$libele);
        $qtf->bindParam(2,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function ajouter_fourchette_poid($libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO fourchette_poid(libele) VALUES(?)");
        $qtf->bindParam(1,$libele);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function supprimer_fourchette_poid($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM  fourchette_poid where  id_fourchette=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function modifier_fourchette_volume($id,$libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("UPDATE fourchette_volume set libele=?  where id_fourchette=?");
        $qtf->bindParam(1,$libele);
        $qtf->bindParam(2,$id);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    } 
    public function ajouter_fourchette_volume($libele)
    {
        $qtf = (($this->connexion)->connexion())->prepare("INSERT INTO fourchette_volume(libele) VALUES(?)");
        $qtf->bindParam(1,$libele);
        $qtf->execute();
        ($this->connexion)->deconnexion();
    }
    public function supprimer_fourchette_volume($id)
    {
        $qtf = (($this->connexion)->connexion())->prepare("DELETE FROM  fourchette_volume where  id_fourchette=?");
        $qtf->bindParam(1,$id);
        $qtf->execute();
    }
       
}
?>