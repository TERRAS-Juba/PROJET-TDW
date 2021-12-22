<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Nexus Express</title>
</head>
<body>
    <?php
    session_start();
    require_once "../Controller/Controller_accueil.php";
    if(isset($_GET["id_annonce"])){
        $_SESSION["id_annonce"]=$_GET["id_annonce"];
        header("location:../Routeurs/DetailsAnnonce.php");
    }
    $controlleur_accueil = new ControllerAccueil();
    $controlleur_accueil->afficher_header();
    $controlleur_accueil->afficher_diaporama();
    $controlleur_accueil->afficher_menu();
    $controlleur_accueil->afficher_zone_recherche();
    if(isset($_POST["recherche"])){
        $controlleur_accueil->afficher_annonces_by_emplacement($_POST['emplacement_depart'],$_POST['emplacement_arrive']);
    }else{
        $controlleur_accueil->afficher_list_annonces();
    }
    $controlleur_accueil->afficher_footer();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                
            </div>
        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>