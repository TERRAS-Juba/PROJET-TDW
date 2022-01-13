<?php
class ViewGestionNews
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
      <h3 class="offcanvas-title text-light" id="offcanvasScrollingLabel">Gestion des news</h3>
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
    public function get_list_news()
    {
        $controller_annonces = new ControllerGestionNews();
        $resultat = $controller_annonces->get_list_news();
        echo '<div class="container">
<div class="row">
    <div class="col my-auto text-center">
        <h1>Gestion des news</h1>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-hover border table-bordered">
            <thead>
                <tr>
                    <th>ID News</th>
                    <th>Titre</th>
                    <th>Date d\'ajout</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($resultat as $row) {
            echo '<tr>
                <td scope="row">' . $row["id_news"] . '</td>
                <td>' . $row["titre"] . '</td>
                <td>' . $row["date_ajout"] . '</td>
                <td>
                <a  style="width:200px" class="btn btn-success my-1 " href="../Routeurs/DetailsNews.php?detail=' . $row["id_news"] . '"  onclick="return confirm(\'Voulez-vous vraiment afficher les details de cette news ?\')">Afficher details</a>
                <br>
                <a  style="width:200px" class="btn btn-warning my-1" href="../Routeurs/GestionNews.php?modifier=' . $row["id_news"] . '" onclick="return confirm(\'Voulez-vous vraiment modifier cette news ?\')">Modifier</a>
                <br>
                <a  style="width:200px" class="btn btn-danger my-1" href="../Routeurs/GestionNews.php?remove=' . $row["id_news"] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer cette news ?\')">Supprimer</a>
                <br>
            </tr>';
        }
        echo '</tbody>
        </table>
    </div>
</div>
</div>';
    }
    public function modifier_news($id)
    {
        $controller_news = new ControllerGestionNews();
        $news = $controller_news->get_news($id);
        foreach ($news as $row) {
            echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Modification d\'une news</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionNews.php" method="post">
                     <label class="mt-2"><h5>Titre :</h5></label>
                     <input class="form-control my-2" type="text" name="titre" required placeholder="Entrez le nouveau titre" value="'.$row["titre"].'">
                     <label class="mt-2"><h5>Description :</h5></label>
                     <textarea class="form-control my-2" rows="5"  name="description"  required placeholder="Entrez la nouvelle description"></textarea>
                     <label class="mt-2"><h5>Nouvelle image :</h5></label>
                     <input class="form-control my-2" type="file" name="chemin" required placeholder="Entrez le nouveau chemin de l\'image"  value="'.$row["titre"].'">
                     <button name="enregistrer" class="btn btn-warning my-4" type="submit">Enregistrer les modifications</button>
                 </form>
             </div>
         </div>
     </div>';
        }
    }
    public function inserer_news()
    {
        echo '<div class="container my-4">
         <div class="row">
             <div class="col my-auto text-center">
                 <h1>Ajout d\'une news</h1>
             </div>
         </div>
         <div class="row">
             <div class="col-12 my-auto bg-secondary">
                 <form action="../Routeurs/GestionNews.php" method="post">
                     <label class="mt-2"><h5>Titre :</h5></label>
                     <input class="form-control my-2" type="text" name="titre" required placeholder="Introduisez le titre">
                     <label class="mt-2"><h5>Description :</h5></label>
                     <textarea class="form-control my-2" rows="5"  name="description"  required placeholder="Introduisez la description"></textarea>
                     <label class="mt-2"><h5>Image :</h5></label>
                     <input class="form-control my-2" type="file" name="chemin" required placeholder="Introduisez le chemin de l\'image">
                     <label class="mt-2"><h5>Date de publication :</h5></label>
                     <input class="form-control my-2" type="date" name="date" required placeholder="Introduisez le chemin de l\'image">
                     <button name="ajouter" class="btn btn-success my-4" type="submit">Ajouter la news</button>
                 </form>
             </div>
         </div>
     </div>';
    }
}
