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
    require_once "../Controller/Controller_news.php";
    $controlleur_news = new ControllerNews();
    if (isset($_GET["id_news"])) {
        $_SESSION["id_news"] = $_GET["id_news"];
        $controlleur_news->set_nb_vues($_GET["id_news"]);
        header("location:../Routeurs/DetailsNews.php");
    }
    $controlleur_news->afficher_header();
    $controlleur_news->afficher_menu();
    $controlleur_news->afficher_list_news();
    $controlleur_news->afficher_footer();
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>