<?php
session_start();
$type = $_SESSION['type_compte'];
unset($_SESSION['user_name']);
unset($_SESSION['user_password']);
unset($_SESSION['type_compte']);
if ($type === "administrateur") {
   header("location:./Routeurs/ConnexionAdministrateur.php");
} else {
   header("location:./Routeurs/ConnexionUtilisateur.php");
}
