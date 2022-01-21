<?php
class ViewConnexionAdministrateur
{
  public function connexion_administrateur()
  {
    echo '   <div class="container-fluid">
<div class="row">
    <div class="col-sm-7">
        <img style="width:100%" src="../Assets/admin1.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
    </div>
    <div class="col-sm-5">
        <div class="p-5 bg-secondary text-center my-5 container-fluid">
            <h1 class="text-light">Connexion Administrateur</h1>
        </div>
        <form action="../Routeurs/ConnexionAdministrateur.php" method="post">
            <label class="mt-2">
                <h4>Nom d\'utilisateur :</h4>
            </label>
            <input class="form-control my-2" type="text" name="user_name" required placeholder="Entrez le nouveau titre">
            <label class="mt-2">
                <h4>Mot de passe :</h4>
            </label>
            <input class="form-control mt-2" type="password" name="user_password" required placeholder="Entrez le nouveau titre">
            <button style="width:100%" name="connexion" class="rounded btn btn-lg btn-block btn-success mt-5 pt-2" type="submit">Connexion</button>
        </form>
    </div>
</div>
<div class="modal" id="connexion">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Modal body..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>';
  }
}
