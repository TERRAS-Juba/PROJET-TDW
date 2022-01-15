<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Gestion du contenu</title>
</head>

<body>
    <?php
    require "../Controller/Controller_gestion_contenu.php";
    session_start();
    $controller = new ControllerGestionContenu();
    $controller->afficher_contenu();
    if(isset($_GET["modifier_type"])){
        $controller->afficher_modifier_type_transport($_GET["modifier_type"]);
    }
    if(isset($_GET["modifier_moyen"])){
        $controller->afficher_modifier_moyen_transport($_GET["modifier_moyen"]);
    }
    if(isset($_GET["modifier_fourchette_poid"])){
        $controller->afficher_modifier_fourchette_poid($_GET["modifier_fourchette_poid"]);
    }
    if(isset($_GET["modifier_fourchette_volume"])){
        $controller->afficher_modifier_fourchette_volume($_GET["modifier_fourchette_volume"]);
    }
    if(isset($_POST["enregistrer_type_transport"])){
        $controller->modifier_type_transport($_POST["id_type"],$_POST["libele"],$_POST["garantie"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["ajouter_type_transport"])){
        $controller->ajouter_type_transport($_POST["libele"],$_POST["garantie"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Ajout effectué avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_GET["remove_type"])){
        $controller->supprimer_type_transport($_GET["remove_type"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["enregistrer_moyen_transport"])){
        $controller->modifier_moyen_transport($_POST["id_moyen"],$_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["ajouter_moyen_transport"])){
        $controller->ajouter_moyen_transport($_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Ajout effectué avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_GET["remove_moyen"])){
        $controller->supprimer_moyen_transport($_GET["remove_moyen"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["enregistrer_fourchette_poid"])){
        $controller->modifier_fourchette_poid($_POST["id_fourchette"],$_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["ajouter_fourchette_poid"])){
        $controller->ajouter_fourchette_poid($_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Ajout effectué avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_GET["remove_fourchette_poid"])){
        $controller->supprimer_fourchette_poid($_GET["remove_fourchette_poid"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["enregistrer_fourchette_volume"])){
        $controller->modifier_fourchette_volume($_POST["id_fourchette"],$_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Modification effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_POST["ajouter_fourchette_volume"])){
        $controller->ajouter_fourchette_volume($_POST["libele"]);
        echo '<div class="container">';
        echo '<div class="success alert-success " style="height:50px">';
        echo '<h5 class="text-success text-center">Ajout effectué avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    if(isset($_GET["remove_fourchette_volume"])){
        $controller->supprimer_fourchette_volume($_GET["remove_fourchette_volume"]);
        echo '<div class="container">';
        echo '<div class="danger alert-danger " style="height:50px">';
        echo '<h5 class="text-danger text-center">Suppression effectuée avec succéss<h5>';
        echo '</div>';
        echo '</div>';
    }
    $controller->afficher_list_type_transport();
    $controller->afficher_list_moyen_transport();
    $controller->afficher_list_fourchette_poid();
    $controller->afficher_list_fourchette_volume();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>