<?php
include "../../class.php";
if (isset($_POST['search'])) {
  $id = $_POST['id'];
  $lat = $auth->select14('lt', 'location', 'id', $id);
  $long = $auth->select14('lg', 'location', 'id', $id);
  $choosen_lga = $auth->select14('lga', 'location', 'id', $id);
} else {
  header("location:../../");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="<?= $wn ?> - Result" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $wn ?> - Result</title>
  <link rel="canonical" href="http://themes.potenzaglobalsolutions.com/html/directro/index-05.html" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../html/directro/images/favicon.ico" />
  <!-- Google Font -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap">
  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="../../html/directro/css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="../../html/directro/css/flaticon/flaticon.css" />
  <link rel="stylesheet" href="../../html/directro/css/bootstrap/bootstrap.min.css" />
  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
  <link rel="stylesheet" href="../../html/directro/css/select2/select2.css" />
  <link rel="stylesheet" href="../../html/directro/css/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="../../html/directro/css/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="../../html/directro/css/map/snazzy-info-window.min.css" />
  <!-- Template Style -->
  <link rel="stylesheet" href="../../html/directro/css/style.css" />
</head>

<body>
  <!--=================================
header -->
  <header class="header header-light">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
      <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
        <a class="navbar-brand" href="../../">
          <img class="img-fluid" src="../../html/directro/images/logo-dark.svg" alt="logo">
        </a>
      </div>
    </nav>
  </header>
  <section class="bg-white half-map">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-xl-6 col-lg-5">
          <div class="half-map-full">
            <iframe class="h-100vh" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?= $lat ?>,<?= $long ?>&hl=en&z=18&amp;output=embed"></iframe>
          </div>
        </div>
        <div class="col-xl-6 col-lg-7">
          <div class="scrollbar scroll_dark h-100vh">
            <form class="home-search-02 bg-white" action="result.php" method="post">
              <div class="row g-0">
                <div class="col-lg-9">
                  <div class="form-group mb-0 select-border">
                    <select class="form-control basic-select" name="id" required>
                      <option>Select Location </option>
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
                </div>
                <div class="col-lg-3 d-grid">
                  <button type="submit" name="search" class="btn btn-secondary"> <i class="fas fa-search-location"></i> Search </button>
                </div>
              </div>
            </form>
            <div class="listing-item listing-list mt-4">
              <div class="row g-0">
                <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="listing-details h-100">
                    <div class="listing-details-inner">
                      <div class="listing-title">
                        <h6><a href="#"><?= $choosen_lga ?> (Long.: <?= $long ?>, Lat: <?= $lat ?>)</a></h6>
                      </div>
                      <div class="listing-bottom">
                        <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> <?= $choosen_lga ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <div id="back-to-top" class="back-to-top">
    <a href="#"> <i class="fas fa-angle-up"></i></a>
  </div>



  <!-- JS Global Compulsory (Do not remove)-->
  <script src="../../html/directro/js/jquery-3.6.0.min.js"></script>
  <script src="../../html/directro/js/popper/popper.min.js"></script>
  <script src="../../html/directro/js/bootstrap/bootstrap.min.js"></script>
  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="../../html/directro/js/select2/select2.full.js"></script>
  <script src="../../html/directro/js/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="../../html/directro/js/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../../html/directro/js/map/handlebars.min.js"></script>
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBPohe84NhPXKlVEVXxOsR9HQJkBpa6Z0o"></script> -->
  <script src="../../html/directro/js/map/snazzy-info-window.min.js"></script>
  <script src="../../html/directro/js/map/map-script.js"></script>
  <!-- Template Scripts (Do not remove)-->
  <script src="../../html/directro/js/custom.js"></script>
</body>

</html>