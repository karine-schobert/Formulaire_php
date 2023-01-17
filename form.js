const Lang = {

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

        
            
               if (valueEl >= 6 &&  valueEl <= 9){
                   // on désactive LV1 et LV2
               }else if(valueEl >= 10 &&  valueEl <= 15 ){
                   
               }else if (alueEl >=16 &&  valueEl <= 20){
                   
               } else {
                   
               }

    },
};

console.log("je suis dans form.js");