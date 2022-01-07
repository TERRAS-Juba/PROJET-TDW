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
    <title>Mon profil</title>
</head>

<body>
    <?php
    session_start();
    require_once "../Controller/Controller_mon_profil.php";
    $controlleur_profil=new ControllerMonProfil();
    if(isset($_POST["ajouter_transporteur"])){
        $controlleur_profil->ajouter_transporteur_annonce($_POST["id_transporteur"],$_POST["id_annonce"]);
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Choix effectué avec succéss.',
            text: 'Une notification a été envoyé vers le transporteur desiré.',
            footer:'Veuillez attendra la confirmation du transporteur.'
        })
        </script>
         ";
    }
    if(isset($_GET["id_annonce"])){
        $controlleur_profil->supprimer_annonce($_GET["id_annonce"]);
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Suppression effectuée avec succéss.',
            text: 'Votre annonce a été supprimée avec succéss',
        })
        </script>
         ";
    }
    $controlleur_profil->afficher_header();
    $controlleur_profil->afficher_menu();
    $controlleur_profil->afficher_infos_utilisateur();
    $controlleur_profil->afficher_annonces_utilisateur();
    $controlleur_profil->afficher_footer();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>