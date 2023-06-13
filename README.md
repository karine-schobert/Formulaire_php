# FORMULAIRE EN PHP
---
## Techniques utilisées pour la creation du formulaire

- Css et html pour la mise  en forme du formulaire
- création d'une page index.php pour recuperer les données du formulaire
- Création des pages js pour la dynamisation du formulaire sur le bouton reset et le fieldset pour le choix des langues.

    
## OBJECTIFS 

- Revoir la syntaxe PHP
- Ecrire le script correspondant
- Utiliser le formulaire 
- Savoir utiliser les conditions pour executer le traitement des données du formulaire
  
---
## PROBLEMATIQUE

- Inscription des eleves dans un groupe scolaire de la primaire au lycée
- Faire apparaitre le nom et prénom de l'enfant.
- A chaque âge correspond un niveau d'étude (primaire, college, lycee).
- Prendre en compte l'option langue que pour le college et lycée.
- Prendre en compte l'inscription a la cantine avec oui ou non .

---
## INSTRUCTIONS

### les ages a prendre en compte 

- Age pour la primaire de 6 à 9 ans
- Age pour le college de 10 à 15 ans
- Age pour le lycée de 16 à 20 ans
  
### Niveau d'études à prendre en compte pour la langue
    - Faire un choix obligatoire pour le college en LV1

     * LV1

    -Faire un choix obligatoire pour le lycee en LV1 Et LV2
      * LV1
      * LV2

 * [Code-Js-Choix](js/Formlv1.js);

---
### Le choix de la cantine 

    - Cocher obligatoirement la case : soit OUI soit Non 
  
---
### Creation d'un bouton reset 

    - Effacer le resultat du formulaire au click en mettant en place un événement dans un module 

### Ajout d'un style

    - ajout du style color  sur le span des réponses lv1 et lv2 en php 
     

  ---
### RESULTATS

    L'affichage des reponses doit s'afficher sur la page:
        Votre inscription .....
---
# Difficultés rencontrées :

    - Mise en place du javascript sur le fieldset et le bouton reset 
    - Mise en place du php pour reccupere les donnees du formulaire et de mettre en place les conditions selon l'âge


# Ameliorations futur de ce projet :

    - Ajouter au formulaire les  coordonnées de l'utilisateur 
    - Message de reussite du remplissage 
    - Mettre en place un Bdd 

# Mes ressources

    - liens [Javacript](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/for)
    - liens [recuperer et manipuler les données des formulaires HTML en PHP](https://waytolearnx.com/2020/01/recuperer-les-donnees-dun-formulaire-en-php.html)


# Remarques

- Travail  en pair-programing sur la partie choix de LV1 et Lv2  en js et php 

Merci Bruno pour ton aide 




