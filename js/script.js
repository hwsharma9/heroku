// sticky
document.addEventListener("DOMContentLoaded", (event) => {
  var sidebar = document.getElementById("sidebar");
  var sticky = sidebar.offsetTop;
  var mainContentArea = document.getElementById("main-content-area");
  var unstickHeight =
    mainContentArea.offsetTop +
    mainContentArea.offsetHeight -
    (sidebar.offsetHeight + 50);
  window.onscroll = function () {
    myFunction();
  };
  function myFunction() {
    if (window.pageYOffset > sticky) {
      sidebar.classList.add("sticky");
    } else {
      sidebar.classList.remove("sticky");
    }
    if (window.pageYOffset > unstickHeight - 75) {
      sidebar.classList.remove("sticky");
    }
  }
});
document.addEventListener("DOMContentLoaded", (event) => {
  // faculty
  var facLeft = document.getElementById("fac-left");
  var stickyFac = facLeft.offsetTop;
  console.log(stickyFac);
  var facRight = document.getElementById("fac-right");
  var unstickHeightFac =
    facRight.offsetTop + facRight.offsetHeight - (facLeft.offsetHeight + 50);
  window.onscroll = function () {
    myFunction();
  };
  function myFunction() {
    if (window.pageYOffset > stickyFac) {
      facLeft.classList.add("sticky");
    } else {
      facLeft.classList.remove("sticky");
    }
    if (window.pageYOffset > unstickHeightFac) {
      facLeft.classList.remove("sticky");
    }
  }
});

//  <script src="./js/pace.js"></script>
// loading duration capture
// Pace.on("done", function () {
//   $(".loader-p")
//     .delay(500)
//     .animate({ top: "30%", opacity: "0" }, 3000, $.bez([0.19, 1, 0.22, 1]));
//   $("#preloader")
//     .delay(1500)
//     .animate({ top: "-100%" }, 2000, $.bez([0.19, 1, 0.22, 1]));
//   TweenMax.from(".root", 2, {
//     delay: 1.8,
//     opacity: 0,
//     ease: Expo.easeInOut,
//   });
// });

// $(function () {
//   $("#accordion").accordion();
// });

// $("#show-news").slideUp();
// $("#news-show-btn").click(function () {
//   $("#show-news").slideToggle();
//   var innerText = $(this).text();
//   if (innerText == "Less News") {
//     $(this).text("More News");
//   } else {
//     $(this).text("Less News");
//   }
// });

// // Toggle show hide
// $(document).ready(function(){
//   $("button").click(function(){
//     $("p").toggle("fast");
//   });
// });

// function onclickMobileMenu() {
//   var mobileLinks = document.getElementById("mobile-links");
//   if (mobileLinks.style.display === "block") {
//     mobileLinks.style.display = "none";
//   } else {
//     mobileLinks.style.display = "block";
//   }
// }

// MOBILE MENU BAR
$("#mobile-btn").click(function () {
  $("#mobile-links").toggle("fast");
});

$(window).resize(function () {
  var mobileLinks = document.getElementById("mobile-links");
  if (window.innerWidth > 900) {
    mobileLinks.style.display = "flex";
  } else {
    mobileLinks.style.display = "none";
  }
});
