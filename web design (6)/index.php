<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- owl carrasol -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- wow css -->
    <link rel="stylesheet" href="css/animate.css">

    <title>📋Terms & Conditions</title>
  </head>
  <body>


 <!-- header section -->
 <header>
  <div class="container">
    

        <!-- menu -->
        <div class="row">
          <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light ">
     <div > <a class="navbar-brand" href="index.html"> </a> </div>
         
       <div>
        <div class="delivery-info">
          <img src="img/logo2.png">
          <span>CAFE RETRO +880 1740 745 000</span>
        </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="http://localhost/retro_cafe/web%20design/index.php">Home</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="http://localhost/web%20design%20(2)/order/index.html">ORDER</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/retro_cafe/web%20design%20(3)/menu/index.php">Unique Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active new ms-2 " aria-current="page" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/retro_cafe/webloginpage/index.php"><?php 
                $con = mysqli_connect('localhost','root');
                if($con){
                    mysqli_select_db($con, 'retrocafe');

                    $query= "SELECT stat FROM loginstat where statval=1";
                    $result=mysqli_query($con,$query);
                    $row = mysqli_fetch_array($result);
                    
                    echo $row['stat'];
                    }else{
                        echo "no connection";
                 }

            ?></a>
        </li>

      </ul>

      </div>
      </div>

     </nav>
          </div>
        </div>
        <!-- banner -->
        <div class="row">
          <div class="col-md-12">
            <div class="banner-text">
               <p class="wow headShake">Welcome To Cafe Retro</p>
               <h1 class=" wow bounceInDown " >Cafe Retro</h1>
               
            </div>
            
          </div>
        </div>
        
  </div>
      
 </header>
    <!-- header section end -->


    <!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> Information </h3>
    <h1 class="heading">Terms & Conditions📋</h1>

    <div class="row">

        <div class="image">
            <img src="img/new3-img.png" alt="">
        </div>

        <div class="content">
            <p>Welcome to www.caferetro.com.bd ("Web Site"). We are part of Cafe Retro Resturant. The purposes of this site is to provide service to its customers and information about various food items of Cafe Retro. The following are the basic rules that govern your use of our site. Your use of Cafe Retro site constitutes your agreement to follow and be bound by these terms. If you do not agree to these terms, please do not use this site. Your use of this site binds you to these terms.<p>


    </div>

</section>

<!-- about section ends -->


<!-- review section starts  -->

<section class="review" id="review">

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               
                <div class="user">
                    <div class="user-info">
                        <h3>1️⃣Terms and Conditions may change</h3>
                        <div class="stars">
                           
                        </div>
                    </div>
                </div>
                <p>Since Cafe Retro may revise this agreement at any time, you should visit this page periodically to review the terms of your use. Should you have any questions concerning any of our policies, please contact us.</p>
            </div>

            <div class="swiper-slide slide">

                <div class="user">
                    <div class="user-info">
                        <h3>2️⃣Availability</h3>
                        <div class="stars">
                           
                        </div>
                    </div>
                </div>
                <p>Please understand that our featured items offered are ready made fast food items and therefore in limited quantities and, because of their limited availability and nature of production, stock will not and cannot be altered. That means once an order is placed; it will be delivered and not modified on the website again. When an item featured on www.caferetro.com.bd is no longer in stock, we make every attempt to remove that item from the website in a timely manner. Should you have any questions concerning the availability of a particular item, please contact us at 10am🕙 – 5pm🕔 Bangladesh time.</p>
            </div>

            
        </div>

    </div>
    
</section>

<!-- review section ends -->


<!-- footer -->

 <section class="footer">
   <div class="container">
     
       <div class="footer-content" >
        
          <div class="footer-text ">
            <img src="img/logo3.png" class="footer-logo img-fluid">
            <p class="fottertext">Welcome to Cafe Retro.Best Cafe in Bangladesh.</br> Come & Enjoy our delicious dish.</br>Unique and tasty Food items</br> With many facilities.</p>
            <p class="footerend">© Cafe Retro. All rights reserved.</p>
          </div>
          <div class="icon">
            <ul>
        <li><a href="https://www.facebook.com/annesha.tasneem.3"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://mobile.twitter.com/cupidonduty/status/1458827128246439942"><i class="fa fa-twitter"></i></a></li>
        <li><a href="http://be.net/naimulpeal"><i class="fa fa-behance"></i></a></li>
       <li><a href=""><i class="fa fa-github"></i></a></li>
      
        </ul>
          </div>
        </div>

      
     </div>
   </div>
 </section>





    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
    <!-- owl java file -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/owl.carousel.js"></script>

    <script type="">
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:false,
     autoplayTimeout:1000,
     autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
   })
    </script>


   <!-- wow js -->
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
  </body>
</html>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<audio autoplay loop>
      <source src="music/music.mpeg" type="audio/mpeg" />
    </audio>

</body>
</html>

