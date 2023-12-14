<?php  
include_once('../controllers/AppController.php');
$appCtr = new AppController();
$res = $appCtr->liste();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="static/images/favicon.png" type="image/x-icon">

  <title>vet</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.css" />
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


  <!-- Custom styles for this template -->
  <link href="static/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="static/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="static/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href=''>
            <span>
              VetPals
            </span>
          </a>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <div class="main_content">
    <div class="main_content_bg">
      <img src="static/images/content-bg.jpg" alt="">
    </div>

    <!-- verif section -->
    <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        <div class="detail-box">
          <div class="box" style="width: 400px; margin: 0 auto;">
            <div class="heading_container heading_center">
              <h2>Enter your ID</h2>
              <br>
            </div>  
            <form method="POST" action="verify.php">
              <div class="row justify-content-center">
                  <div class="form-group">
                      <input type="text" class="form-control" id="oid" name="oid" placeholder="ID" required>
                  </div>
              </div>              
              <div class="text-center mt-3">
                  <button type="submit" class="btn btn-primary" style="background-color: #55E9BC; border-color: #55E9BC;">Verify</button>
              </div>
          </form>

          </div>
        </div>
      </div>
    </section>
    <!-- end verif section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Back to Home Page
            </h6>
            <div class="info_link-box">
              <ul>
                <li class="active">
                  <a href='home.html'>
                    Home
                  </a>
                </li>
              </ul>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Address
            </h6>
            <div class="contact_items">
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Cite Erriyadh
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Call +216 12345678
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      VetPals@gmail.com
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
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
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayDate"></span> All Rights Reserved.
    </p>
  </footer>
  <!-- end  footer section -->

  <script src="static/js/jquery-3.4.1.min.js"></script>
  <script src="static/js/bootstrap.js"></script>
</body>

</html>