<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Nexus Express</title>
</head>

<body>
    <?php
    session_start();
    require_once "../Controller/Controller_accueil.php";
    $controlleur_accueil = new ControllerAccueil();
    if (isset($_POST["ajouter_annonce"])) {
        $hach =   uniqid($_POST["emplacement_depart"],FALSE);
        $hach2= uniqid($_POST["emplacement_arrive"],FALSE);
        $garantie=$controlleur_accueil->get_garantie($_POST["type_transport"]);
        $controlleur_accueil->ajouter_annonce($_POST["titre"], $_POST["description"], $_POST["emplacement_depart"], $_POST["emplacement_arrive"], $_POST["type_transport"], $_POST["moyen_transport"], $_POST["fourchette_poid"], $_POST["fourchette_volume"], $_SESSION["user_name"], $hach,$garantie);
        $controlleur_accueil->ajouter_image($hach2, "../Assets/" . $_POST["image"]);
        $controlleur_accueil->ajouter_images_annonce($hach2,$hach);
        echo "
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Ajout effectué avec succés',
                text: 'Votre annonce sera publié une fois validée par un administrateur.',
            })
            </script>
             ";
    }
    if (isset($_GET["id_annonce"])) {
        $_SESSION["id_annonce"] = $_GET["id_annonce"];
        $controlleur_accueil->set_nb_vues($_GET["id_annonce"]);
        header("location:../Routeurs/DetailsAnnonce.php");
    }
    $controlleur_accueil->afficher_header();
    $controlleur_accueil->afficher_diaporama();
    $controlleur_accueil->afficher_menu();
    $controlleur_accueil->afficher_zone_recherche();
    if (isset($_POST["recherche"])) {
        $controlleur_accueil->afficher_annonces_by_emplacement($_POST['emplacement_depart'], $_POST['emplacement_arrive']);
    } else {
        $controlleur_accueil->afficher_list_annonces();
    }
    $controlleur_accueil->afficher_comment_sa_marche();
    if (isset($_SESSION["type_compte"])) {
        if ($_SESSION["type_compte"] == "client") {
            $controlleur_accueil->afficher_ajouter_annonce();
        }
    }
    $controlleur_accueil->afficher_footer();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>