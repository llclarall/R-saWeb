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
  

