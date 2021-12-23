<?php
require "../View/View_dashboard_administrateur.php";
class ControllerDashboardAdministrateur{
    private $view;
    public function __construct()
    {
       $this->view=new ViewDashboardAdministrateur();
    }
function __destruct()
{
    
}
 public function afficher_contenu(){
    ($this->view)->get_contenu();
 }
}
?>