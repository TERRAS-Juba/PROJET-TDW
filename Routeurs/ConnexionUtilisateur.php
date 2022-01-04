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
    <title>Connexion Utilisateur</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php
    session_start();
    require_once "../Controller/Controller_connexion_utilisateur.php";
    $controller_connexion =new ControllerConnexionUtilisateur();
    if(isset($_POST["connexion"])){
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["type_compte"] = $_POST["type_compte"];
        try {
            if($controller_connexion->connexion($_POST["user_name"],$_POST["user_password"],$_POST["type_compte"])==true){
                if($_POST["type_compte"]=="client"){
                    header("location:../Routeurs/Accueil.php");
                }else{
                    header("location:../Routeurs/Accueil.php");
                }
            }else{
                echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Le nom d utilisateur ou mot de passe est inccorect.',
                footer: 'Veuillez reesayer si il vous plait.'
            })
            </script>
             ";
            }
        } catch (PDOException $e) {
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur bdd',
                text: 'Le nom d utilisateur ou mot de passe est inccorect.',
                footer: 'Veuillez reesayer si il vous plait.'
            })
            </script>
             ";
        }
    }
    $controller_connexion->afficher_connexion();
    ?>
</body>

</html>