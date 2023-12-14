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


  <link href="static/css/editA.css" rel="stylesheet" />

  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Flatpickr JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <style>
    /* Additional CSS for animation */
    button {
      transition: all 0.3s ease-in-out;
    }
  
    button:hover {
      transform: scale(1.1); 
    }
  </style>
  
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
          <a class="navbar-brand" href="showDB.php">
            <span>
            VetPals/Admin
            </span>
          </a>
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
          <form method="POST" action="updateA.php">
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
          </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end update section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <p></p>
  </footer>
  <!-- end  footer section -->

  <script src="static/js/jquery-3.4.1.min.js"></script>
  <script src="static/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="static/js/custom.js"></script>

  <script>
    flatpickr("#Appdate", {
        dateFormat: "Y-m-d", 
    });
</script>
  
</body>

</html>