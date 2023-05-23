<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>

<style>
.slideshow {
  position: relative;
  width: 100%;
  height: 700px;
  overflow: hidden;
}

.slideshow img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.slideshow img.active {
  opacity: 1;
}
</style>

</head>
<body>
<br>
<div class="slideshow margin: 0 auto;">
  <img src="/assets/Gym/GymPhoto1.jpeg" alt="Photo 1">
  <img src="/assets/Gym/GymPhoto2.png" alt="Photo 2">
  <img src="photo3.jpg" alt="Photo 3">
</div>
<script>
var slides = document.querySelectorAll('.slideshow img');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000); 

function nextSlide() {
  slides[currentSlide].className = '';
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].className = 'active';
}
</script>


</body>
</html>


