<?php
class ViewGestionUtilisateurs{
public function get_contenu(){
    echo '
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top my-2">
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
  </div>
  <div class="container  my-5">
    <h1 class="text-center">Gestion des utilisateurs</h1>
    <div class="row my-5">
      <div class="col-sm-6 text-center my-auto border">
        <a href="../Routeurs/GestionClients.php"> <img src="../Assets/client.png" class="img-fluid rounded-circle my-auto" style="height: 300px;"></a>
        <h1>Gestion des utilisateurs</h1>
      </div>
      <div class="col-sm-6 text-center my-auto border">
        <a href="../Routeurs/GestionTransporteurs.php"><img src="../Assets/driver.png" class="img-fluid rounded-circle my-auto" style="height: 300px;"></a>
        <h1>Gestion des transporteurss</h1>
      </div>
      <div class="col-sm-3 text-center my-auto">
      </div>
    </div>
    ';
}
}
?>