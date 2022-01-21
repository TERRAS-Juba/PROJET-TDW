<?php
class ViewGestionContenu
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
      <h3 class="offcanvas-title text-light" id="offcanvasScrollingLabel">Gestion du contenu</h3>
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
    public function get_list_type_transport()
    {
        $controller_contenu = new ControllerGestionContenu();
        $resultat = $controller_contenu->get_list_type_transport();
        echo '<div class="container my-5 border border-2">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des types de transport</h1>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table id="types_transports" class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID type transport</th>
                    <th>Libele</th>
                    <th>Garantie</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_type"] . '</td>
                <td>' . $row["libele"] . '</td>
                <td>' . $row["garantie"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-warning my-1" href="../Routeurs/GestionContenu.php?modifier_type=' . $row["id_type"] . '" onclick="return confirm(\'Voulez-vous vraiment modifier ce type de transport ?\')">Modifier</a>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionContenu.php?remove_type=' . $row["id_type"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer ce type de transport ?\')">Supprimer</a>
                <br>
            </tr>';
        }
        echo '</tbody>
        </table>
        <div class="row">
        <div class="col-12 my-auto bg-secondary">
            <form action="../Routeurs/GestionContenu.php" method="post">
                <label class="mt-2"><h5>Libele :</h5></label>
                <input class="form-control my-2" type="text" name="libele" required placeholder="Entrez un libele" >
                <label class="mt-2"><h5>Grantie :</h5></label>
                <input class="form-control my-2" type="number" name="garantie" required placeholder="Le type de transport est garantie ?" min="0" max="1">
                <button name="ajouter_type_transport" class="btn btn-success my-4" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    </div>
</div>
</div>';
        $controller_contenu->__destruct();
    }
    public function get_list_moyen_transport()
    {
        $controller_contenu = new ControllerGestionContenu();
        $resultat = $controller_contenu->get_list_moyen_transport();
        echo '<div class="container my-5 border border-2">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des moyens de transport</h1>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table id="moyens_transports" class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID moyen transport</th>
                    <th>Libele</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_moyen"] . '</td>
                <td>' . $row["libele"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-warning my-1" href="../Routeurs/GestionContenu.php?modifier_moyen=' . $row["id_moyen"] . '" onclick="return confirm(\'Voulez-vous vraiment modifier ce type de transport ?\')">Modifier</a>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionContenu.php?remove_moyen=' . $row["id_moyen"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer ce type de transport ?\')">Supprimer</a>
                <br>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
        <div class="row">
        <div class="col-12 my-auto bg-secondary">
            <form action="../Routeurs/GestionContenu.php" method="post">
                <label class="mt-2"><h5>Libele :</h5></label>
                <input class="form-control my-2" type="text" name="libele" required placeholder="Entrez un libele" >
                <button name="ajouter_moyen_transport" class="btn btn-success my-4" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    </div>
</div>
</div>';
        $controller_contenu->__destruct();
    }
    public function get_list_fourchette_poid()
    {
        $controller_contenu = new ControllerGestionContenu();
        $resultat = $controller_contenu->get_list_fourchette_poid();
        echo '<div class="container border my-5 border border-2">
<div class="row">
    <div id="fourchettes_poid" class="col my-auto text-center">
        <h1>Gestion des fourchette de poid</h1>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID fourchette poid</th>
                    <th>Libele</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_fourchette"] . '</td>
                <td>' . $row["libele"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-warning my-1" href="../Routeurs/GestionContenu.php?modifier_fourchette_poid=' . $row["id_fourchette"] . '" onclick="return confirm(\'Voulez-vous vraiment modifier cette fourchette de poid ?\')">Modifier</a>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionContenu.php?remove_fourchette_poid=' . $row["id_fourchette"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette fourchette de poid ?\')">Supprimer</a>
                <br>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
        <div class="row">
        <div class="col-12 my-auto bg-secondary">
            <form action="../Routeurs/GestionContenu.php" method="post">
                <label class="mt-2"><h5>Libele :</h5></label>
                <input class="form-control my-2" type="text" name="libele" required placeholder="Entrez un libele" >
                <button name="ajouter_fourchette_poid" class="btn btn-success my-4" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    </div>
</div>
</div>';
        $controller_contenu->__destruct();
    }
    public function get_list_fourchette_volume()
    {
        $controller_contenu = new ControllerGestionContenu();
        $resultat = $controller_contenu->get_list_fourchette_volume();
        echo '<div class="container my-5 border border-2">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des fourchette de volume</h1>
    </div>
</div>
<div class="row">
    <div id="fourchettes_volume" class="table-responsive">
        <table class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID fourchette volume</th>
                    <th>Libele</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_fourchette"] . '</td>
                <td>' . $row["libele"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-warning my-1" href="../Routeurs/GestionContenu.php?modifier_fourchette_volume=' . $row["id_fourchette"] . '" onclick="return confirm(\'Voulez-vous vraiment modifier cette fourchette de volume ?\')">Modifier</a>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionContenu.php?remove_fourchette_volume=' . $row["id_fourchette"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette fourchette de volume ?\')">Supprimer</a>
                <br>
                </td>
            </tr>';
        }
        echo '</tbody>
        </table>
        <div class="row">
        <div class="col-12 my-auto bg-secondary">
            <form action="../Routeurs/GestionContenu.php" method="post">
                <label class="mt-2"><h5>Libele :</h5></label>
                <input class="form-control my-2" type="text" name="libele" required placeholder="Entrez un libele" >
                <button name="ajouter_fourchette_volume" class="btn btn-success my-4" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    </div>
</div>
</div>';
        $controller_contenu->__destruct();
    }
    public function modifier_type_transport($id_type)
    {
        $controller_contenu = new ControllerGestionContenu();
        $types = $controller_contenu->get_type_transport($id_type);
        foreach ($types as $type) {
            echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Modification type transport</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionContenu.php" method="post">
                     <label class="mt-2"><h5>ID type transport:</h5></label>
                     <input class="form-control my-2" type="text" name="id_type" readonly value="' . $type['id_type'] . '">
                     <label class="mt-2"><h5>Libele :</h5></label>
                     <input class="form-control my-2" type="text" name="libele" required placeholder="Entre un nouveau libele" value="' . $type['libele'] . '">
                     <label class="mt-2"><h5>Grantie :</h5></label>
                     <input class="form-control my-2" type="number" name="garantie" required placeholder="Le type de transport est garantie ?" min="0" max="1" value="' . $type['garantie'] . '">
                     <button name="enregistrer_type_transport" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
        }
        $controller_contenu->__destruct();
    }
    public function modifier_moyen_transport($id_type)
    {
        $controller_contenu = new ControllerGestionContenu();
        $types = $controller_contenu->get_moyen_transport($id_type);
        foreach ($types as $type) {
            echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Modification moyen de transport</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionContenu.php" method="post">
                     <label class="mt-2"><h5>ID moyen transport:</h5></label>
                     <input class="form-control my-2" type="text" name="id_moyen" readonly value="' . $type['id_moyen'] . '">
                     <label class="mt-2"><h5>Libele :</h5></label>
                     <input class="form-control my-2" type="text" name="libele" required placeholder="Entre un nouveau libele" value="' . $type['libele'] . '">
                     <button name="enregistrer_moyen_transport" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
        }
        $controller_contenu->__destruct();
    }
    public function modifier_fourchette_poid($id_type)
    {
        $controller_contenu = new ControllerGestionContenu();
        $types = $controller_contenu->get_fourchette_poid($id_type);
        foreach ($types as $type) {
            echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Modification fourchette poid</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionContenu.php" method="post">
                     <label class="mt-2"><h5>ID fourchette poid:</h5></label>
                     <input class="form-control my-2" type="text" name="id_fourchette" readonly value="' . $type['id_fourchette'] . '">
                     <label class="mt-2"><h5>Libele :</h5></label>
                     <input class="form-control my-2" type="text" name="libele" required placeholder="Entre un nouveau libele" value="' . $type['libele'] . '">
                     <button name="enregistrer_fourchette_poid" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
        }
        $controller_contenu->__destruct();
    }
    public function modifier_fourchette_volume($id_type)
    {
        $controller_contenu = new ControllerGestionContenu();
        $types = $controller_contenu->get_fourchette_volume($id_type);
        foreach ($types as $type) {
            echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Modification fourchette volume</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionContenu.php" method="post">
                     <label class="mt-2"><h5>ID fourchette volume:</h5></label>
                     <input class="form-control my-2" type="text" name="id_fourchette" readonly value="' . $type['id_fourchette'] . '">
                     <label class="mt-2"><h5>Libele :</h5></label>
                     <input class="form-control my-2" type="text" name="libele" required placeholder="Entre un nouveau libele" value="' . $type['libele'] . '">
                     <button name="enregistrer_fourchette_volume" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
        }
        $controller_contenu->__destruct();
    }
}
