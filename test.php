<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto-Stop Slider</title>
  <style>
    /* Styles for the slider container and slides */
    .slider-container {
      position: relative;
      width: 80%;
      max-width: 600px;
      margin: auto;
      overflow: hidden;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    /* Styles for the navigation buttons */
    .prev,
    .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      cursor: pointer;
    }

    .prev {
      left: 0;
    }

    .next {
      right: 0;
    }
  </style>
</head>

<body>

  <div class="slider-container">
    <div class="slides">
      <div class="slide"><img src="image/11.png" alt="Slide 1"></div>
      <div class="slide"><img src="image/12.png" alt="Slide 2"></div>
      <div class="slide"><img src="image/13.png" alt="Slide 3"></div>
      <!-- Add more slides as needed -->
    </div>
    <span class="prev" onclick="prevSlide()">&#10094;</span>
    <span class="next" onclick="nextSlide()">&#10095;</span>
  </div>



  <script>
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    let autoSlideInterval;

    function showSlide(index) {
      if (index < 0) {
        currentIndex = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }

      const translateValue = -currentIndex * 100 + '%';
      slides.style.transform = `translateX(${translateValue})`;
    }

    function nextSlide() {
      showSlide(currentIndex + 1);
    }

    function prevSlide() {
      showSlide(currentIndex - 1);
    }

    function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
    }

    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }
  </script>

</body>

</html>