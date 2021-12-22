<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../Style/Style.css">
  <title>Details Annonce</title>
</head>

<body>
  <?php
  session_start();
  require_once "../Controller/Controlleur_details_annonce.php";
  $controlleur_details_annonce = new ControllerDetailsAnnonce();
  $controlleur_details_annonce->afficher_header();
  $controlleur_details_annonce->afficher_menu();
  $controlleur_details_annonce->afficher_annonce_by_id($_SESSION["id_annonce"]);
  $controlleur_details_annonce->afficher_footer();
  ?>

</body>

</html>