<?php
class ViewDashboardAdministrateur{
public function get_contenu(){
    echo '
    <div class="container border my-5">
    <h1 class=\'text-center\'>Dasboard de l\'administrateur</h1>
    <div class="row my-5">
        <div class="col-sm-3 text-center my-auto">
            <a href="../Routeurs/GestionUtilisateurs.php"> <img src="../Assets/client.png" class="img-fluid rounded-circle my-auto" style="height: 250px;"></a>
            <h1>Gestion des utilisateurs</h1>
        </div>
        <div class="col-sm-3 text-center my-auto">
        <a href="../Routeurs/GestionAnnonces.php"><img src="../Assets/annonce.png" class="img-fluid rounded-circle my-auto" style="height: 250px;"></a>
            <h1>Gestion des annonces</h1>
        </div>
        <div class="col-sm-3 text-center my-auto">
        <a href="../Routeurs/GestionNews.php"><img src="../Assets/news.png" class="img-fluid rounded-circle my-auto" style="height: 250px;"></a>
            <h1>Gestion des news</h1>
        </div>
        <div class="col-sm-3 text-center my-auto">
        <a href="../Routeurs/GestionSignalements.php"><img src="../Assets/annoncement.png" class="img-fluid rounded-circle my-auto" style="height: 250px;"></a>
            <h1>Gestion des signalements</h1>
        </div>
    </div>
</div>
    <<div class="d-flex justify-content-center text-light">
    <a style="width: 20%;" href="../Deconnexion.php"  class="btn btn-primary rounded-pill  my-2 py-2"><h5>Deconnexion</h5></a>
  </div>
</div>
    ';
}
}
?>