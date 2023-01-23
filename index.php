<?php
include "class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="keywords" content="<?= $wn ?> -HOME" />
  <meta name="description" content="<?= $wn ?> -HOME" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $wn ?> -HOME</title>
  <link rel="canonical" href="http://themes.potenzaglobalsolutions.com" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="html/directro/images/favicon.ico" />
  <!-- Google Font -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap">
  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="html/directro/css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="html/directro/css/flaticon/flaticon.css" />
  <link rel="stylesheet" href="html/directro/css/bootstrap/bootstrap.min.css" />
  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
  <link rel="stylesheet" href="html/directro/css/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="html/directro/css/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="html/directro/css/select2/select2.css" />
  <link rel="stylesheet" href="html/directro/css/map/snazzy-info-window.min.css" />
  <!-- Template Style -->
  <link rel="stylesheet" href="html/directro/css/style.css" />
</head>

<body>
  <!--=================================
header -->
  <header class="header">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
      <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
        <a class="navbar-brand" href="#">
          <img class="img-fluid" src="html/directro/images/logo.svg" alt="logo">
        </a>
        <div class="d-block d-md-flex align-items-center">
          <div class="call me-4 d-inline-block">
            <a class="text-white" href="tel:<?= $auth->Web('phone') ?>"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i><?= $auth->Web('phone') ?> </a>
          </div>
          <!-- <div class="login d-inline-block me-4">
            <a class="text-white" data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Hello sign in<i class="fa fa-user ps-2 text-primary"></i></a>
          </div> -->
        </div>
      </div>
    </nav>
  </header>
  <section class="banner bg-holder bg-overlay-black-50" style="background-image: url(mast.jpg);">
    <div class="container">
      <div class="row justify-content-center position-relative">
        <div class="col-lg-10 text-center">
          <h1 class="text-white">Discover location of MTN masts in the city</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <form class="home-search" action="html/directro/result.php" method="post">
            <div class="row mt-3 mt-lg-5">
              <div style="display:none" class="col-sm-6 col-lg-5 col-xl-5">
                <div class="form-group mb-3 mb-lg-0">
                  <span>State?</span>
                  <select required class="form-control">
                    <?php
                    $sqlstr = "SELECT state FROM location GROUP BY state ORDER BY state";
                    $stmt = $conn->prepare($sqlstr);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) :
                      $state = $row['state'];
                    ?>
                      <option value="<?= $state ?>"><?= $state ?></option>
                    <?php endwhile; ?>
                  </select>
                  <!-- <input type="text" class="form-control" placeholder="Ex: restaurants, hotels, cares, bars"> -->
                </div>
              </div>
              <div class="col-sm-12 col-lg-8 col-xl-8">
                <select class="form-control basic-select" name="id" required>
                  <option value="">Select Location </option>
                  <?php
                  $sqlstr = "SELECT id,lga FROM location ORDER BY lga";
                  $stmt = $conn->prepare($sqlstr);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while ($row = $result->fetch_assoc()) :
                    $id = $row['id'];
                    $lga = $row['lga'];
                  ?>
                    <option value="<?= $id ?>"><?= $lga ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                <button class="btn btn-secondary" type="submit" name="search"> <i class="fas fa-search-location"></i> Search </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div id="back-to-top" class="back-to-top">
    <a href="#"> <i class="fas fa-angle-up"></i></a>
  </div>

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="html/directro/js/jquery-3.6.0.min.js"></script>
  <script src="html/directro/js/popper/popper.min.js"></script>
  <script src="html/directro/js/bootstrap/bootstrap.min.js"></script>
  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="html/directro/js/owl-carousel/owl.carousel.min.js"></script>
  <script src="html/directro/js/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="html/directro/js/select2/select2.full.js"></script>
  <script src="html/directro/js/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="html/directro/js/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="html/directro/js/map/handlebars.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBPohe84NhPXKlVEVXxOsR9HQJkBpa6Z0o"></script>
  <script src="html/directro/js/map/snazzy-info-window.min.js"></script>
  <script src="html/directro/js/map/map-script.js"></script>
  <!-- Template Scripts (Do not remove)-->
  <script src="html/directro/js/custom.js"></script>
</body>

</html>