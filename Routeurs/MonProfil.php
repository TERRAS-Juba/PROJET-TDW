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
    $controlleur_profil->afficher_header();
    $controlleur_profil->afficher_menu();
    $controlleur_profil->afficher_infos_utilisateur();
    $controlleur_profil->afficher_annonces_utilisateur();
    if(isset($_SESSION["type_compte"])){
        if($_SESSION["type_compte"]=="client"){
            $controlleur_profil->afficher_annonces_valides_utilisateur();
        }
    }
    $controlleur_profil->afficher_footer();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>