<?php
class ViewContact{
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
public function get_contenu(){
    echo '
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 text-center my-auto ">
                <h1>Vous rencontrez des problemes ?</h1>
                <p>Veuillez nous contacter aux coordonées suivants
                </p>
            </div>
        </div>
        <div class="row" >
            <div class="col-10 m-auto">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Adresse mail</td>
                            <td><a href="mailto:adminnexus@gmail.com">adminnexus@gmail.com</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Service client</td>
                            <td>020904129</td>
                        </tr>
                        <tr>
                            <td scope="row">Notre siege social</td>
                            <td>30 Rue des freres Kadri, Hydra, Alger.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ';

}
}
?>