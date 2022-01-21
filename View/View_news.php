<?php
class ViewNews
{
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
        if (isset($_SESSION["user_name"])) {
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
        } else {
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
        if (!isset($_SESSION["user_name"])) {
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
                <a class="nav-link " href="../Routeurs/InscriptionUtilisateur.php"><p class="text-dark">Inscription</p></a>
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

    public function get_list_news()
    {
        $controller = new ControllerNews();
        $resultat = $controller->get_list_news();
        $images = $controller->get_images_news();
        $tab = [];
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[$image["id_news"]] = $image["chemin"];
        }
        foreach ($resultat as $row) {
            array_push($tab, $row);
        }
        echo '
        <div class="container-fluid border bg-white text-dark my-3" id="catalogue_annonces">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Consultez les dernieres actualités.
                </h1>
                <p class="text-center">Vous pouvez consulter les dernieres actualites en relation avec notre site web</p>
            </div>
        </div>';
        echo '<div class="row">';
        foreach ($tab as $row) {
            echo '<div class="col-sm-6 my-2">';
            echo '<div class="card" id="' . $row["id_news"] . '">';
            echo '<div class="card-header"><h2>' . $row["titre"] . '</h2></div>';
            echo '<img class="card-img-top img-fluid" style="height:350px" src="' . $tab_images[$row["id_news"]] . '">';
            echo '<div class="card-body">
                        <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                     </div>';
            echo '<div class="card-footer">';
            echo "<a href='../Routeurs/News.php?id_news=" . $row["id_news"] . "'>Lire la suite ...</a>";
            echo '</div>';
            echo '</div>';
            echo "</div>";
        }
        echo "</div>";
        echo '</div>';
        $_GET["id_annonce"] = "";
        $controller->__destruct();
    }
}
