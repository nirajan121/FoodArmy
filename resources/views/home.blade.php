@php
$user=auth()->user();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <title>FoodArmy</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="images/fevicon.png" type="image/gif" />

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" href="css/responsive.css">  
 
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
 
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>


<body class="main-layout">

  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
 
 
  <header>
 
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#food">Food</a> </li>
                      <li> <a href="#testimonial">Testimonial</a> </li>
                      <li> <a href="#contact">Find Us</a> </li>
                      @if($user==NULL)
                    
                      <li> <a href="/login">Login</a> </li>
                      
                      @else
                      @if($user["role"]==2)
                      <li> <a href="/donor">Donor Dashboard</a> </li>
                      <li> <a href="/logout">Logout</a> </li>
                      @endif
                     

                      @if($user["role"]==1)
                      
                      <li> <a href="/supplier">Supplier Dashboard</a> </li>
                      <li> <a href="/logout">Logout</a> </li>
                     @endif
                     @endif
                     <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
   

     
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To FoodArmy</span>
                      <h1>Be our members</h1>
                      <p>Your small help may fulfill someones hunger !! </p>
                      <!-- <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Personal Donation" type="text" name=" Vegetable">
                <button class="Search_btn">Request</button>
              </form>
                      <a href="#">Admin Login</a> <a href="#">Donor Login</a> <a href="#">Supplier Login</a> -->
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/img4.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To FoodArmy</span>
                      <h1>Be our members</h1>
                      <p>Your small help may fulfill someones hunger !! </p>
                       <!-- <form class="Vegetable">
                        <input class="Vegetable_fom" placeholder="Personal Donation" type="text" name=" Vegetable">
                         <button class="Search_btn">Request</button>
               </form>
              <a href="#">Admin Login</a> <a href="#">Donor Login</a> <a href="#">Supplier Login</a> --> -->
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/image3.jpeg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p>FoodArmy is a web-based application, developed to supply the rechauffe food for needy peoples in Nepalese society. It is such a platform where needy people can be benefited. In this platform event organizer can update their details after then we can contact them for rechauffe food to deliver for old age homes and streets children. It may minimize the wastage of lots food in every events.
         
            </p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="images/about2.png" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- vegetable -->
<div id="food" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Left Over <strong class="llow">FOOD</strong> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Please don't waste food !!!</h3>
          <p>Nowadays people are wasting food because they don’t know the value of food. Lots of needy peoples can’t get food easily to survive. There are people who wants to donate food but they don’t have any platform, so FoodArmy can give them the right platform. So, to maintain the rechauffe food FoodArmy is going to develop. </p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/food12.png" alt="#"/></figure>
         <span>01</span>
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="images/food13.png" alt="#"/></figure>
         <span>02</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end vegetable -->




   <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tes.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                                          
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tes.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div id="testomonial" class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tes.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->




<!-- contact -->
<div id="contact" class="contact">
  <div class="container">
   <div class="row">
     <div class="col-md-12">
                <div class="titlepage">
                  <h2>Find <strong class="llow">us</strong></h2>
                </div>
   </div>

</div>
    <div class="white_color">
      <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.0740708915612!2d85.34212175796965!3d27.71271197023316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ec22ef7b705ac5!2sTexas%20College%20of%20Management%20%26%20IT!5e0!3m2!1sen!2snp!4v1632364489373!5m2!1sen!2snp" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
</div>
    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo.png" alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>Mitrapark Kathmandu 
                        <br>Garright </li>
                        <li>
                          <a href="#"></a>9865599443 </li>
                          <li>
                            <a href="#"></a>nirajanbasnet.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Be our Register Member</h3>
                           
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2021 Design by <a href="https://www.facebook.com/nirajan.basnet.928">Nirajan Basnet</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>

