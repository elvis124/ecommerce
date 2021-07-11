<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<link rel="stylesheet" href="pan.css">

  
<body style="background-color: transparent;">
  <div class="row" style="background-image:url('images/bac.jpg'); height:410px;">
    <div class="col-sm-4">
       <section class="slideshow">
        <b style="color:white"><h4>Try Madoxh most finest products <b style="color:orange">we value your uniqueness</b></h4></b>
          <div class="content" style="width:40%">
            <div class="content-carrousel">
              <figure class="shadow"><img src="images/afrishoe1.jpg"></figure>
              <figure class="shadow"><img src="images/drinks.jpg"></figure>
              <figure class="shadow"><img src="images/afriherb.jpg"></figure>
              <figure class="shadow"><img src="images/cloths.jpg"></figure>
              <figure class="shadow"><img src="images/cloths3.jpg"></figure>
              <figure class="shadow"><img src="images/afriart.jpg"></figure>
              <figure class="shadow"><img src="images/afrishoes3.jpg"></figure>
              <figure class="shadow"><img src="images/afrishoes2.jpg"></figure>
              <figure class="shadow"><img src="images/afriwomen1.jpg"></figure>
              <figure class="shadow"><img src="images/afriwomen2.jpg"></figure>
                                
                             
                                    
                                
            </div>
        </div>
    </section>
    </div>

    
    <div class="col-sm-4" style="background-image: url('images/orange.png')">
      <section class="slideshow" >
        <div class="content" style="width:40%;">
           <b style="color:white"><h4>Natural drinks readly available </h4></b>          
        </div>
      </section>
    </div>


    <div class="col-sm-4">
      <b style="color:white"><h4>Try Madoxh most delicious and chemical free foods order on  <b style="color:orange">on free delivery</b></h4></b>
        <section class="slideshow">
            <div class="content" style="width:40%">
              <div class="content-carrousel">
                <figure class="shadow"><img src="images/afrifood.jpg"></figure>
                <figure class="shadow"><img src="images/food3.jpg"></figure>
                <figure class="shadow"><img src="images/drinks.jpg"></figure>
                <figure class="shadow"><img src="images/food5.jpg"></figure>
                <figure class="shadow"><img src="images/food6.jpg"></figure>
                <figure class="shadow"><img src="images/drinks.jpg"></figure>
                <figure class="shadow"><img src="images/food8.jpg"></figure>
                <figure class="shadow"><img src="images/food9.jpg"></figure>
                <figure class="shadow"><img src="images/food10.jpg"></figure>
                                
                           
              </div>
            </div>
        </section>
    </div>
  </div>
  






   <div id="content" class="container"><!-- container Starts -->

    <div class="row" ><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->





    <!-- FOOTER -->
    <footer class="page-footer" >

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The brand</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Customer service</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <p><a href="contact.php">Contact us</a></p>
            <address class="address">
            Head Office: Kisumu,Riat.<br>
            40105 kisumu , Airport, Bright_light.
            </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:+254703180147">0703180147</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:elvisianomondi@gmail.com" class="email__addr">elvisianomondi@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="banners">
        <div class="container clearfix">

          <div class="banner-award" >
            <span id="blink"><b style="color:red">Madoxh</b> <b style="color:yellow">Most finest</b><b style="color:green"> and</b><b style="color:blue"> unique</b></b></span><br>All time unique

            <script type="text/javascript">
                var blink = document.getElementById('blink');
                setInterval(function() {
                blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                }, 2000);
            </script>
          </div>



          <div class="banner-social" style="background-color:red">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div>

      <div class="page-footer__subline" style="background-color: red">
        <div class="container clearfix">

          <div class="copyright" style="color:white">
            &copy; Madoxh high quality&trade;
          </div>

          <div class="developer" style="color:white">
            Dev by madoxh
          </div>

          <div class="designby" style="color:white">
            Design by madoxh
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
