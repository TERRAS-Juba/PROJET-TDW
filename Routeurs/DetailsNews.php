<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../Style/Style.css">
  <title>Details News</title>
</head>

<body>
  <?php
  session_start();
  require_once  "../Controller/Controlleur_details_news.php";
  $controlleur_details_news = new ControllerDetailsNews();
  $controlleur_details_news->afficher_header();
  $controlleur_details_news->afficher_menu();
  if (isset($_GET["detail"])) {
    $controlleur_details_news->afficher_news_by_id($_GET["detail"]);
  } else {
    $controlleur_details_news->afficher_news_by_id($_SESSION["id_news"]);
  }

  $controlleur_details_news->afficher_footer();
  ?>

</body>

</html>