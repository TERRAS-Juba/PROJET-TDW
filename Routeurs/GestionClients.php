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

    <title>Gestion des clients</title>
</head>

<body>
    <?php
    require_once  "../Controller/Controller_gestion_clients.php";
    session_start();
    $controller = new ControllerGestionClients();
    $controller->afficher_contenu();
    if (isset($_POST["enregistrer"])) {
        $controller->enregistrer_modifcations_client($_SESSION["edit"], $_POST["nom"], $_POST["prenom"], $_POST["mdp"], $_POST["email"], $_POST["adresse"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succés<h5>';
        echo '</div>';
        echo '</div>';
        $controller->afficher_list_clients();
    } else {
        if (isset($_GET["remove"])) {
            $controller->supprimer_client($_GET["remove"]);
            echo '<div class="container">';
            echo '<div class="danger alert-danger " style="height:50px">';
            echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
            echo '</div>';
            echo '</div>';
            $controller->afficher_list_clients();
        } else {
            $controller->afficher_list_clients();
        }
    }
    if (isset($_GET["edit"])) {
        $_SESSION["edit"] = $_GET["edit"];
        $controller->afficher_modifier_client($_GET["edit"]);
    }
    ?>
    <script src="../Scripts/Filtrage.js"></script>
</body>

</html>