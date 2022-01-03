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
    <title>Connexion Administrateur</title>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php
    require_once "../Controller/Controller_connexion_administrateur.php";
    $controller_connexion = new ControllerConnexionAdministrateur();
    $controller_connexion->afficher_connexion_administrateur();
    if (isset($_POST["connexion"])) {
        try {
            $controller_connexion->connexion_administrateur($_POST["user_name"], $_POST["user_password"]);
            header("location:../Routeurs/DashboardAdministrateur.php");
        } catch (PDOException $e) {
            echo "<script type='text/javascript'>
            Swal.fire({
                icon: 'error',
                title: 'Connexion Impossible',
                text: 'Le mot de passe ou le nom d utilisateur introduit est incorrect',
                footer: 'Veuillez reessayez si il vous plait'
              })
            </script>";
        }
    }
    ?>
    
</body>

</html>