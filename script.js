
/* j'ai fait la détection des mails temporaires en php parce que je n'avais pas vu qu'il fallait le faire en js
C'est dans le fichier reserve.php */


// initialisation du slider de la page d'accueil 
var swiper = new Swiper(".home-slider", {
  loop: true,
  centeredSlides:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



/* slider blog */

  var swiper = new Swiper(".blogs-slider", {
    grabCursor: true,
    loop: true,
    centeredSlides:true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    }
  });
  


  /* tri ateliers */

  // chargement du DOM
  document.addEventListener('DOMContentLoaded', function() {
    // Ajoute un écouteur d'événement au bouton de tri
    document.getElementById('triButton').addEventListener('click', function() {
      // Récupére le critère de tri sélectionné
      var critere = document.getElementById("critere").value;
      
      // Récupére tous les ateliers
      var ateliers = document.querySelectorAll("#AteliersList .slide");
      
      // Convertit la liste des ateliers en tableau
      var tableauAteliers = Array.from(ateliers);
  
      // Tri le tableau des ateliers en fonction du critère
      tableauAteliers.sort(function(a, b) {
        var aValue = parseFloat(a.dataset[critere]);
        var bValue = parseFloat(b.dataset[critere]);
        return aValue - bValue;
      });
  
      // Récupére la liste des ateliers
      var AteliersList = document.getElementById("AteliersList");
      
      // Vide la liste des ateliers
      AteliersList.innerHTML = "";
  
      // Ajoute les ateliers triés à la liste
      tableauAteliers.forEach(function(atelier) {
        AteliersList.appendChild(atelier);
      });
    });
  });




  /* code pour que mon header remonte vers le haut quand on scroll */

const header = document.querySelector(".header");

let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollBottom = lastScrollPos < window.scrollY;
  if (isScrollBottom) {
    // rajoute la classe .hide au header si on scrolle vers le bas 
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 160) {
    // rajoute la classe .active au header si on scrolle vers le haut 
    header.classList.add("active");
    hideHeader();
  } else {
    header.classList.remove("active");
  }
});




// fonction pour revenir à la page précédente

// Écouteur d'événement pour le chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
  // Écouteur d'événement pour le clic sur le bouton de retour
  document.querySelector('.back-button').addEventListener('click', function(){
    window.history.back();
  });
});





// fonstion pour vérifier que les champs nom et prénom du formulaire contiennent bien des lettres et pas des espaces ou des chiffres

function validateForm() {
  var prenomInput = document.querySelector('input[name="prenom"]');
  var nomInput = document.querySelector('input[name="nom"]');
  var prenomErrorMessage = document.getElementById('prenom-error-message');
  var nomErrorMessage = document.getElementById('nom-error-message');

  // Expression régulière pour le prénom et le nom
  var regexName = /^[a-zA-ZÀ-ÿ\-'\s]+$/;

  // Validation du prénom
  if (!regexName.test(prenomInput.value.trim())) {
      prenomErrorMessage.style.display = 'block';
      return false;
  } else {
      prenomErrorMessage.style.display = 'none';
  }

  // Validation du nom
  if (!regexName.test(nomInput.value.trim())) {
      nomErrorMessage.style.display = 'block';
      return false;
  } else {
      nomErrorMessage.style.display = 'none';
  }

  return true;
}
