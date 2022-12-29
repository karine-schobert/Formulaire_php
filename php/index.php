<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Permis de conduire</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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
                <h1>Votre inscription au </h1>
                <h2>Inscription de </h2>
                <h3>Etablissement</h3>
                <h4>Langue Vivante ..... Option ..... </h4>
                <h5>Inscription cantine</h5>

                <section class="answer">

                </section>
            </section>

        </div>

    </main>
</body>

</html>