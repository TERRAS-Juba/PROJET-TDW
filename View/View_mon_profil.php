<?php
class ViewMonProfil
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
                <a href="../Routeurs/InscriptionUtilisateur.php" class="my-2 btn btn-outline-primary btn-block rounded-pill">S"enregistrer</a>
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
    public function get_infos_utilisateur(){
        $controller_info=new ControllerMonProfil();
        $resultat=$controller_info->get_infos_utilisateur();
        echo' 
    <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-10 m-auto border border-5">
                    <h1 class="text-center">
                        Mes informations personnelles
                    </h1>';
                foreach($resultat as $row){
                    if($_SESSION["type_compte"]=="client"){
                    echo ' <label class="mt-2"><h5>Nom d\'utilisateur</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="'.$row["id_client"].'" readonly>';
                    }else{
                        echo ' <label class="mt-2"><h5>Nom d\'utilisateur</h5></label>
                        <br>
                        <input class="mt-2" style="width:50%" type="text" value="'.$row["id_transporteur"].'" readonly>';
                    }
                    echo '
                    <br> 
                    <label class="mt-2"><h5>Nom</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="'.$row["nom"].'" readonly>';
                    echo '
                    <br> 
                    <label class="mt-2"><h5>Prénom</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="'.$row["prenom"].'" readonly>';
                    echo '
                    <br> 
                    <label class="mt-2"><h5>Email</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="'.$row["email"].'" readonly>';
                    echo '
                    <br> 
                    <label class="mt-2"><h5>Adresse</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="'.$row["adresse"].'" readonly>';
                    echo '
                    <br> 
                    <label class="mt-2"><h5>Numero de telephone</h5></label>
                    <br>
                    <input class="my-2" style="width:50%" type="text" value="'.$row["numero_telephone"].'" readonly>';
                    if($_SESSION["type_compte"]=="transporteur"){
                        echo '
                        <br> 
                        <label class="mt-2"><h5>Certifié</h5></label>
                        <br>
                        <input class="my-2" style="width:50%" type="text" value="'.$row["certifie"].'" readonly>';
                    }
                }
                echo '
                </div>
            </div>
    </div>';
    }
    public function get_annonces_utilisateur(){
        $controller_info=new ControllerMonProfil();
        $annonces=$controller_info->get_annonces_utilisateur();
        $images=$controller_info->get_images_annonces();
        $tab_images=[];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo' 
    <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-sm-10 m-auto border border-5">';
                if($_SESSION["type_compte"]=="client"){
                    echo' <h1 class="text-center">
                    Mes annonce en attente de validation
                    </h1>';
                }else{
                    echo' <h1 class="text-center">
                    Mes offre de travail
                    </h1>';
                }
                    foreach ($annonces as $row) {
                        echo '<div class="col-sm-6 m-auto">';
                        echo '<div class="card" id="' . $row["id_annonce"] . '">';
                        echo '<div class="card-header">' . $row["titre"] . '</div>';
                        echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                        echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                        echo '<div class="card-footer">';
                        echo '<h5>Statut : '.$row['statut'].'</h5>';
                        echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                        echo  '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                echo '
                </div>
            </div>
    </div>';
    }
    public function get_annonces_valides_utilisateur(){
        $controller_info=new ControllerMonProfil();
        $annonces=$controller_info->get_annonces_valides_utilisateur();
        $images=$controller_info->get_images_annonces();
        $tab_images=[];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo' 
    <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-sm-10 m-auto border border-5">';
                if($_SESSION["type_compte"]=="client"){
                    echo' <h1 class="text-center">
                    Mes annonce validées
                    </h1>';
                }else{
                    echo' <h1 class="text-center">
                    Mes offre de travail
                    </h1>';
                }
                    foreach ($annonces as $row) {
                        echo '<div class="col-sm-6 m-auto">';
                        echo '<div class="card" id="' . $row["id_annonce"] . '">';
                        echo '<div class="card-header">' . $row["titre"] . '</div>';
                        echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                        echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                        echo '<div class="card-footer">';
                        echo '<h5>Statut : '.$row['statut'].'</h5>';
                        echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                        echo  '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                echo '
                </div>
            </div>
    </div>';
    }
    
}
