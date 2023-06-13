const reset = {

    init  : function () {
        
        console.log(' init');
        // récupérer l'age :
        // - cibler l'élément
         //cibler l'element
        const clickReset = document.querySelector('.reset');
        // - mettre un event listener 
        clickReset.addEventListener('click', reset.ClickhandleReset);
        
    },


        //on efface avec le bouton le resultat de tous les span
        
        ClickhandleReset: function(evt)  {
        // empeche le comportement par defaut du bouton
        evt.preventDefault();

        // il faut recuperer le document global des reponse
        const formResult=document.querySelector('.formulaire-resume');
        console.log('formResult resutat', formResult);

        // il faut recuperer tous les span qui ont une reponse 
        const spanElement=document.querySelectorAll('span');
        console.log(spanElement);
        spanElement.innerHtml='';

       

    
       
    }
}
document.addEventListener('DOMContentLoaded', reset.init);
