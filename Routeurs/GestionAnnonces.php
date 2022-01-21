<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js></script>
    <title>Gestion des annonces</title>
</head>

<body>
    <?php
   require_once "../Controller/Controller_gestion_annonces.php";
   require_once  "../Controller/Controlleur_details_annonce.php";
    $controller = new ControllerGestionAnnonces();
    $controller->afficher_contenu();
   if(isset($_POST["enregistrer_tarif"])){
   $controller->valider_annonce($_POST["id_annonce"]);
   $controller->set_tarif($_POST["id_annonce"],$_POST["tarif"]);
   echo '<div class="container">';
   echo '<div class="success alert-success " style="height:50px">';
   echo '<h5 class="text-success text-center">Validation effectuée avec succéss<h5>';
   echo '</div>';
   echo '</div>';
    }
    if(isset($_GET["detail"])){
        $controller_details=new ControllerDetailsAnnonce();
         $controller_details->afficher_annonce_by_id($_GET["detail"]);
       }
    if(isset($_GET["validation"])){
        $controller->afficher_set_tarif();
    }
    if (isset($_GET["remove"])) {
        $controller->supprimer_annonce($_GET["remove"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
        $controller->afficher_list_annonces();
        $controller->afficher_list_annonces_en_attente();
        $controller->afficher_list_annonces_archivees();
    }
    else if(isset($_GET["remove_annonce_archivee"]) ){
        $controller->supprimer_annonce_archivee($_GET["remove_annonce_archivee"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression définitive effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
        $controller->afficher_list_annonces();
        $controller->afficher_list_annonces_en_attente();
        $controller->afficher_list_annonces_archivees();
    }
    else {
            $controller->afficher_list_annonces();
            $controller->afficher_list_annonces_en_attente();
            $controller->afficher_list_annonces_archivees();
    }
    ?>
<script src="../Scripts/Filtrage.js"></script>
</body>

</html>