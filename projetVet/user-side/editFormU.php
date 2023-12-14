<?php
require_once('../controllers/AppController.php');
$appCtr=new AppController();
$res=$appCtr->getApp($_GET['oid']);
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


    <style>
      
    
  </style>

  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Flatpickr JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <link rel="stylesheet" href="static/css/editU.css">
  
</head>

<body class="sub_page">
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="static/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="">
            <span>
              VetPals
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search" />
                <button class="btn   my-sm-0 nav_search-btn" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              </form>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->

  <!-- update section -->
  <div class="main_content">
    <div class="main_content_bg">
      <img src="static/images/content-bg.jpg" alt="">
    </div>
    <section class="contact_section layout_padding">
      <div class="form_container">
        <div class="row">
          <div class="col-md-3 offset-md-4">
          <form method="POST" action="updateU.php">
            <br>
            <h3 style="margin-left: 90px; margin-bottom: 40px;">Update Details</h3>
            <div>
              <input type="text" name="oid" style="margin-left: 20px;" value="<?php echo $res['oid']; ?>" readonly />
            </div>
            <div class="mt-4">
              <input type="text" name="Appdate" id="Appdate" class="form-control" style="margin-left: 20px;" value="<?php echo $res['Appdate']; ?>"/>
            </div>
            <div>
              <input type="text" name="oname" style="margin-left: 20px;" value="<?php echo $res['oname']; ?>"/>
            </div>
            <div>
              <input type="email" name="oemail" style="margin-left: 20px;" value="<?php echo $res['oemail']; ?>"/>
            </div>
            <div>
              <input type="text" name="ophone" style="margin-left: 20px;" pattern="\d{8}" maxlength="8" value="<?php echo $res['ophone']; ?>"/>
            </div>
            <div>
              <input type="text" name="pname" style="margin-left: 20px;" value="<?php echo $res['pname']; ?>"/>
            </div>
            <div class="button-container">
              <br>
              <button type="submit" style="margin-left: 105px;">Update</button>
            </div>
            <div style="position: relative; width: 100%; height: 200px;">
              <a href="cancel.php?oid=<?php echo $res['oid']; ?>" class="button btn pl-5 pr-5 pt-2 pb-2" style="position: absolute; bottom: 0; right: -500px; background-color: rgb(236, 89, 63); border-color: rgb(236, 89, 63); margin:10px; color:#ffff;" >Cancel Appointment</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
  <!-- end update section -->

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="static/js/custom.js'"></script>

  <script>
    flatpickr("#Appdate", {
    dateFormat: "Y-m-d", 
    });
</script>
  
</body>
</html>
