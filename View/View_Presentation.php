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
            </div>
            <div class="col-md-2">
                <div class="d-grid">
                    <a href="#" class="my-2 btn btn-outline-primary btn-block rounded-pill">S"enregistrer</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid">
                    <a href="#" class="my-2 btn btn-primary btn-block rounded-pill">Connexion</a>
                </div>
            </div>
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
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=../Routeurs/Inscription.php"">Inscription</a>
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
                <div class=" col-sm-4">
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
    echo '
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-6" id="presentation">
                <img src="../Assets/image5.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            </div>
            <div class="col-6 text-center my-auto text-light">
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
                    <iframe src="../Assets/video.mp4" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    ';
}
}
?>