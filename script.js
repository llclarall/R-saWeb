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



/* pour que mon header remonte vers le haut qd on scroll */

const header = document.querySelector(".header");

let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollBottom = lastScrollPos < window.scrollY;
  if (isScrollBottom) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 50) {
    header.classList.add("active");
    hideHeader();
  } else {
    header.classList.remove("active");
  }
});