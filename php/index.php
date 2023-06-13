<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulaire d'inscription</title>
</head>



<body>
    <main>
        <div class="Container_Formulaire">
            <section class="formulaire-inscription">
                <h1>Inscription dans notre établissement</h1>
                <h2 class="titre-inscription">Groupe scolaire KS primaire-college-lyçée</h2>

                <form action="" method="POST" id="form-inscription">
                   
                    <!-- choix utilisateur -------------------------------------------------------------->
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname" required>

                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" required>

                    <label for="age">Âge</label>
                    <input type="number" name="age" id="age" required>

                    <!-- choix langue lv1 -------------------------------------------------------------->
                    <fieldset id="fieldset-lv1">
                        <legend>Options langues: LV1
                        </legend>
                        <div>
                            <input type="radio" id="Anglais" name="Option" required value="Anglais">
                            <label for="radio">Anglais</label>
                        </div>
                        <div>
                            <input type="radio" id="Allemand" name="Option" required value="Allemand">
                            <label for="Allemand">Allemand</label>
                        </div>
                        <div>
                            <input type="radio" id="Espagnole" name="Option" required value="Espagnole">
                            <label for="Espagnole">Espagnole</label>
                        </div>
                        <div>
                            <input type="radio" id="Italien" name="Option" required value="Italien">
                            <label for="Italien">Italien</label>
                        </div>
                    </fieldset>

                    <!-- choix langue lv2 -------------------------------------------------------------->
                    <fieldset id="fieldset-lv2">
                        <legend>Options langues: LV2
                        </legend>
                        <div>
                            <input type="radio" id="Anglais" name="Option2" required value="Anglais">
                            <label for="Anglais">Anglais</label>
                        </div>
                        <div>
                            <input type="radio" id="Allemand" name="Option2" required value="Allemand">
                            <label for="Allemand">Allemand</label>
                        </div>
                        <div>
                            <input type="radio" id="Espagnole" name="Option2" required value="Espagnole">
                            <label for="Espagnole">Espagnole</label>
                        </div>
                        <div>
                            <input type="radio" id="Italien" name="Option2" required value="Italien">
                            <label for="Italien">Italien</label>
                        </div>
                    </fieldset>
                    
                    <!-- choix cantine -------------------------------------------------------------->
                    <fieldset>
                        <legend>Cantine</legend>
                        <div>
                            <input type="radio" id="Oui" name="Cantine" required value="Oui">
                            <label for="Oui">Oui</label>
                        </div>
                        <div>
                            <input type="radio" id="Non" name="Cantine" required value="Non">
                            <label for="Non">Non</label>
                        </div>
                    </fieldset>

                    <button>Je m'inscris</button>


                </form>

            </section>

            <section class="formulaire-resume">

                <!-- Verifier que le formulaire soit bien rempli et qu'il ne soit pas vide-->
                <h1 class="titre-Etablissement">Inscription à l'un de nos etablissement </h1>
                <?php

                if (isset($_POST) && !empty($_POST)) {
                    //     var_dump($_POST);
                }
                // die();
                ?>


                <h2>Merci pour votre inscription</h2>
                <?php
                //   Verification que le formulaire est bien été soumis  nom prenom age apparition page de droite 
                if (isset($_POST) && !empty($_POST)) {
                    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
                    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
                    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
                    echo '<span>' . $lastname . ' ' . $firstname . '<span>';
                }
                // die();
                ?>
                <h3>Ton âge </h3>
                <?php
                //verification de l'age
                if (isset($_POST) && !empty($_POST)) {
                    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
                    echo '<span>' . $age . '  ans <span>';
                }
                // die();   
                ?>

                <h3>Tu es inscrit :</h3>
                <?php
                // verification de l'age pour l'etablissement (primaire, college, lycee)
                if (isset($_POST) && !empty($_POST)) {
                    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
                    if ($age >= 6 && $age <= 9) {
                        echo "<span> En primaire</span><br>";
                    } elseif ($age >= 10 && $age <= 15) {
                        echo "<span> Au college </span>";
                    } elseif ($age >= 16 && $age <= 20) {
                        echo "<span> Au lycée </span>";
                    } else {
                        echo "<span> Desole tu ne peux pas t'inscrire </span>";
                    }
                }
                //  die(); 
                ?>

                <?php
                if (isset($_POST) && !empty($_POST)) {
                    if ($age >= 10 && $age <= 15) {
                        echo "<h4> Ton option  LV1 preferée:</h4>";
                        echo  $_POST['Option'] . "</span>";
                    }
                }

                // var_dump($_POST);
                //   ;        
                ?>
                <?php
                if (isset($_POST) && !empty($_POST)) {
                    if ($age >= 16 && $age <= 20) {
                        echo "<h4>Tu es au lycee ta LV1  et ta LV2 preferée</h4>";
                        echo " <span class='colorLv1'>" . $_POST['Option'] . "</span><br>";
                        echo "<span class='colorLv2'>" . $_POST['Option2'] . "</span>";
                    }
                }
                //die();
                // unset($_POST);

                ?>

                <h3>Inscription cantine</h3>
                <?php

                    if (isset($_POST['Cantine']) && $_POST['Cantine'] === 'Oui') {
                        // Vérifier l'âge
                        if (isset($_POST) && !empty($_POST)) {
                           
                            if ($age >= 6 && $age <= 9) {
                                echo "<span>Bonne Cantine</span>";
                            } elseif ($age >= 10 && $age <= 15) {
                                echo "<span>Bonne Cantine </span>";
                            } elseif ($age >= 16 && $age <= 20) {
                                echo "<span>Bonne Cantine</span>";
                            } else {
                                echo "<span>Âge non valide pour la cantine</span>";
                            }
                        } else {
                            echo "<span>Veuillez entrer votre âge</span>";
                        }
                    } elseif (isset($_POST['Cantine']) && $_POST['Cantine'] === 'Non') {
                        echo "<span>Au revoir pour la cantine</span>";
                    } else {
                        echo "<span>Faites un choix pour la cantine</span>";
                    }

                ?>

                <div class="buton-reset">
                    <input class="reset" type="reset" value="Réinitialiser">
                </div>

               
            </section>
        </div>

    </main>
</body>
<script src="../js/formLv1.js"></script>
<script src="../js/resetForm.js"></script>

</html>