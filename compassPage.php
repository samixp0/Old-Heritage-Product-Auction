<?php include "includes/header.php" ?>
 
 <section id="compass">
   <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 border-oa">
                <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                  <img src="img/compass/compass.jpg" style="width:100%">
              </div>

              <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                  <img src="img/compass/compass4.png" style="width:100%">
              </div>

              <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                  <img src="img/compass/compass6.jpg" style="width:100%">
              </div>

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

              <!-- Image text -->
              <div class="caption-container">
                <p id="caption"></p>
              </div>

              <!-- Thumbnail images -->
              <div class="row thumbnail">
                <div class="column">
                  <img class="demo cursor" src="img/compass/compass.jpg" style="width:100%" onclick="currentSlide(1)" alt="Compass 1">
                </div>
                <div class="column"> 
                  <img class="demo cursor" src="img/compass/compass4.png" style="width:100%" onclick="currentSlide(2)" alt="Compass 2">
                </div>
                <div class="column">
                  <img class="demo cursor" src="img/compass/compass6.jpg" style="width:100%" onclick="currentSlide(3)" alt="Compass 3">
                </div>
                <script>
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
              </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="product-description">
                <div class="product-namm">
                  <p>1967 Compass</p>
             </div>
                 <div class="description">
                 <div class="pdd">
                  <div class="buy-btnn">
                        <a href="#"><button type="button" class="cartt"><i class="fas fa-shopping-cart"></i></button></a>
                   </div>
                    <div >
                        <button type="button" class="btn-noww" onclick="">BID NOW</button>
                                     <script> 
                                           function myFunction()
                                           {
                                            window.alert("You have to login the system first !!");
                                           }
                                      </script>
                                    </div>
                                    
                                <div class="product-infor">
                            <div class="produck">
                                <p> <b>Auction Information</b> </p>
                            </div>
                                  <div> <b> Auction ID: </b>&nbsp; &nbsp;&nbsp;<span>bf200</span></div>
                                  <div><b>Price: </b>&nbsp;&nbsp;&nbsp;<span> MRP: 550.00</span></div>
                                  <div><b>Credit used per bid:</b>&nbsp; <span>2x</span></div>
                                  </div>
                                   </div>
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>
                     </section>


 
<?php include "includes/footer.php" ?>