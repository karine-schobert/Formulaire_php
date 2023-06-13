const Lang = {

    fieldsetLV1 : document.querySelector('#fieldset-lv1'),

    fieldsetLV2 : document.querySelector('#fieldset-lv2'),

    init  : function () {
        // récupérer l'age :
        // - cibler l'élément
         //cibler l'element
        const clickAge = document.querySelector('#age');
        // - mettre un event listener 
        clickAge.addEventListener('change', Lang.handleAge);
        
    },


    //selon l'age on desactive et active les formulaires de langues 

    handleAge : function(evt)  {
        // récupérer la valeur du formulaire
        const valueEl = evt.currentTarget.value

        
                
               if (valueEl <= 9){
                   // on désactive LV1 et LV2
                   Lang.disableLV1();
                   Lang.disableLV2();
               }else if(valueEl >= 10 &&  valueEl <= 15 ){
                    // on active LV1
                    Lang.enableLV1();
                   // on désactive LV2
                   Lang.disableLV2();
               }else if (valueEl >=16 &&  valueEl <= 20){
                   // on active les 2
                   Lang.enableLV1();
                   Lang.enableLV2();
               }
    },

    disableLV1 : function () {
        Lang.fieldsetLV1.disabled = true;
    },

    disableLV2 : function () {
        Lang.fieldsetLV2.disabled = true;

    },

    enableLV1 : function () {
        Lang.fieldsetLV1.disabled = false;

    },

    enableLV2 : function () {
        Lang.fieldsetLV2.disabled = false;

    }
};

document.addEventListener('DOMContentLoaded', Lang.init);
console.log("je suis dans form.js");