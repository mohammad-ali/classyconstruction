<?php
require 'header.php';
?>

<!-- index.php start -->

<!-- header start -->
<div class="fluid-container relative" id="header">
      <div class="row">
            <div class="col l4">
                  <img src="images/logo.svg" id="mainlogo" alt="construction logo">
                  <ul id="logotext">
                        <li>Classy</li>
                        <li>Construction</li>
                        <li>Corp.</li>
                  </ul>
            </div>
            <div class="col l8">
                  <ul id="topMenu">
                        <li>Home</li>
                        <li>Services</li>
                        <li>Project</li>
                        <li>Our Teams</li>
                        <li>Contact Us</li>
                  </ul>
            </div>
      </div>

      <div class="row">
            <div class="col l4">
                  <img src="images/building.svg" id="building" alt="building classyconstruction">
            </div>
            <div class="col l8 relative">
                  <img src="images/prev.svg" id="prev" id="carPrev" alt="">
                  <div class="carousel" id="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/sliders/1.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/sliders/2.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/sliders/2.jpg"></a>

                  </div>
                  <img src="images/next.svg" id="next" id="carPrev" alt="">
            </div>
      </div>
      <a class="btn-floating btn-large waves-effect waves-light red" id="message"><i class="material-icons">message</i></a>
      <div class="row center-align">
            <div id="underhelp">
                  <img src="images/c1.svg" id="c1" alt="">
                  <img src="images/c2.svg" id="c2" alt="">
                  <img src="images/c3.svg" id="c3" alt="">
            </div>
      </div>
</div>
<!-- header end -->

<!-- ourservices start -->
<div class="fluid-container relative" id="ourServices">
      <div class="row center-align">
            <span class="servicetitle">OUR SERVICES</span>
      </div>
      <div class="container row pt30">
            <p class="rubik servicep">
                  With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation,
                  driveway sett or home repair. We provide a professional service for private and commercial customers
            </p>
      </div>

      <div class="row" id="servicecurve">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="#c1e7e6" fill-opacity="1" d="M0,256L80,261.3C160,267,320,277,480,245.3C640,213,800,139,960,144C1120,149,1280,235,1360,277.3L1440,320L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
      </div>

      <div class="row" id="serivelist">

            <div class="col l3 servicebox">
                  <div class="sbox">
                        <img class="z-depth-3" src="images/sliders/1.jpg" alt="">
                        <h3 class="rubik">INTERIOR RENOVATION</h3>
                        <p class="rubik">We can help you bring new life to existing rooms and develop unused spaces.</p>
                  </div>
            </div>

            <div class="col l3 servicebox">
                  <div class="sbox">
                        <img class="z-depth-3" src="images/sliders/1.jpg" alt="">
                        <h3 class="rubik">DESIGN AND BUILD</h3>
                        <p class="rubik">We can help you bring new life to existing rooms and develop unused spaces.</p>
                  </div>
            </div>

            <div class="col l3 servicebox">
                  <div class="sbox">
                        <img class="z-depth-3" src="images/sliders/1.jpg" alt="">
                        <h3 class="rubik">PAINTING</h3>
                        <p class="rubik">We can help you bring new life to existing rooms and develop unused spaces.</p>
                  </div>
            </div>

            <div class="col l3 servicebox">
                  <div class="sbox">
                        <img class="z-depth-3" src="images/sliders/1.jpg" alt="">
                        <h3 class="rubik">DESIGN AND BUILD </h3>
                        <p class="rubik">We can help you bring new life to existing rooms and develop unused spaces.</p>
                  </div>
            </div>




      </div>
</div>
<!-- ourservices end -->

<!-- index.php end -->


<?php
require 'footer.php';
?>