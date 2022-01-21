<?php
class ViewPresentation{
    public function get_header()
    {
        echo '
        <div class="container" id="header">
        <div class="row">
            <div class="col-md-5">
                <img src="../Assets/logo.png" alt="logo de l\'entreprise" class="float-start img-fluid">
            </div>
            <div class="col-md-3">
            </div>';
        if(isset($_SESSION["user_name"])){
            echo '
            <div class="col-md-2">
            <div class="d-grid">
                <a href="../Routeurs/MonProfil.php" class="my-2 btn btn-success btn-block rounded-pill">Mon profil</a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="d-grid">
                <a href="../Deconnexion.php" class="my-2 btn btn-danger btn-block rounded-pill">Se deconnecter</a>
            </div>
        </div>';
        }else{
            echo '
            <div class="col-md-2">
            <div class="d-grid">
                <a href="../Routeurs/InscriptionUtilisateur.php" class="my-2 btn btn-outline-primary btn-block rounded-pill">Inscription</a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="d-grid">
                <a href="../Routeurs/ConnexionUtilisateur.php"  class="my-2 btn btn-primary btn-block rounded-pill">Connexion</a>
            </div>
        </div>';
        }
        echo '
        </div>
    </div>';
    }
    public function get_menu()
    {
        echo '
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top my-2">
        <div class="container-fluid" id="navbar">
            <a class="navbar-brand" href="../Routeurs/Accueil.php">Nexus Express</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../Routeurs/Presentation.php">Presentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Routeurs/News.php">News</a>
                    </li>';
                    if(!isset($_SESSION["user_name"])){
                        echo ' 
                        <li class="nav-item">
                        <a class="nav-link" href="../Routeurs/InscriptionUtilisateur.php">Inscription</a>
                        </li>';
                    }
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="../Routeurs/Statistiques.php">Statistiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Routeurs/Contact.php">Contactez nous</a>
                    </li>

                </ul>
            </div>
            </div>
        </nav>';
    }
    public function get_footer()
    {
        echo '
        <footer>
        <div class="container text-center" id="bas-page">
            <div class="row border border-dark rounded my-2">
                <div class=" col-sm-2">
                <a class="nav-link" href="../Routeurs/Accueil.php">
                    <h4 class="text-dark">Nexus Express</h4>
                </a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link" href="../Routeurs/Presentation.php"><p class="text-dark">Presentation</p></a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link " href="../Routeurs/News.php"><p class="text-dark">News</p></a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link " href="../Routeurs/Inscription.php"><p class="text-dark">Inscription</p></a>
            </div>
            <div class="col-sm-2">
            <a class="nav-link" href="../Routeurs/Statistiques.php"><p class="text-dark">Statistiques</p></a>
        </div>
            <div class="col-sm-2">
                <a class="nav-link" href="../Routeurs/Contact.php"><p class="text-dark">Contactez nous</p></a>
            </div>
        </div>
        <div class="row">
            <p class="text-center">
                Ce site a été réalisé dans le cadre du module Technologies de developement web.
            </p>
            <p class="text-center">
                Touts droit réservés 2021/2022
            </p>
        </div>
        </div>
    </footer>
        ';
}
public function get_contenu(){
    $controller_presentation=new ControllerPresentation();
    $presentation=$controller_presentation->get_presentation();
    foreach($presentation as $row){
    echo '
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-sm-6">
                <img src="'.$row["image"].'" class="img-fluid">
            </div>
            <div class="col-sm-6 text-center my-auto text-light">
                <h1>Presentation de Nexus Express</h1>
                <p>Nexus Express est une application de mise en relation de chauffeur de véhicule de
                    divers types (Voitures, Camions, motos…) pour le transport de matériels ou de colis selon un tarif prédéfini.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 text-center my-auto ">
                <h1>Comment fonctionne notre site ?</h1>
                <p>Nous vous proposons une video explicative detaillée pour repondre a toutes vos questions
                    et expliquer toutes les fonctionalités du site.
                </p>
            </div>
        </div>
        <div class="row" >
            <div class="col-10 m-auto style=\'height:100px\'">
                <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" src="'.$row["video"].'" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    ';
}
}
}
?>