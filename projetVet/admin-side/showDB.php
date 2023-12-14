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

  <link href="static/css/show.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="static/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container bg-body-tertiary">
          <a class="navbar-brand" >
            <span>
              VetPals/Admin 
            </span>
          </a>
          <div class="container-fluid">
          <form class="d-flex" role="search" method="GET" action="searchName.php">
            <input class="form-control me-2" type="search" placeholder="Search by Name or ID" aria-label="Search" name="searchN">
            <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
          </div>
          
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="Second group">
              <button type="button" class="btn btn-dark"><a href="../user-side/home.html" style="color:#ffff">User</a></button>
              <button type="button" class="btn btn-dark"><a href="auth.html" style="color:#ffff">Logout</a></button>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->
  <div class="main_content">
    <div class="main_content_bg">
      <img src="static/images/content-bg.jpg" alt="">
    </div>

    <!-- table section -->
    
    <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        <table align="center">
          <thead>
              <tr>
                  <th>Owner ID</th>
                  <th>Date</th>
                  <th>Owner Name</th>
                  <th>Owner Email</th>
                  <th>Owner Phone number</th>
                  <th>Pet Name</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $row): ?>
            <tr>
              <td><?php echo $row['oid']; ?></td>
              <td><?php echo $row['Appdate']; ?></td>
              <td><?php echo $row['oname']; ?></td>
              <td><?php echo $row['oemail']; ?></td>
              <td><?php echo $row['ophone']; ?></td>
              <td><?php echo $row['pname']; ?></td>
              <td>
                <a href="editFormA.php?oid=<?php echo $row['oid']; ?>"><img src="static/images/edit1.png" width="20px" style="margin: 15px;"></a>
                <a href="supp.php?oid=<?php echo $row['oid']; ?>"><img src="static/images/trash.png" width="20px" style="margin:15px;"></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>             
      </div>
      <div class="text-center mt-5">
        <a style="background-color: #55E9BC; border: #55E9BC; color: white;" class="btn button-style" href="Reserv_formA.html">Add New Record</a>
      </div>      
    </section>

    <!-- end table section -->

  <script src="static/js/jquery-3.4.1.min.js"></script>
  <script src="static/js/bootstrap.js"></script>
</body>

</html>
