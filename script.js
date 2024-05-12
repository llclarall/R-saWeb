var swiper = new Swiper(".home-slider", {
/*   grabCursor: true, */
  loop: true,
  centeredSlides:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


/* slider food */
var swiper = new Swiper(".food-slider", {
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

  function sortAteliers() {
    var critere = document.getElementById("critere").value;
    $.ajax({
      url: "get_ateliers.php",
      type: "GET",
      success: function(response) {
        var ateliers = JSON.parse(response);
        if (critere === "prix") {
          ateliers.sort(function(a, b) {
            return a.prix - b.prix;
          });
        } else if (critere === "duree") {
          ateliers.sort(function(a, b) {
            return new Date(a.duree) - new Date(b.duree);
          });
        }
        displayAteliers(ateliers);
      },
      error: function(xhr, status, error) {
        console.log("Erreur lors de la récupération des ateliers : " + error);
      }
    });
  }
  
  function displayAteliers(ateliers) {
    var AteliersList = document.getElementById("AteliersList");
    AteliersList.innerHTML = "";
    ateliers.forEach(function(atelier) {
      AteliersList.innerHTML += "<div>" + atelier.name + " - " + atelier.prix + " - " + workshop.duree + "</div>";
    });
  }
  
