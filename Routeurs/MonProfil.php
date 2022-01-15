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
    if(isset($_GET["annonce_decline"])){
        $controlleur_profil->decliner_annonce($_GET["annonce_decline"]);
    }
    if(isset($_GET["annonce_accepte"])){
        if(strcmp($_GET["certifie"], "valide")==!0 && $_GET["garantie"]==1){
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Vous ne pouvez pas accepter cette offre.',
                text: 'Vous devez etre certifié pour accepter cette offre.',
                footer: 'Veuillez reesayer si il vous plait.'
            })
            </script>
             ";

        }else{
             //$controlleur_profil->accepter_annonce($_GET["annonce_accepte"]);
        }
       
    }
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
    if(isset($_GET["id_annonce_signalement"])){
        $controlleur_profil->afficher_effectuer_signalement($_GET["id_annonce_signalement"],$_GET["id_client_signalement"],$_GET["id_transporteur_signalement"]);
    }
    if(isset($_POST["effectuer_signalement"])){
        $controlleur_profil->ajouter_signalement($_POST["id_annonce"],$_POST["id_client"],$_POST["id_transporteur"],$_POST["titre"],$_POST["description"],$_SESSION["type_compte"]);
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Signalement effectué avec succés.',
            text: 'Votre signalement a bien été recu et sera traité dans les plus brefs delais.'
        })
        </script>
         ";
    }
    $controlleur_profil->afficher_footer();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>