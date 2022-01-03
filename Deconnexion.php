<?php
session_start();
   unset($_SESSION['user_name']);
   unset($_SESSION['user_password']);
   unset($_SESSION['type_compte']);
   unset($_SESSION['connection']);
   header("location:./Routeurs/ConnexionUtilisateur.php");

?>