@extends('visitor-layout.main')

@section('content')

    <section id="banner-page" style="background-image: url('https://images.pexels.com/photos/416920/pexels-photo-416920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size:cover; background-position: center;">
        <div class="container">
            <h4>
                Gallery
            </h4>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <img src="https://images.pexels.com/photos/37347/office-sitting-room-executive-sitting.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class="col-lg-4 col-6">
                    <img src="https://images.pexels.com/photos/4353719/pexels-photo-4353719.jpeg?auto=compress&cs=tinysrgb&w=1600" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="col-lg-4 col-6">
                    <img src="https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                </div>
                <div class="col-lg-4 col-6">
                    <img src="https://images.pexels.com/photos/6077368/pexels-photo-6077368.jpeg?auto=compress&cs=tinysrgb&w=1600" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                </div>
            </div>
              
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
              
                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img src="https://images.pexels.com/photos/37347/office-sitting-room-executive-sitting.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </div>
                
                    <div class="mySlides">
                        <div class="numbertext">2 / 4</div>
                        <img src="https://images.pexels.com/photos/4353719/pexels-photo-4353719.jpeg?auto=compress&cs=tinysrgb&w=1600">
                    </div>
                
                    <div class="mySlides">
                        <div class="numbertext">3 / 4</div>
                        <img src="https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </div>
                    
                    <div class="mySlides">
                        <div class="numbertext">4 / 4</div>
                        <img src="https://images.pexels.com/photos/6077368/pexels-photo-6077368.jpeg?auto=compress&cs=tinysrgb&w=1600">
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
@endsection