<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Gestion des transporteurs</title>
</head>

<body>
    <?php
    require "../Controller/Controller_gestion_transporteurs.php";
    session_start();
    $controller = new ControllerGestionTransporteurs();
    if(isset($_GET["demande"])){
         $controller->afficher_demande_certification($_GET["demande"]);
       }
    if(isset($_GET["certifie"])){
        $controller->certifier_transporteur($_GET["certifie"]);
    }
    $controller->afficher_contenu();
    if (isset($_POST["enregistrer"])) {
        $controller->enregistrer_modifications_transporteur($_SESSION["edit"], $_POST["nom"], $_POST["prenom"], $_POST["mdp"], $_POST["email"], $_POST["adresse"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succés<h5>';
        echo '</div>';
        echo '</div>';
        $controller->afficher_list_transporteurs();
        $controller->afficher_list_transorteurs_non_certifies();
    } else {
        if (isset($_GET["remove"])) {
            $controller->supprimer_transporteur($_GET["remove"]);
            echo '<div class="container">';
            echo '<div class="danger alert-danger " style="height:50px">';
            echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
            echo '</div>';
            echo '</div>';
            $controller->afficher_list_transporteurs();
            $controller->afficher_list_transorteurs_non_certifies();
        } else {
            if(isset($_POST["btn-recherche"])){
                $controller->afficher_list_transporteurs_by_critere($_POST["recherche"],$_POST["valeur"]);
                $controller->afficher_list_transorteurs_non_certifies();
            }else{
                $controller->afficher_list_transporteurs();
                $controller->afficher_list_transorteurs_non_certifies();
            }
        }
    }
    if (isset($_GET["edit"])) {
        $_SESSION["edit"] = $_GET["edit"];
        $controller->afficher_modifier_transporteur();
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>