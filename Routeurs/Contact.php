<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Contactez nous</title>
</head>

<body>
    <?php
    require "../Controller/Controller_contact.php";
    $controlleur_presentation = new ControllerContact();
    $controlleur_presentation->afficher_header();
    $controlleur_presentation->afficher_menu();
    $controlleur_presentation->afficher_contenu();
    ?>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 text-center my-auto ">
                <h1>Vous rencontrez des problemes ?</h1>
                <p>Veuillez nous contacter aux coordonées suivants
                </p>
            </div>
        </div>
        <div class="row" >
            <div class="col-10 m-auto">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Adresse mail</td>
                            <td><a href="mailto:adminnexus@gmail.com">adminnexus@gmail.com</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Service client</td>
                            <td>020904129</td>
                        </tr>
                        <tr>
                            <td scope="row">Notre siege social</td>
                            <td>30 Rue des freres Kadri, Hydra, Alger.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    $controlleur_presentation->afficher_footer();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>