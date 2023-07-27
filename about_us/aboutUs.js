let currentIndex = 0;
const slides = document.querySelectorAll('.about-us-carasouel-slide img');
const indicators = document.querySelectorAll('.indicator');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.display = i === index ? 'block' : 'none';
    indicators[i].classList.toggle('active', i === index);
  });

  currentIndex = index;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }
  
  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }
  
  // Show the initial slide
  showSlide(currentIndex);

setInterval(nextSlide, 5000);


showSlide(currentIndex);
