<?php
class ViewGestionTransporteurs
{
    public function get_contenu()
    {
        echo '<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top my-2">
    <div class="container-fluid" id="navbar_admin">
      <button class="btn btn-light text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><h6>Dashboard<h6></button>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header bg-dark">
      <h3 class="offcanvas-title text-light" id="offcanvasScrollingLabel">Gestion des utilisateurs</h3>
      <button type="button" class="btn-close text-reset btn-light bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body  bg-dark">
    <div class="list-group-flush my-3">
        <a href="../Routeurs/GestionUtilisateurs.php" class="list-group-item list-group-item-action text-dark bg-light ">
          <h5>Accueil</h5>
        </a>
      </div>
      <div class="list-group-flush my-3">
        <a href="../Routeurs/GestionClients.php" class="list-group-item list-group-item-action text-dark bg-light ">
          <h5>Gestion des clients</h5>
        </a>
      </div>
      <div class="list-group-flush">
        <a href="../Routeurs/GestionTransporteurs.php" class="list-group-item list-group-item-action text-dark bg-light">
          <h5>Gestion des transporteurs</h5>
        </a>
      </div>
    </div>
  </div>';
    }
    public function get_list_transporteurs()
    {
        $controller_clients = new ControllerGestionTransporteurs();
        $resultat = $controller_clients->get_list_transporteurs();
        echo '<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des Transporteurs</h1>
    </div>
</div>
<div class="row">
    <div class="col my-auto">
        <table class="table table-striped table-hover border">
            <thead>
                <tr>
                    <th>ID Client</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Certifié</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_transporteur"] . '</td>
                <td>' . $row["nom"] . '</td>
                <td>' . $row["prenom"] . '</td>
                <td>' . $row["adresse"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["certifie"] . '</td>
                <td>
                <a  class="btn btn-warning "href="../Routeurs/GestionTransporteurs.php?edit=' . $row["id_transporteur"] . '">Modifier</a>
                <a  class="btn btn-danger "href="../Routeurs/GestionTransporteurs.php?remove=' . $row["id_transporteur"] . '">Supprimer</a>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Filtrage de la recherche</h1>
    </div>
</div>
<div class="container bg-secondary my-5">
<div class="row">
    <form action="../Routeurs/GestionTransporteurs.php" method="post">
    <div class="col-sm-6 my-2">
            <label for="" class="my-2">
                <h5 class="text-light">Filtrage des utilisateur</h5>
            </label>
            <select class="form-control" name="recherche" required>
                <option value="nom">nom</option>
                <option value="id_transporteur">ID Transporteur</option>
                <option value="prenom">prenom</option>
                <option value="email">email</option>
                <option value="adresse">adresse</option>
            </select>
    </div>
    <div class="col-sm-6 my-2">
            <label for="" class="my-2">
                <h5 class="text-light">Saisisez une valeur</h5>
            </label>
            <input type="text" class="form-control my-2" name="valeur" required placeholder="Saisisez une valeur">
    </div>
    <div class="col-sm-6 my-2">
        <label for="" class="my-2">
            <h5 class="text-light">Filtrer la recherche</h5>
        </label>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="btn-recherche">Filtrer la recherche</button>
        </div>
    </div>
    </form>
</div>
</div>';
    }
    public function modifier_transporteur()
    {
        echo '<div class="container my-4">
    <div class="row">
        <div class="col my-auto text-center">
            <h1>Modification d\'un utilisateur</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-auto bg-secondary">
            <form action="../Routeurs/GestionTransporteurs.php" method="post">
                <label class="mt-2"><h5>Mot de passe :</h5></label>
                <input class="form-control my-2" type="text" name="mdp" required placeholder="Entrez le nouveau mot de passe">
                <label class="mt-2"><h5>Nom :</h5></label>
                <input class="form-control my-2" type="text" name="nom" required placeholder="Entrez le nouveau nom">
                <label class="mt-2"><h5>Prénom :</h5></label>
                <input class="form-control my-2" type="text" name="prenom" required placeholder="Entrez le nouveau prenom">
                <label class="mt-2"><h5>Adresse :</h5></label>
                <input class="form-control my-2" type="text" name="adresse" required placeholder="Entrez la nouvelle adresse">
                <label class="mt-2"><h5>email : </h5></label>
                <input class="form-control my-2" type="text" name="email" required placeholder="Entrez la nouvelle adresse email">
                <button name="enregistrer" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
            </form>
        </div>
    </div>
</div>';
    }
    public function get_list_transporteurs_by_critere($critere, $value)
    {
        $controller_clients = new ControllerGestionTransporteurs();
        $resultat = $controller_clients->get_list_transporteurs_by_critere($critere, $value);

        echo '<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des transporteurs</h1>
    </div>
</div>
<div class="row">
    <div class="col my-auto">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Client</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Certifié</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_transporteur"] . '</td>
                <td>' . $row["nom"] . '</td>
                <td>' . $row["prenom"] . '</td>
                <td>' . $row["adresse"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["certifie"] . '</td>
                <td>
                <a  class="btn btn-warning "href="../Routeurs/GestionTransporteurs.php?edit=' . $row["id_transporteur"] . '">Modifier</a>
                <a  class="btn btn-danger "href="../Routeurs/GestionTransporteurs.php?remove=' . $row["id_transporteur"] . '">Supprimer</a>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Filtrage de la recherche</h1>
    </div>
</div>
  <div class="container bg-secondary my-5">
        <div class="row">
            <form action="../Routeurs/GestionTransporteurs.php" method="post">
            <div class="col-sm-6 my-2">
                    <label for="" class="my-2">
                        <h5 class="text-light">Filtrage des utilisateur</h5>
                    </label>
                    <select class="form-control" name="recherche" required>
                        <option value="nom">nom</option>
                        <option value="id_transporter">ID Transporteur</option>
                        <option value="prenom">prenom</option>
                        <option value="email">email</option>
                        <option value="adresse">adresse</option>
                    </select>
            </div>
            <div class="col-sm-6 my-2">
                    <label for="" class="my-2">
                        <h5 class="text-light">Saisisez une valeur</h5>
                    </label>
                    <input type="text" class="form-control my-2" name="valeur" required placeholder="Saisisez une valeur">
            </div>
            <div class="col-sm-6 my-2">
                <label for="" class="my-2">
                    <h5 class="text-light">Filtrer la recherche</h5>
                </label>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="btn-recherche">Filtrer la recherche</button>
                </div>
            </div>
            </form>
        </div>
    </div>';
    }
    public function get_list_transporteurs_non_certifies()
    {
        $controller_clients = new ControllerGestionTransporteurs();
        $resultat = $controller_clients->get_list_transporteurs_non_certifies();
        echo '
<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des Transporteurs non certifiés</h1>
    </div>
</div>
<div class="row">
    <div class="col my-auto">
        <table class="table table-striped table-hover border">
            <thead>
                <tr>
                    <th>ID Client</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Certifié</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_transporteur"] . '</td>
                <td>' . $row["nom"] . '</td>
                <td>' . $row["prenom"] . '</td>
                <td>' . $row["adresse"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["certifie"] . '</td>
                <td>
                <a  class="btn btn-success"href="../Routeurs/GestionTransporteurs.php?certifie=' . $row["id_transporteur"] . '">Certifier</a>
                <a  class="btn btn-primary "href="../Routeurs/GestionTransporteurs.php?demande=' . $row["id_transporteur"] . '">Afficher demande</a>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
</div>';
    }
    public function get_demande_certification($id)
    {
        $controller = new ControllerGestionTransporteurs();
        $resultat = $controller->get_demande_certification($id);
        foreach ($resultat as $row) {
            header('Content-type: application/pdf');
            header('Content-Disposition: inline; filename="Demande de certification_'.$row["id_transporteur"].'"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            @readfile($row["chemin"]);
        }
    }
}
