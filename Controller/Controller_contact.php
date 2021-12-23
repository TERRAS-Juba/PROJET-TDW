<?php
require "../View/View_contact.php";
class ControllerContact{
    private $view;
    public function __construct()
    {
       $this->view=new ViewContact();
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