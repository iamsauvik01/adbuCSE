const aboutslides = document.querySelectorAll('.slide')
const aboutTaps = document.querySelectorAll('.slider_tabs')
var counter = 0

aboutslides.forEach(
  (slide, index) => {
    slide.style.left = `${index * 100}%`
  }
)

setInterval(function() {
  if(counter == 3)
  {
    counter = 0
  } else {
    counter++
  }
  slideImage()
}, 5000);

const goPrevAbout = () => {
  if(counter == 0)
  {
    counter = 3
  } else {
    counter--
  }
  slideImage()
}

const goNextAbout = () => {
  if(counter == 3)
  {
    counter = 0
  } else {
    counter++
  }
  slideImage()
}

const goto = (i) => {
  counter = i
  slideImage()
}


const slideImage = () => {
  aboutslides.forEach(
    (slide) => {
      slide.style.transform = `translateX(-${counter * 100}%)`
    }
  )
  aboutTaps.forEach(
    (tap, index) => {
      if(counter == index)
        tap.classList.add("active")
      else 
        tap.classList.remove("active")
    }
  )
}