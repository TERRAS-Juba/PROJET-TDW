<?php
class ViewGestionAnnonces
{
    public function get_contenu()
    {
        echo '<nav class="navbar navbar-dark bg-dark sticky-top my-2">
    <div class="container-fluid" id="navbar_admin">
      <button class="btn btn-light text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><h6>Dashboard<h6></button>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header bg-dark">
      <h3 class="offcanvas-title text-light" id="offcanvasScrollingLabel">Gestion des annonces</h3>
      <button type="button" class="btn-close text-reset btn-light bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body  bg-dark">
    <div class="list-group-flush my-3">
        <a href="../Routeurs/DashboardAdministrateur.php" class="list-group-item list-group-item-action text-dark bg-light ">
          <h5>Accueil</h5>
        </a>
      </div>
    </div>
  </div>';
    }
    public function get_list_annonces()
    {
        $controller_annonces = new ControllerGestionAnnonces();
        $resultat = $controller_annonces->get_list_annonces();
        echo '<div class="container my-5 border border-2">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des annonces</h1>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table id="annonces" class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID Annonce</th>
                    <th>Titre</th>
                    <th>Emplacement de départ</th>
                    <th>Emplacement arrive</th>
                    <th>Garantie</th>
                    <th>Type de transport</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_annonce"] . '</td>
                <td>' . $row["titre"] . '</td>
                <td>' . $row["emplacement_depart"] . '</td>
                <td>' . $row["emplacement_arrive"] . '</td>
                <td>' . $row["garantie"] . '</td>
                <td>' . $row["type_transport"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-success my-1 " href="../Routeurs/DetailsAnnonce.php?detail=' . $row["id_annonce"] . '"  onclick="return confirm(\'Voulez-vous vraiment afficher les details de cette annonce ?\')">Afficher details</a>
                <br>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionAnnonces.php?remove=' . $row["id_annonce"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette annonce ?\')">Supprimer</a>
                <br>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
</div>';
        $controller_annonces->__destruct();
    }
    public function get_list_annonces_en_attente()
    {
        $controller_annonces = new ControllerGestionAnnonces();
        $resultat = $controller_annonces->get_list_annonces_en_attente();
        echo '<div class="container my-5 border border-2">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des annonces non validées</h1>
    </div>
</div>
<div class="row">
<div class="table-responsive">
        <table id="annonces_en_attente" class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID Annonce</th>
                    <th>Titre</th>
                    <th>Emplacement de départ</th>
                    <th>Emplacement arrive</th>
                    <th>Garantie</th>
                    <th>Type de transport</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_annonce"] . '</td>
                <td>' . $row["titre"] . '</td>
                <td>' . $row["emplacement_depart"] . '</td>
                <td>' . $row["emplacement_arrive"] . '</td>
                <td>' . $row["garantie"] . '</td>
                <td>' . $row["type_transport"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-success my-1 " href="../Routeurs/DetailsAnnonce.php?detail=' . $row["id_annonce"] . '"  onclick="return confirm(\'Voulez-vous vraiment afficher les details de cette annonce ?\')">Afficher details</a>
                <br>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionAnnonces.php?remove=' . $row["id_annonce"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette annonce ?\')">Supprimer</a>
                <br>
                <a  style="width:200px" class="btn btn-primary "href="../Routeurs/GestionAnnonces.php?validation=' . $row["id_annonce"] . '"  onclick="return confirm(\'Voulez-vous vraiment valider cette annonce ?\')">Valider</a>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
</div>';
        $controller_annonces->__destruct();
    }
    public function set_tarif()
    {
        echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Rajout du prix pour l\'annonce</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionAnnonces.php" method="post">
                     <label class="mt-2"><h5>ID Annonce :</h5></label>
                     <input class="form-control my-2" type="text" name="id_annonce" readonly value="' . $_GET["validation"] . '">
                     <label class="mt-2"><h5>Prix :</h5></label>
                     <input class="form-control my-2" type="number" name="tarif" required placeholder="Entre un prix pour l\'annonce" min="0">
                     <button name="enregistrer_tarif" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
    }
    public function get_list_annonces_archivees()
    {
        $controller_annonces = new ControllerGestionAnnonces();
        $resultat = $controller_annonces->get_list_annonces_archivees();
        echo '<div class="container my-5 border border-2">
 <div class="row">
     <div class="col my-auto text-center">
         <h1>Gestion des annonces archivées</h1>
     </div>
 </div>
 <div class="row">
     <div class="table-responsive">
     <table id="annonces_archives" class="table table-striped table-hover border table-bordered">
             <thead>
                 <tr>
                     <th>ID Annonce</th>
                     <th>Titre</th>
                     <th>Emplacement de départ</th>
                     <th>Emplacement arrive</th>
                     <th>Garantie</th>
                     <th>Type de transport</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                 <td scope="row">' . $row["id_annonce"] . '</td>
                 <td>' . $row["titre"] . '</td>
                 <td>' . $row["emplacement_depart"] . '</td>
                 <td>' . $row["emplacement_arrive"] . '</td>
                 <td>' . $row["garantie"] . '</td>
                 <td>' . $row["type_transport"] . '</td>
                 <td>
                 <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionAnnonces.php?remove_annonce_archivee=' . $row["id_annonce"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette annonce ?\')">Supprimer</a>
                 <br>
             </tr>';
        }
        echo '</tbody>
         </table>
     </div>
 </div>
 </div>';
        $controller_annonces->__destruct();
    }
}
