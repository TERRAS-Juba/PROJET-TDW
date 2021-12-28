<?php
class ViewGestionSignalements
{
    public function get_contenu()
    {
        echo'<nav class="navbar navbar-dark bg-dark sticky-top my-2">
            <div class="container-fluid" id="navbar_admin">
                <button class="btn btn-light text-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <h6>Dashboard<h6>
                </button>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header bg-dark">
                <h3 class="offcanvas-title text-light" id="offcanvasScrollingLabel">Gestion des signalements</h3>
                <button type="button" class="btn-close text-reset btn-light bg-light" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body  bg-dark">
                <div class="list-group-flush my-3">
                    <a href="../Routeurs/GestionSignalements.php"
                        class="list-group-item list-group-item-action text-dark bg-light ">
                        <h5>Accueil</h5>
                    </a>
                </div>
            </div>
        </div>';
    }
    public function get_list_signalements()
    {
        $controller_signalements = new ControllerGestionSignalements();
        $resultat = $controller_signalements->get_list_signalements();
        echo '<div class="container">
        <div class="row">
            <div class="col my-auto text-center">
                <h1>Gestion des signalements</h1>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover border table-bordered">
                    <thead>
                        <tr>
                            <th>ID Signalements</th>
                            <th>Titre</th>
                            <th>ID Transporteur</th>
                            <th>ID Client</th>
                            <th>ID Annonce</th>
                            <th>Emetteur</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
            <td scope="row">' . $row["id_signalement"] . '</td>
            <td>' . $row["titre"] . '</td>
            <td>' . $row["id_transporteur"] . '</td>
            <td>' . $row["id_client"] . '</td>
            <td>' . $row["id_annonce"] . '</td>
            <td>' . $row["emetteur"] . '</td>
            <td>
                <a style="width:200px" class="btn btn-success my-1 " href="../Routeurs/DetailsAnnonce.php?detail=' . $row["id_annonce"] . '"  onclick="return confirm(\' Voulez-vous vraiment afficher les details de cette annonce
                    ?\')">Details annonce</a>
                <br>
                <a data-bs-toggle="modal" data-bs-target="#'.$row["id_client"].'" style="width:200px"
                    class="btn btn-primary my-1"
                    onclick="return confirm(\'Voulez-vous vraiment afficher les details du client ?\')">Details client</a>
                <br>
                <a data-bs-toggle="modal" data-bs-target="#'.$row["id_transporteur"].'" style="width:200px"
                    class="btn btn-info my-1"
                    onclick="return confirm(\'Voulez-vous vraiment afficher les details du transporteur ?\')">Details
                    Transporteur</a>
                <br>
                <a data-bs-toggle="modal" data-bs-target="#s'.$row["id_signalement"].'" style="width:200px"
                    class="btn btn-secondary my-1"
                    onclick="return confirm(\'Voulez-vous vraiment afficher les details du signalement ?\')">Details
                    signalement</a>
                <br>
        </tr>';
        echo '<div class="modal" id="s'.$row["id_signalement"].'">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">ID Signalement : '.$row["id_signalement"].'</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Description : '.$row["description"].'</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>';
            $clients=$controller_signalements->get_client_signalement($row["id_client"]);
            $transporteurs=$controller_signalements->get_transporteur_signalement($row["id_transporteur"]);
            foreach($clients as $client){
                echo '<div class="modal" id="'.$client["id_client"].'">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Nom d\'utilisateur :'.$client["id_client"].'</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <h4>Nom : '.$client["nom"].'</h4>
                            <h4>Prenom : '.$client["prenom"].'</h4>
                            <h4>Adresse : '.$client["adresse"].'</h4>
                            <h4>Email : '.$client["email"].'</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
            
                    </div>
                </div>
            </div>';
            }
        foreach($transporteurs as $transporteur){
            echo '<div class="modal" id="'.$row["id_transporteur"].'">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nom d\'utilisateur : '.$transporteur["id_transporteur"].'</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Nom : '.$transporteur["nom"].'</h4>
                        <h4>Prenom : '.$transporteur["prenom"].'</h4>
                        <h4>Adresse : '.$transporteur["adresse"].'</h4>
                        <h4>Email : '.$transporteur["email"].'</h4>
                        <h4>Certifié : '.$transporteur["certifie"].'</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>';
            }
        }
    }
}