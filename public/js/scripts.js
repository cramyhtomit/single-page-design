document.addEventListener("DOMContentLoaded", function () {
  const carouselWrapper = document.querySelector(".carousel-wrapper");
  const slides = document.querySelectorAll(".carousel-slides");
  const prevButton = document.querySelector(".carousel-buttons .prev-button");
  const nextButton = document.querySelector(".carousel-buttons .next-button");

  let currentIndex = 0;
  const slideWidth = slides[0].offsetWidth;



  function goToSlide(index) {
    currentIndex = Math.min(Math.max(index, 0), slides.length - 1);
    const translateX = -currentIndex * slideWidth;
    carouselWrapper.style.transform = `translateX(${translateX}px)`;
  }

  prevButton.addEventListener("click", function () {
    goToSlide(currentIndex - 1);
    console.log(slideWidth);
  });

  nextButton.addEventListener("click", function () {
    goToSlide(currentIndex + 1);
    console.log(slideWidth);
  });
});
