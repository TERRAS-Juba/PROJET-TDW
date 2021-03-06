<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css rel=stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js></script>
    <title>Gestion des news</title>
</head>

<body>
    <?php
    require_once  "../Controller/Controller_gestion_news.php";
    require_once  "../Controller/Controlleur_details_news.php";
    session_start();
    $controller = new ControllerGestionNews();
    $controller->afficher_contenu();
    if (isset($_POST["ajouter"])) {
        $news = uniqid($_POST["titre"], FALSE);
        $image = uniqid($_POST["chemin"], FALSE);
        $controller->inserer_news($news, $_POST["titre"], $_POST["description"], $_POST["date"]);
        $controller->enregistrer_images_news($news, $image, "../News/" . $_POST["chemin"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-succes text-center">Insertion effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if (isset($_POST["enregistrer"])) {
        $image = uniqid($_POST["chemin"], FALSE);
        $controller->enregistrer_modifcations_news($_SESSION["id_news"], $_POST["titre"], $_POST["description"]);
        $controller->enregistrer_images_news($_SESSION["id_news"], $image, "../News/" . $_POST["chemin"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-succes text-center">Modification effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if (isset($_GET["remove"])) {
        $controller->supprimer_news($_GET["remove"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    $controller->afficher_list_news();
    $controller->afficher_inserer_news();
    if (isset($_GET["modifier"])) {
        $_SESSION["id_news"] = $_GET["modifier"];
        $controller->afficher_modifier_news($_GET["modifier"]);
    }
    ?>
    <script src="../Scripts/Filtrage.js"></script>
</body>

</html>