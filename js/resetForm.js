const resetForm = {
    init: function() {

    // La fonction init est appelée lorsque le DOM est chargé
    console.log('init');

    // Sélectionne l'élément avec la classe 'reset'
      const clickReset = document.querySelector('.reset');

    // Ajoute un écouteur d'événement 'click' sur l'élément sélectionné
      clickReset.addEventListener('click', resetForm.handleReset);
    },
  
    handleReset: function(evt) {
    // La fonction handleReset est appelée lorsqu'un clic,
    // est effectué sur l'élément avec la classe 'reset'
      evt.preventDefault();
      resetForm.resetSpans();
      console.log(resetForm);
    },
  
    resetSpans: function() {

    // La fonction resetSpans réinitialise le contenu de tous les éléments <span> dans le document
      const spans = document.querySelectorAll('span');
      console.log(spans);

    //Boucle pour aller chercher tous les elements <span> de l'utilisateur (nom, prenom, age, etablissement,)
      for (let i = 0; i < spans.length; i++) {
        spans[i].textContent = '';
      }
    }
  };
  // Attente de chargement du DOM, puis appel de la méthode d'initialisation
  document.addEventListener('DOMContentLoaded', resetForm.init);
  
  