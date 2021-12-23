<?php
require "../View/View_Presentation.php";
class ControllerPresentation{
    private $view;
    public function __construct()
    {
       $this->view=new ViewPresentation();
    }
function __destruct()
{
    
}
public function afficher_header(){
    ($this->view)->get_header();
 }
 public function afficher_menu(){
  ($this->view)->get_menu();
 }
 public function afficher_footer(){
  ($this->view)->get_footer();
 }
 public function afficher_contenu(){
    ($this->view)->get_contenu();
 }
}
?>