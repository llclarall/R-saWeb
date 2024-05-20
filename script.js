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

/*   function sortAteliers() {
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
            return a.duree - b.duree;
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
  
function displayAteliers(ateliers) {
  var AteliersList = document.getElementById("AteliersList");
  AteliersList.innerHTML = "";
  ateliers.forEach(function(atelier) {
    AteliersList.innerHTML += `<div class="slide">
    <div class="image">
        <img src="${atelier.img}" alt="">
        <span>Mezze</span>
    </div>
    <div class="content">
        <div class="icon">
            <span><i class="fa-regular fa-clock" name="duree"></i> ${atelier.duree}</span> 
            <span><i class="fas fa-user"></i> ${atelier.capacite} </span>
            <span><i class="fa-solid fa-money-bill-1-wave" name="prix"></i> ${atelier.prix} </span>
        </div>
        <h3 class="title">${atelier.activite}</h3>
        <p>${atelier.description}</p>
        <a href="reserve.php?id=${atelier.id_atelier}" class="btn">Réserver</a>
    </div>
  </div>`;
  });
}; */


function triAteliers() {
        var critere = document.getElementById("critere").value;
        var ateliers = document.querySelectorAll("#AteliersList .slide");
        var tableauAteliers = Array.from(ateliers);

        tableauAteliers.sort(function(a, b) {
            var aValue = parseFloat(a.dataset[critere]);
            var bValue = parseFloat(b.dataset[critere]);
            return aValue - bValue;
        });

        var AteliersList = document.getElementById("AteliersList");
        AteliersList.innerHTML = "";

        tableauAteliers.forEach(function(atelier) {
            AteliersList.appendChild(atelier);
        });
    }

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('triButton').addEventListener('click', triAteliers);
});

