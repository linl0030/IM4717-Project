
	/* //automatic slideshow
	var slideIndex = 0;
	showSlides();


	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 8000); // Change image every 2 seconds
	} 

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}*/
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}

	  //to hide all image
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  //to make the dot darker when hovering on or selected
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  //"block" makes selected picture appears again
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	// window.onload = currentSlide(1);
