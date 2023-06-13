const Lang = {
    // Propriété : élément DOM pour le premier fieldset
        fieldsetLV1 : document.querySelector('#fieldset-lv1'),

    // Propriété : élément DOM pour le deuxième fieldset
        fieldsetLV2 : document.querySelector('#fieldset-lv2'),

     // Méthode d'initialisation
    init  : function () {
        console.log('init' );

    // Récupérer l'âge :
    // - Cibler l'élément avec l'ID "age"
        const clickAge = document.querySelector('#age');

    //- Ajouter un écouteur d'événement de changement
        clickAge.addEventListener('change', Lang.handleAge);
        
    },


    // Méthode pour gérer l'âge et activer/désactiver les formulaires de langues en conséquence

    handleAge : function(evt)  {

        // récupérer la valeur du formulaire
        const valueEl = evt.currentTarget.value
                
               if (valueEl <= 9){
                   // On désactive le premier fieldset (LV1)  
                    Lang.disableLV1();
                  // On desactive le deuxième fieldset (LV2)
                    Lang.disableLV2();
               }else if(valueEl >= 10 &&  valueEl <= 15 ){
                    // On active LV1
                    Lang.enableLV1();
                   // on désactive LV2
                   Lang.disableLV2();
               }else if (valueEl >=16 &&  valueEl <= 20){
                   // On active les deux fieldsets (LV1 et LV2)
                   Lang.enableLV1();
                   Lang.enableLV2();
               }
    },
            // Méthode pour désactiver le premier fieldset (LV1)
                disableLV1 : function () {
                    Lang.fieldsetLV1.disabled = true;
                },

            // Méthode pour désactiver le deuxième fieldset (LV2)
                disableLV2 : function () {
                    Lang.fieldsetLV2.disabled = true;

                },
            // Méthode pour activer le premier fieldset (LV1)
                enableLV1 : function () {
                    Lang.fieldsetLV1.disabled = false;

                },
            // Méthode pour activer le deuxième fieldset (LV2)
                enableLV2 : function () {
                    Lang.fieldsetLV2.disabled = false;

                }
            };
// Attente de chargement du DOM, puis appel de la méthode d'initialisation
document.addEventListener('DOMContentLoaded', Lang.init);
