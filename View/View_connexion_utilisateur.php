<?php
class ViewConnexionUtilisateur
{
    public function connexion()
    {
        echo ' <div class="container-fluid">
<div class="row">
    <div class="col-sm-7">
        <img style="width:100%; height:33.33%" src="../Assets/user.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
        <img style="width:100%; height:33.33%" src="../Assets/user2.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
        <img style="width:100%; height:33.33%" src="../Assets/user3.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
    </div>
    <div class="col-sm-5">
        <div class="p-5 bg-secondary text-center mb-5 mt-1 container-fluid">
            <h1 class="text-light">Bienvenu a Nexus express</h1>
        </div>
        <form class="border border-5 p-2" action="../Routeurs/ConnexionUtilisateur.php" method="post">
            <label class="mt-2">
                <h4>Nom d\'utilisateur :</h4>
            </label>
            <input class="form-control my-2" type="text" name="user_name" required placeholder="Entrez votre nom d utilisateur" value="' . (isset($_POST["user_name"]) ? $_POST["user_name"] : "") . '">
                <h4>Mot de passe :</h4>
            </label>
            <input class="form-control mt-2" type="password" name="user_password" required placeholder="Entrez votre mot de passe" value="' . (isset($_POST["user_password"]) ? $_POST["user_password"] : "") . '">
            <label class="mt-2">
                <h4>Type de compte :</h4>
            </label>
            <div class="form-check mt-2">
                <input type="radio" class="form-check-input" name="type_compte" value="client" checked>
                <label class="form-check-label ">
                    <h5>Client</h5>
                </label>
            </div>
            <div class="form-check mt-2">
                <input type="radio" class="form-check-input" name="type_compte" value="transporteur" >
                <label class="form-check-label">
                    <h5>Transporteur</h5>
                </label>
            </div>
                    <button style="width:100%" name="connexion" class="rounded btn btn-lg btn-block btn-success my-5 pt-2" type="submit">Connexion</button>
                    <a class="text-dark" href="../Routeurs/InscriptionUtilisateur.php"><h6>Vous n\'avez pas un compte ?</h6></a>
                </form>
            </div>
        </div>
    </div>';
    }
}
