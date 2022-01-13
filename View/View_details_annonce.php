<?php
class ViewDetailsAnnonce
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
    function get_annonce_by_id($id)
    {
        $controller_details_annonce = new ControllerDetailsAnnonce();
        $resultat = $controller_details_annonce->get_annonce_by_id($id);
        $images = $controller_details_annonce->get_image_annonce_by_id($id);
        foreach ($resultat as $row) {
            echo '<div class="Container">
            <div class="row" id="details_annonce">
              <div class="col">
                <div class="card" id="' . $row["id_annonce"] . '">
                <div class="card-header"><h2>' . $row["titre"] . '</h2></div>';
            foreach ($images as $image) {
                if ($image["id_annonce"] == $id) {
                    $chemin = $image["chemin"];
                    echo '<img class="card-img-top img-fluid" src="' . $chemin . '" alt="Card image cap">';
                }
            }
            echo '<div class="card-body">
                                <h3>Description :</h3>
                                <p class="card-text">' . $row["description"] . '</p>
                                <h3>Type de transport :</h3>
                                <p class="card-text">' . $row["type_transport"] . '</p>
                                <h3>Poid :</h3>
                                <p class="card-text">' . $row["fourchette_poid"] . '</p>
                                <h3>Volume :</h3>
                                <p class="card-text">' . $row["fourchette_volume"] . '</p>
                                <h3>Nombres de vues :</h3>
                                <p class="card-text">' . $row["nombre_vues"] . '</p>
                             </div>
                             <div class="card-footer">
                                <h3>Point de depart :</h3>
                                <p class="card-text">' . $row["emplacement_depart"] . '</p>
                                <h3>Point d\' arrivée :</h3>
                  <p class="card-text">' . $row["emplacement_arrive"] . '</p>';
            if (isset($_SESSION["type_compte"]) && isset($_SESSION["user_name"])) {
                if ((($row["statut"] == "valide" || $row["statut"] == "transaction" || $row["statut"] == "confirme") && isset($_SESSION["type_compte"]) && ($row["id_client"] == $_SESSION["user_name"] || $row["id_transporteur"] == $_SESSION["user_name"])) || ($_SESSION["type_compte"] == "administrateur")) {
                    echo '  
                    <h3>Tarif :</h3>
                    <p class="card-text">' . $row["tarif"] . '</p>';
                }
                if ($_SESSION["type_compte"] == "administrateur") {
                    echo '  
                    <h3>ID Client :</h3>
                    <p class="card-text">' . $row["id_client"] . '</p>';
                }
                if ($_SESSION["type_compte"] == "administrateur" && ($row["statut"]=="confirme"||$row["statut"]=="transaction" )) {
                    echo '  
                    <h3>ID Transporteur :</h3>
                    <p class="card-text">' . $row["id_transporteur"] . '</p>';
                }
            }
            echo '
                </div>
                </div>
              </div>
          </div>
          </div>';
        }
    }
}
