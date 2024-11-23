<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<style type="text/css">
  .hero {
  padding-top: 100px;
  padding-bottom: 140px;
  color: #fff;
  background: #666 url(/images/cee.jpg) no-repeat;
  background-size: cover;
  background-position: 50%
}
  .hero .hero-center{
    display: flex;
    width: 100%;
    height: fit-content;
    align-items: center;
    justify-content: center;
    
   

  }
  .hero .hero-center .hero-msg{
    font-size: 7rem;
   text-transform: uppercase;
   color: #fff;
   font-weight: bold;
  }

</style>

  <!-- Cover -->
  <main>
    <div class="hero"style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('images/cee.jpg');">
      <div class="hero-center">
       <div class="hero-msg">
      <span>Pick & Go</span>
    </div> 
      </div>
    
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

  <div class="footer-nav">
    <div class="container clearfix">

<!--       <div class="footer-nav__col footer-nav__col--info">
        <div class="footer-nav__heading">Information</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <div class="footer-nav__link">The brand</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Local stores</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Customer service</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Privacy &amp; cookies</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Site map</div>
          </li>
        </ul>
      </div> -->

      <div class="footer-nav__col footer-nav__col--whybuy">
        <div class="footer-nav__heading">Why buy from us</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <div class="footer-nav__link">Shipping &amp; returns</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Secure shipping</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Testimonials</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Award winning</div>
          </li>
          <li class="footer-nav__item">
            <div class="footer-nav__link">Ethical trading</div>
          </li>
        </ul>
      </div>

      <div class="footer-nav__col footer-nav__col--account">
        <div class="footer-nav__heading">Features</div>
        <ul class="footer-nav__list">
         
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link"> cart</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">lookbook</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">order</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">information</a>
          </li>
        </ul>
      </div>


      <div class="footer-nav__col footer-nav__col--contacts">
        <div class="footer-nav__heading">Contact details</div>
        <address class="address">
        Head Office: Pick And Go<br>
        Kigali-Rwanda
      </address>
        <div class="phone">
          Telephone:
          <a class="phone__number" href="tel:0123456789">+250 788 321 123</a>
        </div>
        <div class="email">
          Email:
          <a href="mailto:support@yourwebsite.com" class="email__addr">support@pickandgo.com</a>
        </div>
      </div>

    </div>
  </div>

  <!-- <div class="banners">
    <div class="container clearfix">

      <div class="banner-award">
        <span>Award winner</span><br> Fashion awards 2016
      </div>

      <div class="banner-social">
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
  </div> -->

  <div class="page-footer__subline">
    <div class="container clearfix">
<center>
    <div class="copyright">
        &copy; 2023 Pick & Go&trade;
      </div>
<div class="developer">
        Devloped by <a href="https/www.icekprotechnologies.com">IcekPro Technologies</a>
      </div>

</center>
    
      
      
    </div>
  </div>
</footer>

</body>

</html>
