<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Gestion des annonces</title>
</head>

<body>
    <?php
    require "../Controller/Controller_gestion_annonces.php";
    require "../Controller/Controlleur_details_annonce.php";
    $controller = new ControllerGestionAnnonces();
    $controller->afficher_contenu();
    if(isset($_GET["detail"])){
        $controller_details=new ControllerDetailsAnnonce();
         $controller_details->afficher_annonce_by_id($_GET["detail"]);
       }
    if(isset($_GET["validation"])){
        $controller->valider_annonce($_GET["validation"]);
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
    } else {
        if (isset($_POST["btn-recherche"])) {
            $controller->afficher_list_annonces_by_critere($_POST["recherche"], $_POST["valeur"]);
            $controller->afficher_list_annonces_en_attente();
        } else {
            $controller->afficher_list_annonces();
            $controller->afficher_list_annonces_en_attente();
        }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>