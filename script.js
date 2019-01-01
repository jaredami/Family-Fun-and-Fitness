jQuery(document).ready(function() {
  /* toggle nav menu display (for narrow width) */
  const hamburger = document.querySelector(".nav-hamburger");
  let narrowNavStyle = document.querySelector(".nav-list-narrow").style;

  function toggleNarrowNavVisibility() {
    console.log("nav toggled");
    if (narrowNavStyle.display === "none") {
      narrowNavStyle.display = "block";
    } else {
      narrowNavStyle.display = "none";
    }
  }

  hamburger.addEventListener("click", toggleNarrowNavVisibility);

  /* toggle amenities display (for narrow width nav menu) */
  const amenitiesLink = document.getElementById("amenities-link-narrow");
  let narrowAmenitiesDropdownStyle = document.querySelector(
    ".dropdown-content-narrow"
  ).style;

  function toggleNarrowAmenitiesDropdownVisibility() {
    console.log("narrow amenities toggled");
    if (narrowAmenitiesDropdownStyle.position === "absolute") {
      narrowAmenitiesDropdownStyle.opacity = "1";
      narrowAmenitiesDropdownStyle.position = "relative";
    } else {
      narrowAmenitiesDropdownStyle.opacity = "0";
      narrowAmenitiesDropdownStyle.position = "absolute";
    }
  }
  amenitiesLink.addEventListener(
    "click",
    toggleNarrowAmenitiesDropdownVisibility
  );

  /* slideshow navigation */
  const prev = document.querySelector(".prev");
  const next = document.querySelector(".next");
  const slides = document.querySelectorAll(".mySlides");
  let currentSlideNum = 0;
  const slide2 = document.getElementById("slideshow-img-2");
  const slide3 = document.getElementById("slideshow-img-3");

  function handlePrevCLick(e) {
    slides[currentSlideNum].classList.remove("currentSlide");
    currentSlideNum > 0
      ? (currentSlideNum = currentSlideNum - 1)
      : (currentSlideNum = 2);
    slides[currentSlideNum].classList.add("currentSlide");
  }

  function handleNextCLick(e) {
    slides[currentSlideNum].classList.remove("currentSlide");
    currentSlideNum < 2
      ? (currentSlideNum = currentSlideNum + 1)
      : (currentSlideNum = 0);
    slides[currentSlideNum].classList.add("currentSlide");
  }

  prev.addEventListener("click", handlePrevCLick);
  next.addEventListener("click", handleNextCLick);

  /* slideshow auto-run */
  setInterval(() => {
    slide2.src = slide2.dataset.src;
    slide3.src = slide3.dataset.src;

    slides[currentSlideNum].classList.remove("currentSlide");
    currentSlideNum < 2
      ? (currentSlideNum = currentSlideNum + 1)
      : (currentSlideNum = 0);
    slides[currentSlideNum].classList.add("currentSlide");
  }, 5000);

  /* fade-in elements on scroll */
  /* Every time the window is scrolled ... */
  jQuery(window).scroll(function() {
    /* Check the location of each desired element */
    jQuery(".hideme").each(function(i) {
      var bottom_of_object =
        jQuery(this).offset().top + jQuery(this).outerHeight();
      var bottom_of_window =
        jQuery(window).scrollTop() + jQuery(window).height();
      /* If the object is completely visible in the window, fade it it */
      if (bottom_of_window > bottom_of_object) {
        jQuery(this).animate({ opacity: "1" }, 300);
      }
    });
  });
});
