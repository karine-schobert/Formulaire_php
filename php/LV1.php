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

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="lastname" required>

                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="firstname" required > 

                        <label for="age">Âge</label>
                        <input type="number" name="age" id="age" required >

                        <!-- TABLEAU lv1 -->
                        <fieldset>
                            <legend>Options langues: <input type="radio" id="LV1" name="LV1" required value="LV1">
                                <label for="LV1">LV1</label> 
                            </legend>
                            <div>
                                <input type="radio" id="Anglais" name="Option" required  value="Anglais">
                                <label for="radio">Anglais</label>
                            </div>
                            <div>
                                <input type="radio" id="Allemand" name="Option" required  value="Allemand">
                                <label for="Allemand">Allemand</label>
                            </div>
                            <div>
                                <input type="radio" id="Espagnole" name="Option"required   value="Espagnole">
                                <label for="Espagnole">Espagnole</label>
                            </div>
                            <div>
                                <input type="radio" id="Italien" name="Option" required  value="Italien">
                                <label for="Italien">Italien</label>
                            </div>
                        </fieldset>

                            <!-- TABLEAU LV2 -->
                        <fieldset>
                            <legend>Options langues: <input type="radio" id="LV2" required  name="LV2" required  value="LV2">
                                <label for="LV2">LV2</label> 
                            </legend>
                            <div>
                                <input type="radio" id="Anglais" name="Option2" required  value="Anglais">
                                <label for="Anglais">Anglais</label>
                            </div>
                            <div>
                                <input type="radio" id="Allemand" name="Option2"required  value="Allemand">
                                <label for="Allemand">Allemand</label>
                            </div>
                            <div>
                                <input type="radio" id="Espagnole" name="Option2" required value="Espagnole">
                                <label for="Espagnole">Espagnole</label>
                            </div>
                            <div>
                                <input type="radio" id="Italien" name="Option2" required  value="Italien">
                                <label for="Italien">Italien</label>
                            </div>
                        </fieldset> 

                        <!-- <fieldset> 
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
                    if(isset($_POST)&& !empty($_POST)){
                        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
                        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
                        $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                        echo '<span>'. $lastname .' '. $firstname . '<span>';
                    
                    } 
                    // die();
                    ?>
                     <h3>Tu as </h3>
                     <?php
                     //verification de l'age
                        if (isset($_POST)&& !empty($_POST)){
                            $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                            echo '<span>'.$age .'  ans <pan>';
                            }
                    // die();   
                    ?>

                    <h3>Tu es  :</h3>
                    <?php
                    // verification de l'age pour l'etablissement (primaire, college, lycee)
                    if(isset($_POST)&& !empty($_POST)){
                     $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
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
                    <h4>Tu es au college  ta LV1 preferée:</h4>
                    <?php
                        if(isset($_POST)&& !empty($_POST)){
                            if ($age >=10 && $age <= 15)
                            echo " LV1 Preferee: <span>" . $_POST['Option'] . "</span>";
                        }  
                                  
                        // var_dump($_POST);
                        //   ;        
                    ?>

                    <h4>Tu es au lycee choisi ta LV1  et ta LV2 preferée</h4>
                        <?php
                            if (isset($_POST)&& !empty($_POST)){
                                if ($age >=16 && $age <= 20) {
                                    echo "LV1 Preferee: <span>" . $_POST['Option'] . "</span><br>";
                                    echo "LV2 Preferee: <span>" . $_POST['Option2'] . "</span>";
                                }
                            }
                            //die();
                    ?> 
                    <h5>Inscription cantine</h5>

                  <form>
                 <button><input type="reset" value="Réinitialiser le formulaire"></button>
                                    <?php
                                     
                                            ?>           
                    </form>       
                    </section>
                </section>

            </div>

        </main>
    </body>

</html>