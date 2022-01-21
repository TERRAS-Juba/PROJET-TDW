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
    public function get_infos_utilisateur()
    {
        $controller_info = new ControllerMonProfil();
        $resultat = $controller_info->get_infos_utilisateur();
        echo ' 
    <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-10 m-auto border border-5">
                    <h1 class="text-center">
                        Mes informations personnelles
                    </h1>';
        foreach ($resultat as $row) {
            if ($_SESSION["type_compte"] == "client") {
                echo ' <label class="mt-2"><h5>Nom d\'utilisateur</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="' . $row["id_client"] . '" readonly>';
            } else {
                echo ' <label class="mt-2"><h5>Nom d\'utilisateur</h5></label>
                        <br>
                        <input class="mt-2" style="width:50%" type="text" value="' . $row["id_transporteur"] . '" readonly>';
            }
            echo '
                    <br> 
                    <label class="mt-2"><h5>Nom</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="' . $row["nom"] . '" readonly>';
            echo '
                    <br> 
                    <label class="mt-2"><h5>Prénom</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="' . $row["prenom"] . '" readonly>';
            echo '
                    <br> 
                    <label class="mt-2"><h5>Email</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="' . $row["email"] . '" readonly>';
            echo '
                    <br> 
                    <label class="mt-2"><h5>Adresse</h5></label>
                    <br>
                    <input class="mt-2" style="width:50%" type="text" value="' . $row["adresse"] . '" readonly>';
            echo '
                    <br> 
                    <label class="mt-2"><h5>Numero de telephone</h5></label>
                    <br>
                    <input class="my-2" style="width:50%" type="text" value="' . $row["numero_telephone"] . '" readonly>';
            if ($_SESSION["type_compte"] == "transporteur") {
                echo '
                        <br> 
                        <label class="mt-2"><h5>Certifié</h5></label>
                        <br>
                        <input class="my-2" style="width:50%" type="text" value="' . $row["certifie"] . '" readonly>';
            }
            echo ' 
            <br>
            <a class="my-2 btn btn-warning" style="width:35%" href="../Routeurs/MonProfil.php?modifier_profil=' . $_SESSION["user_name"] . '">Modifier mon profil</a>';
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_valides_client()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_valides_client();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes annonce validées
                </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '<div class="col-sm-6 m-auto">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                $transporteurs = $controller_info->get_list_transporteurs();
                echo '
                <form class="border border-5 p-2 my-2" action="../Routeurs/MonProfil.php" method="post">
                <input type="text" value="' . $row["id_annonce"] . '" name="id_annonce"  class="invisible form-control">
                <select class="form-select" aria-label="Selectionnez un chauffeur" name="id_transporteur">';
                foreach ($transporteurs as $transporteur) {
                    global $bool1;
                    global $bool2;
                    global $cpt;
                    $trajets = $controller_info->recuperer_list_trajets_transporteur($transporteur["id_transporteur"]);
                    foreach ($trajets as $trajet) {
                        if ($trajet["num_wilaya"] == $row["emplacement_depart"]) {
                            $bool1 = 1;
                            $cpt = $cpt + 1;
                        }
                        if ($trajet["num_wilaya"] == $row["emplacement_arrive"]) {
                            $bool2 = 1;
                            $cpt = $cpt + 1;
                        }
                    }
                    if ($bool1 == 1 && $bool2 == 1) {
                        echo '<option>' . $transporteur["id_transporteur"] . '</option>';
                    }
                    $bool1 = 0;
                    $bool2 = 0;
                }
                echo '</select>
                <button style="width:100%" name="ajouter_transporteur" class="rounded btn btn-lg btn-block btn-success my-2 pt-2" type="submit">Selectionner un transporteur</button>
                 </form>';
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_en_attente_client()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_en_attente_client();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes annonce en attente de validation
                    </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '<div class="col-sm-6 m-auto">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                echo '<a class="my-2 btn btn-danger m-2" href="../Routeurs/MonProfil.php?id_annonce=' . $row["id_annonce"] . '"  onclick=" return confirm(\'Voulez-vous vraiment supprimer cette annonce ?\')">Supprimer l\'annonce</a>';
                echo '<a class="my-2 btn btn-warning" href="../Routeurs/MonProfil.php?modifier_annonce=' . $row["id_annonce"] . '"  onclick=" return confirm(\'Voulez-vous vraiment modifier cette annonce ?\')">Modifier l\'annonce</a>';
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_transaction_client()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_transaction_client();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes annonce en attente de validation par un transporteur
                 </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '
                <div class="col-sm-6">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo '<h5>ID Transporteur choisis : ' . $row['id_transporteur'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_transaction_transporteur()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_transaction_transporteur();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        $certifications = $controller_info->get_certification_transporteur();
        global $certifie;
        $certifie = 0;
        foreach ($certifications as $row) {
            $certifie = $row["certifie"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes offres de travail
                    </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '<div class="col-sm-6 m-auto">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo '<h5>ID Client  : ' . $row['id_client'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                echo '<a class="m-2 btn btn-success" href="../Routeurs/MonProfil.php?annonce_accepte=' . $row["id_annonce"] . '&garantie=' . $row["garantie"] . '&certifie=' . $certifie . '"  onclick=" return confirm(\'Voulez-vous vraiment accepter cette annonce ?\')">Accepter l\'offre</a>';
                echo '<a class="m-2 btn btn-danger"  href="../Routeurs/MonProfil.php?annonce_decline=' . $row["id_annonce"] . '" onclick=" return confirm(\'Voulez-vous vraiment decliner cette annonce ?\')">Decliner l\'offre</a>';
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_confirmes_transporteur()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_confirmes_transporteur();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes offres de travail confirmées
                    </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '<div class="col-sm-6 m-auto">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo '<h5>ID Client  : ' . $row['id_client'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                echo "<a class='btn btn-danger my-2'  style='width:50%;' href='../Routeurs/MonProfil.php?id_annonce_signalement=" . $row["id_annonce"] . "&id_client_signalement=" . $row["id_client"] . "&id_transporteur_signalement=" . $row["id_transporteur"] . "'>Signaler</a>";
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_annonces_confirmes_client()
    {
        $controller_info = new ControllerMonProfil();
        $annonces = $controller_info->get_annonces_confirmes_client();
        $images = $controller_info->get_images_annonces();
        $tab_images = [];
        foreach ($images as $image) {
            $tab_images[strval($image["id_annonce"])] = $image["chemin"];
        }
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                    Mes annonces confirmes
                    </h1>';
        if ($annonces->rowCount() == 0) {
            echo ' <h1 class="text-center text-danger">
                    Aucune annonce disponbile
                    </h1>';
        } else {
            foreach ($annonces as $row) {
                echo '<div class="col-sm-6 m-auto">';
                echo '<div class="card" id="' . $row["id_annonce"] . '">';
                echo '<div class="card-header">' . $row["titre"] . '</div>';
                echo '<img class="card-img-top img-fluid" style="height: 250px" src="' . $tab_images[strval($row["id_annonce"])] . '">';
                echo '<div class="card-body">
                                <p class="card-text">' . substr($row["description"], 0, 40) . '</p>
                             </div>';
                echo '<div class="card-footer">';
                echo '<h5>Statut : ' . $row['statut'] . '</h5>';
                echo '<h5>ID Transporteur choisis : ' . $row['id_transporteur'] . '</h5>';
                echo "<a href='../Routeurs/Accueil.php?id_annonce=" . $row["id_annonce"] . "'>Lire la suite ...</a>";
                echo '<br>';
                echo "<a class='btn btn-danger my-2'  style='width:50%;' href='../Routeurs/MonProfil.php?id_annonce_signalement=" . $row["id_annonce"] . "&id_client_signalement=" . $row["id_client"] . "&id_transporteur_signalement=" . $row["id_transporteur"] . "'>Signaler</a>";
                echo '<br>';
                echo "<a class='btn btn-warning my-2'  style='width:50%;' href='../Routeurs/MonProfil.php?id_annonce_note=" . $row["id_annonce"] . "&id_client_note=" . $row["id_client"] . "&id_transporteur_note=" . $row["id_transporteur"] . "'>Noter Transporteur</a>";
                echo  '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '
                </div>
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function get_certification_transporteur()
    {
        $controller_info = new ControllerMonProfil();
        $certification = $controller_info->get_certification_transporteur();
        echo ' 
    <div class="container border border-5 my-5">
            <div class="row">
                <h1 class="text-center">
                   Statut de ma demande de certification
                </h1>
            </div>
                ';
        foreach ($certification as $row) {
            if ($row["certifie"] == "en attente") {
                echo '
                    <h3 class="text-center text-success">
                    Votre demande est attente de verification par un administrateur.
                    <h4>Statut de demande de certification: <h4 class="text-warning">' . $row["certifie"] . '</h4></h4>
                    </h3>';
            } else if (($row["certifie"] == "en cours de traitement")) {
                echo '
                <h3 class="text-center text-success">
                Votre demande est a été bien recue et en est en cours de traitement.
                <h4>Statut de demande de certification: <h4 class="text-warning">' . $row["certifie"] . '</h4></h4>
                </h3>';
            } else if (($row["certifie"] == "valide")) {
                echo '
                <div class="row p-3">
                <h3 class="text-center text-success">
                Votre demande a bien été recue par un administrateur.</h3>
                <p>Veuillez vous presenter a notre siege social pour completer votre certification avec les documents suivants :</p>
                <ul>
                <li>02 photos.</li>
                <li>02 Certificats de naissance.</li>
                <li>01 photocopie de carte d\'identite.</li>
                <li>01 photocopie de permis de conduite.</li>
                </ul>
                </row>
                <h4>Statut de demande de certification: <h4 class="text-warning">' . $row["certifie"] . '</h4></h4>';
            } else if (($row["certifie"] == "certfiee")) {
                echo '
                <div class="row p-3">
                <h3 class="text-center text-success">
                Votre demande a été acceptée.</h3>
                <h4 class="text-center">Vous etes a present un transporteur certifié par notre société.</h4>
                </row>
                <h4>Statut de demande de certification: <h4 class="text-success">' . $row["certifie"] . '</h4></h4>';
            } else {
                echo '
                <div class="row p-3">
                <h3 class="text-center text-danger">
                Votre demande a été refusée.</h3>
                <h4 class="text-center">Votre demande n\'a pas pus etre satisfaite. Nous vous invitons a nous contacter via nos coordonnées presents dans la section contact pour comprendre les raisons de ce refus.</h4>
                </row>
                <h4>Statut de demande de certification: <h4 class="text-danger">' . $row["certifie"] . '</h4></h4>';
            }
        }

        echo '
            </div>
    </div>';
        $controller_info->__destruct();
    }
    public function effectuer_signalement($id_annonce, $id_client, $id_transporteur)
    {
        echo '
<div class="container">
<div class="row">
        <div class="col-12 my-auto bg-secondary">
        <div class="col-12 my-auto bg-secondary">
           <h1 class="text-center my-2 text-light">Effectuer signalement</h1>
        </div>
            <form action="../Routeurs/MonProfil.php" method="post">
            <label class="mt-2"><h5>ID Annonce :</h5></label>
                <input class="form-control my-2" type="text" name="id_annonce" readonly value="' . $id_annonce . '" >
                <label class="mt-2"><h5>ID Client :</h5></label>
                <input class="form-control my-2" type="text" name="id_client" readonly value="' . $id_client . '" >
                <label class="mt-2"><h5>ID Transporteur :</h5></label>
                <input class="form-control my-2" type="text" name="id_transporteur" readonly value="' . $id_transporteur . '" >
                <label class="mt-2"><h5>Titre :</h5></label>
                <input class="form-control my-2" type="text" name="titre" placeholder="Entrez un titre" required >
                <label class="mt-2"><h5>Description :</h5></label>
                <input class="form-control my-2" type="text" name="description" placeholder="Entrez ue description" required >
                <button name="effectuer_signalement"class="my-2 btn btn-danger my-4" type="submit">Effectuer signalement</button>
            </form>
        </div>
    </div>
    </div>
';
    }
    public function noter_transporteur($id_transporteur)
    {
        echo '
        <div class="container">
        <div class="row">
                <div class="col-12 my-auto bg-secondary">
                <div class="col-12 my-auto bg-secondary">
                   <h1 class="text-center my-2 text-light">Noter un transporteur</h1>
                </div>
                    <form action="../Routeurs/MonProfil.php" method="post">
                        <label class="mt-2"><h5>ID Transporteur :</h5></label>
                        <input class="form-control my-2" type="text" name="id_transporteur" readonly value="' . $id_transporteur . '" >
                        <label class="mt-2"><h5>Note 0 et 100 :</h5></label>
                        <input class="form-control my-2" type="number" name="note" min="0" max="100">
                        <button name="noter_transporteur" class="my-2 btn btn-success my-4" type="submit">Attribuer une note</button>
                    </form>
                </div>
            </div>
            </div>
        ';
    }
    public function modifier_profil()
    {
        $controller_profil = new ControllerMonProfil();
        $infos = $controller_profil->get_infos_utilisateur();
        foreach ($infos as $info) {
            if (isset($_SESSION["user_name"])) {
                echo '
        <div class="container-fluid border bg-white text-dark my-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Modifier mon profil
                </h1>
            </div>
        </div>
        <div class="container-fluid my-2 p-2">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <form class="border border-5 p-2" action="../Routeurs/MonProfil.php" method="post">
                    <label class="mt-2">
                        <h4>Nom :</h4>
                    </label>
                    <input class="form-control my-2" type="text" name="nom" required placeholder="Entrez un nouveau nom" value="' . $info["nom"] . '">
                    <label class="mt-2">
                        <h4>Prenom :</h4>
                    </label>
                    <input class="form-control my-2" type="text" name="prenom" required placeholder="Entrez un nouveau prenom" value="' . $info["prenom"] . '">
                    <label>
                    <h4>Email :</h4>
                    </label>
                    <input class="form-control mt-2" type="email" name="email" required placeholder="Entrez une nouvelle adresse email" value="' . $info["email"] . '">
                    <label>
                    <h4>Adresse :</h4>
                    </label>
                    <input class="form-control mt-2" type="text" name="adresse" required placeholder="Entrez une nouvelle adresse " value="' . $info["adresse"] . '"> 
                    <label>
                    <h4>Numero de telephone :</h4>
                    </label>
                    <input class="form-control mt-2" type="tel" name="numero_telephone" required pattern="[0-9]{10}" name="numero_telephone" required placeholder="Entrez un nouveau numero de telephone" value="' . $info["numero_telephone"] . '"> 
                    <label>
                    <h4>Mot de passe :</h4>
                    </label>
                    <input class="form-control mt-2" type="password" name="mot_de_passe" required placeholder="Entrez un nouveau mot de passe"> 
                    <button style="width:50%" name="modifier_profil" class="rounded btn btn-lg btn-block btn-success my-5 pt-2" type="submit">Modifier profil</button>
                   </form>
                </div>
            </div>
        </div>
        ';
            }
        }
        $controller_profil->__destruct();
    }
    public function modifier_annonce($id_annonce)
    {
        require_once "../Controller/Controller_accueil.php";
        $controller = new ControllerMonProfil();
        $controller_accueil = new ControllerAccueil();
        $infos = $controller->get_annonce($id_annonce);
        foreach ($infos as $info) {
            if (isset($_SESSION["user_name"])) {
                echo '
        <div class="container-fluid border bg-white text-dark my-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Modifier une annonce.
                </h1>
            </div>
        </div>';
                echo '
        <div class="container-fluid my-2 p-2">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <form class="border border-5 p-2" action="../Routeurs/MonProfil.php" method="post">
                <input class="form-control my-2 invisible" type="text" name="id_annonce"  value="' . $info["id_annonce"] . '">
                    <label class="mt-2">
                        <h4>Titre :</h4>
                    </label>
                    <input class="form-control my-2" type="text" name="titre" required placeholder="Entrez un titre"  value="' . $info["titre"] . '">
                    <h4>Description :</h4>
                    </label>
                    <textarea class="form-control mt-2" type="text" name="description" required placeholder="Entrez une description" rows="5" value="' . $info["description"] . '"></textarea>';
                echo '<label class="mt-2">
                     <h4>Point de depart :</h4>
                </label>
                <select class="mt-2 form-select" name="emplacement_depart">';
                $resultat = $controller_accueil->get_wilaya();
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["num_wilaya"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                echo '<label class="mt-2">
                <h4>Point d\'arrivée :</h4>
              </label>
             <select class="mt-2 form-select" name="emplacement_arrive">';
                $resultat = $controller_accueil->get_wilaya();
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["num_wilaya"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                $resultat = $controller_accueil->get_type_transport();
                echo '  <label class="mt-2">
                     <h4>Type de transport :</h4>
                </label>
                <select class="mt-2 form-select" name="type_transport">';
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["libele"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                $resultat = $controller_accueil->get_moyen_transport();
                echo '  <label class="mt-2">
                     <h4>Moyen de transport :</h4>
                </label>
                <select class="mt-2 form-select" name="moyen_transport">';
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["libele"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                $resultat = $controller_accueil->get_fourchette_poid();
                echo '  <label class="mt-2">
                     <h4>Fourchette de poid :</h4>
                </label>
                <select class="mt-2 form-select" name="fourchette_poid">';
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["libele"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                $resultat = $controller_accueil->get_fourchette_volume();
                echo '  <label class="mt-2">
                     <h4>Fourchette de volume :</h4>
                </label>
                <select class="mt-2 form-select" name="fourchette_volume">';
                foreach ($resultat as $row) {
                    echo '<option value="' . $row["libele"] . '">' . $row["libele"] . '</option>';
                }
                echo '</select>';
                echo ' 
        <div class="d-flex justify-content-center text-light">
        <button style="width:50%" name="modifier_annonce" class="rounded btn btn-lg btn-block btn-success my-5 pt-2" type="submit">Modifier annonce</button>
      </div>
                   </form>
                </div>
            </div>
        </div>
        ';
            }
        }
        $controller_accueil->__destruct();
    }
    public function get_annonces_utilisateur()
    {
        if ($_SESSION["type_compte"] == "client") {
            $this->get_annonces_en_attente_client();
            $this->get_annonces_valides_client();
            $this->get_annonces_transaction_client();
            $this->get_annonces_confirmes_client();
        } else {
            $this->get_certification_transporteur();
            $this->get_annonces_transaction_transporteur();
            $this->get_annonces_confirmes_transporteur();
        }
    }
}
