<?php
class ViewAccueil
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
    public function get_diaporama()
    {
        echo '
        <div class="container" id="diapo">
        <div class="row">
            <div class="col">
                <div id="diaporama" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <a href="#"> <img src="../Assets/image1.jpg" class="d-block w-100 h-100 img-thumbnail"></a>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <a href="#"> <img src="../Assets/image2.jpg" class="d-block w-100 h-100 img-thumbnail"></a>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <a href="#"><img src="../Assets/image3.jpg" class="d-block w-100 h-100 img-thumbnail"></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#diaporama" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#diaporama" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
                        <a class="nav-link" href="../Routeurs/Inscription.php">Inscription</a>
                    </li>
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
    public function get_zone_recherche()
    {
        echo '
        <div class="container-fluid border bg-secondary text-white" id="zone_recherche">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">
                        Effectuer une recherche selon vos besoins.
                    </h1>
                    <p class="text-center">Une recherche rapide et intuitive a votre disposition.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="../Routeurs/Accueil.php" method="post" id="form_recherche">
                <div class="col-sm-6 my-3">
                    <label class="my-2">Emplacement de départ</label>
                    <input type="text" required class="form-control" placeholder="Emplacement de départ" name="emplacement_depart" id="">
                </div>
                <div class="col-sm-6 my-3">
                    <label class="my-2">Emplacement de d\'arrivée</label>
                    <input type="text" required class="form-control" placeholder="Emplacement d\'arrivée" name="emplacement_arrive" id="">
                </div>
                <div class="col-sm-4 my-3">
                    <button type="submit" class="btn btn-primary p-10" name="recherche" id="btn-recherche">
                        Rechercher
                    </button>
                </div>
            </form>
        </div>
    </div>';
    }
    public function get_list_annonces()
    {
        $controller = new ControllerAccueil();
        $resultat = $controller->get_list_annonces();
        $images = $controller->get_images_annonces();
        $tab = [];
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        foreach ($resultat as $row) {
            array_push($tab, $row);
        }
        shuffle($tab);
        if ($resultat->rowCount() > 8) {
            echo '
        <div class="container-fluid border bg-white text-dark my-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Consultez le catalogue des annonces.
                </h1>
                <p class="text-center">Vous pouvez consulter notre catalogue et voir les annonces qui vous interesse.</p>
            </div>
        </div>';
            echo '<div class="row" id="catalogue_annonces">';
            foreach (array_slice($tab, 0, 8) as $row) {
                echo '<div class="col-sm-3 my-2">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '" alt="Card image cap">';
                echo '<div class="card-body">
                        <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                     </div>';
                echo '<div class="card-footer">';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo  '</div>';
                echo '</div>';
                echo "</div>";
            }
            echo "</div>";
            echo '</div>';
        } else {
            echo '
        <div class="container-fluid border bg-white text-dark my-3" id="catalogue_annonces">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Consultez le catalogue des annonces.
                </h1>
                <p class="text-center">Vous pouvez consulter notre catalogue et voir les annonces qui vous interesse.</p>
            </div>
        </div>';
            echo '<div class="row">';
            foreach ($tab as $row) {
                echo '<div class="col-sm-3 my-2">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '" alt="Card image cap">';
                echo '<div class="card-body">
                        <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                     </div>';
                echo '<div class="card-footer">';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '</div>';
                echo '</div>';
                echo "</div>";
            }
            echo "</div>";
            echo '</div>';
        }
        echo '<div class="row ">
        <div class="col-12 text-center">
        <a href="../Routeurs/Presentation.php" class="btn btn-primary rounded-pill text-center my-2 ">Comment sa marche ?</a>
        </div>
        </row>';
        $_GET["id_annonce"] = "";
    }
    public function get_annonces_by_emplacement($emplacement_depart, $emplcement_arrive)
    {
        $controller = new ControllerAccueil();
        $resultat = $controller->get_annonces_by_emplacement($emplacement_depart, $emplcement_arrive);
        $images = $controller->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[$image["id_annonce"]] = $image["chemin"];
        }
        echo '
        <div class="container-fluid border bg-white text-dark my-3" id="resultats_recherche">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Consultez les resultats de la recherche.
                </h1>
            </div>
        </div>';
        echo '<div class="row">';
        if ($resultat->rowCount() == 0) {
            echo '<div class="col my-2">';
            echo '<h1 class="text-center text-danger">Aucun résultat ne correspond a votre recherche</h1>';
            echo '</div>';
        } else {
            foreach ($resultat as $row) {
                echo '<div class="col-sm-3 my-2">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[$row["id_annonce"]] . '" alt="Card image cap">';
                echo '<div class="card-body"><p class="card-text">' . substr($row["description"], 0, 40) . '</p></div>';
                echo '<div class="card-footer">';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '</div>';
                echo '</div>';
                echo "</div>";
            }
        }
        echo "</div>";
        echo '<div class="row ">
        <div class="col-12 col-md-12 text-center">
        <a href="../Routeurs/Accueil.php" class="btn btn-primary rounded-pill text-center">Retour a la page principale</a>
        </div>
        </row>';
        echo "</div>";

        echo '</div>';
    }
}
