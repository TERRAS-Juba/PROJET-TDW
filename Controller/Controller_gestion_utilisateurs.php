<?php
require_once  "../View/View_GestionsUtilisateurs.php";
class ControllerGestionUtilisateurs
{
   private $view;
   private $model;
   public function __construct()
   {
      $this->view = new ViewGestionUtilisateurs();
   }
   function __destruct()
   {
   }
   public function afficher_contenu()
   {
      ($this->view)->get_contenu();
   }
}
