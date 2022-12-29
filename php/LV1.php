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

                    <form action="" method="POST">
<!-- 
                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="lastname" required>

                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="firstname" required > - -->

                        <label for="age">Âge</label>
                        <input type="number" name="age" id="age" required >

                        <fieldset>
                            <legend>Options langues: <input type="radio" id="LV1" name="LV1" value="LV1">
                                <label for="LV1">LV1</label> 
                            </legend>
                            <div>
                                <input type="radio" id="Anglais" name="Anglais" value="Anglais">
                                <label for="Anglais">Anglais</label>
                            </div>
                            <div>
                                <input type="radio" id="Allemand" name="Allemand" value="Allemand">
                                <label for="Allemand">Allemand</label>
                            </div>
                            <div>
                                <input type="radio" id="Espagnole" name="Espagnole" value="Espagnole">
                                <label for="Espagnole">Espagnole</label>
                            </div>
                            <div>
                                <input type="radio" id="Italien" name="Italien" value="Italien">
                                <label for="Italien">Italien</label>
                            </div>
                        </fieldset>
<!-- 
                        <fieldset>
                            <legend>Options langues: <input type="checkbox" id="LV2" name="LV2" value="LV2">
                                <label for="LV2">LV2</label> 
                            </legend>
                            <div>
                                <input type="checkbox" id="Anglais" name="Option" value="Anglais">
                                <label for="Anglais">Anglais</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Allemand" name="Option" value="Allemand">
                                <label for="Allemand">Allemand</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Espagnole" name="Option" value="Espagnole">
                                <label for="Espagnole">Espagnole</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Italien" name="Option" value="Italien">
                                <label for="Italien">Italien</label>
                            </div>
                        </fieldset> -->
<!-- 
                        <fieldset> 
                            <legend>Cantine
                            </legend>
                            <div>
                                <input type="checkbox" id="oui" name="Choix" value="oui">
                                <label for="oui">oui</label>
                            </div>
                            <div>
                                <input type="checkbox" id="non" name="choix" value="non">
                                <label for="non">Non</label>
                            </div>
                        </fieldset> -->

                        <button>Je m'inscris</button>
                    </form>

                </section>

                <section class="formulaire-resume">

                <!-- Verifier que le formulaire soit bien rempli et qu'il ne soit pas vide-->
                <h1 class="titre-Etablissement">Inscription à l'un de nos etablissement </h1>
                <?php
                
                if(isset($_POST) && !empty($_POST)){
                //     var_dump($_POST);
                }
                // die();
                ?>
                  
                   
                    <h2>Merci pour votre inscription</h2>
                    <?php
                    //   Verification que le formulaire est bien été soumis  nom prenom age apparition page de droite 
                    if(isset($_POST)&& ($_POST)){
                        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
                        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
                        $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                        echo '<span>'. $lastname .' '. $firstname . '<pan>';
                    
                    } 
                    // die();
                    ?>
                     <h3>Tu as </h3>
                     <?php
                     //verification de l'age
                        if (isset($_POST)&& ($_POST)) {
                            $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                            echo '<span>'.$age .'  ans <pan>';
                            }
                    // die();   
                    ?>

                    <h3>Tu es  :</h3>
                    <?php
                    // verification de l'age pour l'etablissement (primaire, college, lycee)
                    if(isset($_POST)&& ($_POST)){
                        $age =  $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                        if ($age >=6 && $age <=9){
                            echo "<span> Bienvenu en primaire</span><br>";
                        }elseif($age >=10 && $age <= 15 ){
                            echo "<span> Bienvenu au college </span>";
                        }elseif ($age >=16 && $age <= 20){
                            echo "<span> Bienvenu au lycée </span>";
                        }else {
                            echo "<span> Desole tu ne peux pas t'inscrire </span>";
                        }

                    }
                    //  die(); 
                    ?>
                    <h4>ton choix pour LV1 est :</h4>
                    <?php
                         // verification de la donnee coche a continuer ......
if (isset($_GET) && !empty($_GET)) {
    if ($age >=10 && $age <= 15) {
        $anglais = filter_input(INPUT_POST, 'Anglais');
        $allemand = filter_input(INPUT_POST, 'Allemand');
        $espagnole = filter_input(INPUT_POST, 'Espagnole');
        $italien = filter_input(INPUT_POST, 'Italien');



        echo "ta langue est $anglais ";
    }
}
                   var_dump($age);
                   var_dump($anglais);
                    
                
                    ?>

                    <h4>ton choix pour LV2</h4>
                    <?php

                    ?>
                    <h5>Inscription cantine</h5>

                    <section class="answer">
                    
                
                    </section>
                </section>

            </div>

        </main>
    </body>

</html>