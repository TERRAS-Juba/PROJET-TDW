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
        <div class="container" id="navbar">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="">Nexus Express</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Presentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contactez nous</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>';
    }
    public function get_footer()
    {
        echo '
        <footer>
        <div class="container text-center" id="bas-page">
            <div class="row border border-dark rounded my-2">
                <div class=" col-sm-4">
                <a class="nav-link" href="">
                    <h4 class="text-dark">Nexus Express</h4>
                </a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link" href=""><p class="text-dark">Presentation</p></a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link " href=""><p class="text-dark">News</p></a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link " href=""><p class="text-dark">Inscription</p></a>
            </div>
            <div class="col-sm-2">
                <a class="nav-link" href=""><p class="text-dark">Contactez nous</p></a>
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
        foreach ($resultat as $row) {
            echo '<div class="Container">
            <div class="row" id="details_annonce">
              <div class="col">
                <div class="card" id="' . $row["id_annonce"] . '">
                <div class="card-header"><h2>' . $row["titre"] . '</h2></div>
                <div class="card-body">
                                <h3>Description :</h3>
                                <p class="card-text">' . $row["description"] . '</p>
                                <h3>Type de transport :</h3>
                                <p class="card-text">' . $row["type_transport"] . '</p>
                                <h3>Poid :</h3>
                                <p class="card-text">' . $row["fourchette_poid"] . '</p>
                                <h3>Volume :</h3>
                                <p class="card-text">' . $row["fourchette_volume"] . '</p>
                             </div>
                             <div class="card-footer">
                                <h3>Point de depart :</h3>
                                <p class="card-text">' . $row["emplacement_depart"] . '</p>
                                <h3>Point d\' arrivée :</h3>
                  <p class="card-text">' . $row["emplacement_arrive"] . '</p>
                </div>
                </div>
              </div>
          </div>
          </div>';
        }
    }
}