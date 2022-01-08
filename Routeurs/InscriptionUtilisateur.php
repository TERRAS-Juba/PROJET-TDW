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
    <title>Inscription Utilisateur</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php
    session_start();
    require_once "../Controller/Controller_inscription_utilisateur.php";
    $controller_connexion = new ControllerInscriptionUtilisateur();
    $controller_connexion->afficher_inscription();
    if (isset($_POST["connexion"])) {
        $utilisateur = $controller_connexion->existe_utilisateur($_POST["user_name"], $_POST["type_compte"]);
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["type_compte"] = $_POST["type_compte"];
        if ($utilisateur == true) {
            echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: 'Le nom d utilisateur saisi existe deja.',
            footer: 'Veuillez reesayer si il vous plait.'
        })
        </script>
         ";
        } else {

            if (isset($_POST["user_password"])) {
                if ($_POST["user_password"] != $_POST["user_password_confirmation"]) {
                    echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Votre confirmation de mot de passe est incorrecte',
                    footer: 'Veuillez reesayer si il vous plait.'
                  })
                </script>
                ";
                } else {
                    if (isset($_POST["type_compte"])) {
                        if ($_POST["type_compte"] == "transporteur") {
                            if (empty($_POST["wilaya"])) {
                                echo "
                        <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur',
                            text: 'Vous devez selectionner au moins un trajet a suivre.',
                            footer: 'Veuillez reesayer si il vous plait.'
                          })
                        </script>
                        ";
                            } else {
                                if (isset($_POST["demande_certification"])) {
                                    if ($_POST["demande_certification"] == "1") {
                                        if (empty($_POST["telecharger"])) {
                                            echo "
                                        <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Erreur',
                                            text: 'Vous devez deposer un justificatif si vous voulez etre certifie.',
                                            footer: 'Veuillez reesayer si il vous plait.'
                                        })
                                        </script>
                                         ";
                                        } else {
                                            echo "
                                        <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Inscription effectuée avec succés',
                                            text: 'Votre inscription a été effectuée avec success.',
                                            footer: 'Veuillez vous connecter via la page de connexion si il vous plait.'
                                        })
                                        </script>
                                         ";
                                            $controller_connexion->inscription_transporteur($_POST["user_name"], $_POST["user_password"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["numero_telephone"], $_POST["adresse"], "en attente");
                                            $controller_connexion->add_trajets($_POST["user_name"], $_POST["wilaya"]);
                                            $controller_connexion->add_certification($_POST["user_name"], $_POST["telecharger"]);
                                        }
                                    } else {
                                        echo "
                                        <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Inscription effectuée avec succés',
                                            text: 'Votre inscription a été effectuée avec success.',
                                            footer: 'Veuillez vous connecter via la page de connexion si il vous plait.'
                                        })
                                        </script>
                                         ";
                                        $controller_connexion->inscription_transporteur($_POST["user_name"], $_POST["user_password"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["numero_telephone"], $_POST["adresse"], "en attente");
                                        $controller_connexion->add_trajets($_POST["user_name"], $_POST["wilaya"]);
                                    }
                                }
                            }
                        } else {
                            echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Inscription effectuée avec succés',
                            text: 'Votre inscription a été effectuée avec success.',
                            footer: 'Veuillez vous connecter via la page de connexion si il vous plait.'
                        })
                        </script>
                         ";
                            $controller_connexion->inscription_client($_POST["user_name"], $_POST["user_password"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["numero_telephone"], $_POST["adresse"]);
                        }
                    }
                }
            }
        }
    }
    ?>
    <script src="../Scripts/InscriptionUtilisateur.js"></script>
</body>

</html>