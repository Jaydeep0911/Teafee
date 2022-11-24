<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Teafee </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>

</head>

<style type="text/css">
  
</style>



<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="" data-target="#adminModal" data-toggle="modal" >
            <span>
              Teafee
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class= "nav-link" href= "home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "book.php"> Book Table </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "">Contact Us</a>
              </li>             
            </ul>
            <div class="user_option">
              <a href="" class="user_link" data-target="#myModal" data-toggle="modal">
                <i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp; Login </i>
              </a>
          </div>
        </nav>
      </div>
    </header>         
    <!-- end header section -->


      <!-- Admin login modal -->
      <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="column" id="main">
                          <h1>Admin Login </h1>                          
                          <form action="adminlogin.php" method="post" >                            
                            <div class="form-group">
                              <label for="InputEmail1">E-mail </label>
                              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="username">
                            </div>
                            <div class="form-group">
                              <label for="InputPassword1">Password</label>
                              <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                          </form>
                        </div>
                        <!-- column 2 -->
                        <div class="column" id="secondary">
                          <div class="sec-content">
                            <h2>Welcome Back!</h2>
                            <p></p>
                            
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

        <!-- Admin login modal end -->       



      <!-- Sign up Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="column" id="main">
                  <h1> Sign Up </h1>
                  
                  <form action="signup.php" method="post" >
                    <div class="form-group">
                      <label for="InputName">Name</label>
                      <input type="name" class="form-control" id="InputName" placeholder="Name" name="uname">
                    </div>
                    <div class="form-group">
                      <label for="InputEmail1">E-mail </label>
                      <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="uemail">
                    </div>
                    <div class="form-group">
                      <label for="InputPassword1">Password</label>
                      <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="upass">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                  </form>

                </div>
                <!-- column 2 -->
                <div class="column" id="secondary">
                  <div class="sec-content">
                    <h2>Welcome Back!</h2>
                    <p>Have an account....?</p>
                    <button type="button" class="btn btn-primary" data-target="#myModal2" data-toggle="modal" >Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sign up modal end -->

        <!-- login modal -->
               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="column" id="main">
                          <h1> Login </h1>                         
                          <form action="login.php" method="post" >                            
                            <div class="form-group">
                              <label for="InputEmail1">E-mail </label>
                              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="username">
                            </div>
                            <div class="form-group">
                              <label for="InputPassword1">Password</label>
                              <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                          </form>
                        </div>
                        <!-- column 2 -->
                        <div class="column" id="secondary">
                          <div class="sec-content">
                            <h2>Welcome Back!</h2>
                            <p>Don't have an account.....?</p>
                            <button type="button" class="btn btn-primary" name="submit" data-dismiss="#myModal"  data-target="#myModal" data-toggle="modal" >Sign Up</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

        <!-- login modal end -->       

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Tea & Coffee
                    </h1>
                    <h6>
                      We serve You share.......!
                    </h6>
                    <div class="btn-box">
                      <!-- <a href="menu.php" class="btn1">
                        Order Now
                      </a>  -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Tea & Coffee
                    </h1>
                    <p>
                      
                    </p>
                    <div class="btn-box">
                      <!-- <a href="menu.php" class="btn1">
                        Order Now
                      </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Tea & Coffee
                    </h1>
                    <p>
                      
                    </p>
                    <div class="btn-box">
                      <!-- <a href="menu.php" class="btn1">
                        Order Now
                      </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/o1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tasty Thursdays
                </h5>
                <h6>
                  <span>20%</span> Off
                </h6>
                <a href="">
                  Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                            </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/o2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pizza Days
                </h5>
                <h6>
                  <span>15%</span> Off
                </h6>
                <a href="">
                  Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">  
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  
    <!-- about section -->

    <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Teafee
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  teafee@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Teafee
            </a>
             <br>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am
          </p>
        </div>
      </div>
      
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>