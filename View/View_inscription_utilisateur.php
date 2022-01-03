<?php
class ViewInscriptionUtilisateur
{
    public function inscription()
    {
        echo ' <div class="container-fluid">
<div class="row">
    <div class="col-sm-7">
        <img style="width:100%; height:25%" src="../Assets/user.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
        <img style="width:100%; height:25%" src="../Assets/user2.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
        <img style="width:100%; height:25%" src="../Assets/user3.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
        <img style="width:100%; height:25%" src="../Assets/user4.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
    </div>
    <div class="col-sm-5">
        <div class="p-5 bg-secondary text-center mb-5 mt-1 container-fluid">
            <h1 class="text-light">Bienvenu a Nexus express</h1>
        </div>
        <form class="border border-5 p-2" action="../Routeurs/InscriptionUtilisateur.php" method="post">
            <label class="mt-2">
                <h4>Nom d\'utilisateur :</h4>
            </label>
            <input class="form-control my-2" type="text" name="user_name" required placeholder="Entrez un nom d utilisateur" value="'.(isset($_POST["user_name"]) ? $_POST["user_name"] : "").'">
            <label class="mt-2">
                <h4>Nom :</h4>
            </label>
            <input class="form-control mt-2" type="text" name="nom" required placeholder="Entrez Votre nom" value="'.(isset($_POST["nom"]) ? $_POST["nom"] : "").'">
            <label class="mt-2">
                <h4>Prenom :</h4>
            </label>
            <input class="form-control mt-2" type="text" name="prenom" required placeholder="Entrez Votre prenom" value="'.(isset($_POST["prenom"]) ? $_POST["prenom"] : "").'">
            <label class="mt-2">
                <h4>Adresse :</h4>
            </label>
            <input class="form-control mt-2" type="text" name="adresse" required placeholder="Entrez Votre adresse" value="'.(isset($_POST["adresse"]) ? $_POST["adresse"] : "").'">
            <label class="mt-2">
                <h4>Email :</h4>
            </label>
            <input class="form-control mt-2" type="email" name="email" required placeholder="Entrez Votre adresse mail" value="'.(isset($_POST["email"]) ? $_POST["email"] : "").'">
            <label class="mt-2">
                <h4>Numero de telephone :</h4>
            </label>
            <input class="form-control mt-2" type="tel" name="numero_telephone" required pattern="[0-9]{10}" placeholder="Numero de telephone, format : 0521321451" value="'. (isset($_POST["numero_telephone"]) ? $_POST["numero_telephone"] : "").'">
            <label class="mt-2">
                <h4>Mot de passe :</h4>
            </label>
            <input class="form-control mt-2" type="password" name="user_password" required placeholder="Entrez un mot de passe" value="'.(isset($_POST["user_password"]) ? $_POST["user_password"] : "").'">
            <label class="mt-2">
                <h4>Confirmation mot de passe :</h4>
            </label>
            <input class="form-control mt-2" type="password" name="user_password_confirmation" required placeholder="Retapez a nouveau votre mot de passe" value="'.(isset($_POST["user_password_confirmation"]) ? $_POST["user_password_confirmation"] : "").'">
            <label class="mt-2">
                <h4>Type de compte :</h4>
            </label>
            <div class="form-check mt-2">
                <input type="radio" class="form-check-input" name="type_compte" value="client" onclick="get_type()" checked>
                <label class="form-check-label ">
                    <h5>Client</h5>
                </label>
            </div>
            <div class="form-check mt-2">
                <input type="radio" class="form-check-input" name="type_compte" value="transporteur" data-bs-toggle="collapse" data-bs-target="#trajets">
                <label class="form-check-label">
                    <h5>Transporteur</h5>
                </label>
            </div>
            <div id="trajets" class="collapse in mt-2 p-2 border border-5">
                <label class="form-check-label">
                    <h5>Choisissez les liste de vos trajets</h5>
                </label>
                <div class="form-check">';
        $controller_connexion = new ControllerInscriptionUtilisateur();
        $wilayas = $controller_connexion->get_wilayas();
        foreach ($wilayas as $wilaya) {
            echo ' <input class="form-check-input" type="checkbox" id="w' . $wilaya["num_wilaya"] . '" name="wilaya[]" value="' . $wilaya["num_wilaya"] . '" >
                                              <label class="form-check-label">' . $wilaya["libele"] . '</label>';
            echo '<br>';
        }
        echo '
                     </div>
                        <div class="mt-2 p-2 border border-5">
                            <div class="form-check">
                                <input type="radio" id="#non_certification" class="form-check-input" name="demande_certification" value="0" onclick="get_certification()" checked>
                                <label class="form-check-label ">
                                    <h5>Je ne veux pas etre certifie</h5>
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input type="radio" class="form-check-input" name="demande_certification" value="1" data-bs-toggle="collapse" data-bs-target="#demande">
                                <label class="form-check-label">
                                    <h5>Je veux etre certifie</h5>
                                </label>
                            </div>
                            <div id="demande" class="collapse in mt-2">
                                <label class="mt-2">
                                    <h5 class="mt-2">Demande de certification</h5>
                                </label>
                                <ol>
                                    <li>Veuillez telecharger la demande de certification en format pdf via le button suivant :
                                        <a target="_blank" href="../Certifications/download_certification.php" style="width:100%" class="rounded btn btn-lg btn-block btn-success my-2 pt-2">Telecharger</a>
                                    </li>
                                    <li>Veuillez remplir attentivement la demande de certification.</li>
                                    <li>Effectuez un scan lisible de la demande de certification remplie.</li>
                                    <li>Veuillez deposer le scan en format pdf dans le champs qui suit.</li>
                                    <h5 class="mt-2">Attention la taille du scan ne doit pas depasser 25 Mo.</h5>
                                </ol>
                                <input type="file" class="form-control mt-2 btn btn-success" name="telecharger" placeholder="Deposer la demande">
                            </div>
                        </div>
                    </div>
                    <button style="width:100%" name="connexion" class="rounded btn btn-lg btn-block btn-success my-5 pt-2" type="submit">Inscription</button>
                    <a class="text-dark" href="../Routeurs/ConnexionUtilisateur.php"><h6>Vous avez deja un compte ?</h6></a>
                </form>
            </div>
        </div>
    </div>';
    }
}
