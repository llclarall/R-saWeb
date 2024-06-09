

// Initialisation du slider de la page d'accueil 
var swiper = new Swiper(".home-slider", {
  loop: true,
  centeredSlides:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


/* slider food */
/* var swiper = new Swiper(".food-slider", {
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
  }); */



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

  function triAteliers() {
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
  }

  // chargement du DOM
  document.addEventListener('DOMContentLoaded', function() {
    // Ajoute un écouteur d'événement au bouton de tri
    document.getElementById('triButton').addEventListener('click', triAteliers);
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

function goBack() {
  window.history.back();
};

// Écouteur d'événement pour le chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
  // Écouteur d'événement pour le clic sur le bouton de retour
  document.querySelector('.back-button').addEventListener('click', goBack);
});