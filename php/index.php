<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Permis de conduire</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulaire d'inscription scolaire</title>
</head>


<body>
    <main>
        <div class="Container_Formulaire">
            <section class="formulaire-inscription">
                <h1>Inscription dans notre établissement</h1>
                <h2>Groupe scolaire KS primaire-college-lyçée</h2>

                <form action="" method="POST">

                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname">

                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">

                    <label for="age">Âge</label>
                    <input type="number" name="age" id="age">

                    <fieldset>
                        <legend>Options langues: <input type="checkbox" id="LV1" name="Option" value="LV1">
                            <label for="LV1">LV1</label> <input type="checkbox" id="LV2" name="Option"
                                value="LV2"><label for="LV2">LV2</label>
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
                    </fieldset>

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
                    </fieldset>

                    <button>Je m'inscris</button>
                </form>

            </section>

            <section class="formulaire-resume">

            <!-- Verifier que le formulaire soit bien rempli et qu'il ne soit pas vide-->
            <?php
            if(isset($_POST) &&!empty($_POST)){
            //     var_dump($_POST);
            }
             ?>
                <h1>Votre inscription au </h1>
                <h2>Inscription de </h2>
                  <?php
                //   Verification que le formulaire est bien été soumis  nom prenom age apparition page de droite 
                if(isset($_POST)&& ($_POST)){
                    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
                    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
                    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                    echo '<span>'. $lastname .' '. $firstname . ' '.$age . '<pan>';
                   
                }
                ?>
                <h3>Etablissement</h3>
                <?php
                // verification de l'age pour l'etablissement (primaire, college, lycee)
                if(isset($_POST)&& ($_POST)){
                    $age =  $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
                    if ($age >=6 && $age <=9){
                        echo "<span> Bienvenu en primaire  la primaire </span>";
                    }elseif($age >=10 && $age <= 15 ){
                        echo "<span> Bienvenu au college </span>";
                    }elseif ($age >=16 && $age <= 20){
                        echo "<span> Bienvenu au lycée </span>";
                    }else {
                        echo "<span> Desole tu ne peux pas t'inscrire </span>";
                    }

                }
                ?>
                <h4>Langue Vivante ..... Option ..... </h4>
                <h5>Inscription cantine</h5>

                <section class="answer">
                
              
                </section>
            </section>

        </div>

    </main>
</body>

</html>