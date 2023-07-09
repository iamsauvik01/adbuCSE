var slideIndex = 0;
var slides = document.querySelectorAll(".placement-card-container img");
var totalSlides = slides.length;

showSlide(slideIndex);

var leftBtn = document.querySelector(".fa-chevron-left");
var rightBtn = document.querySelector(".fa-chevron-right");

leftBtn.addEventListener("click", function () {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = totalSlides - 1;
  }
  showSlide(slideIndex);
});

rightBtn.addEventListener("click", function () {
  slideIndex++;
  if (slideIndex >= totalSlides) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
});

function showSlide(index) {
  for (var i = 0; i < totalSlides; i++) {
    slides[i].style.display = "none";
  }
  slides[index].style.display = "block";
}
