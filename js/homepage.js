$(document).ready(function () {
  $("#header-slider").owlCarousel({
    navigation: true, // Show next and prev buttons
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,
    loop: true,
    lazyLoad: true,
    // "singleItem:true" is a shortcut for:
    items: 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    loop: true,
    // nav:true,
    // navigation:true,
  });
  $("#header-slider").trigger("owl.play", 2000);

  $("#placement-slider").owlCarousel({
    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,
    loop: true,
    lazyLoad: true,

    // "singleItem:true" is a shortcut for:
    items: 3,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    loop: true,
    // nav:true,
    // navigation:true,
    // navigationText: [
    //         "<div class='icon icon-left'>👈</div>",
    //         "<div class='icon icon-right'>👉</div>"
    //       ],
    // navText: ['<div class="icon icon-left">👈</div>','<div class="icon icon-right" aria-hidden="true">👉</div>'],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      900: {
        items: 4,
      },
      1300: {
        items: 5,
      },
      1600: {
        items: 4,
      },
      1900: {
        items: 4,
      },
    },
  });
  $("#company-slider").owlCarousel({
    navigation: true,
    slideSpeed: 01,
    paginationSpeed: 001,
    singleItem: true,
    loop: true,
    items: 3,
    lazyLoad: true,

    autoplay: true,
    autoplayTimeout: 1500,
    autoplayHoverPause: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
      1600: {
        items: 4,
      },
      1900: {
        items: 4,
      },
    },
  });
});

// gsap.registerPlugin(ScrollTrigger);
// gsap.from(".head-anim", {
//   duration: 0.2,
//   y: "10px",
//   opacity: 0,
//   ease: "Power4.easeInOut",
//   stagger: 0.05,
//   scrollTrigger: {
//     trigger: ".head-anim",
//     start: "top 50%",
//     end: "bottom top",
//     toggleActions: "play none none none",
//     //options: play, pause, resume, reset, restart, complete, reverse,none
//   },
// });
// gsap.from(".anim", {
//   duration: 0.3,
//   y: "10px",
//   opacity: 0,
//   ease: "Power4.easeInOut",
//   stagger: 0.1,
//   scrollTrigger: {
//     trigger: ".anim",
//     start: "top 50%",
//     end: "bottom top",
//     toggleActions: "play none none none",
//     //options: play, pause, resume, reset, restart, complete, reverse,none
//   },
// });
