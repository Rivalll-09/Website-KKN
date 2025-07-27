<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UMKM Desa Marindal 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/logo.JPG" rel="icon">
  <link href="assets/logo.JPG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php include "header.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Selamat Datang di Website</h1>
      <h1>Data UMKM </h1>
      <h2>Desa Marindal 1</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-md-12 col-lg-3 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" style="opacity: 0;">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>Desa Marindal 1</h2>
            <h5>Desa Marindal 1 yang terletak pada Kecamatan Patumbak Kabupaten Deli Serdang yang dipimpin oleh Kepala Desa Ir.Ardianto yang terdiri dari 12 dusun dan berpenduduk sekitar 37.000 jiwa ini memiliki beberapa UKM yang sedang dikembangkan.</h5>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Pada website ini kami mahasiswa KKN di desa Marindal 1 membuat informasi UMKM yang berada di Desa Marindal 1
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Jumlah UMKM di Desa Marindal 1</li>
            </ul>
            <ul>
              <li><i class="ri-check-double-line"></i> Eksplorasi Mendalam UMKM Marindal 1</li>
            </ul>
            <ul>
              <li><i class="ri-check-double-line"></i> Menghubungkan Komunitas UMKM </li>
            </ul>
            <ul>
              <li><i class="ri-check-double-line"></i>Informasi Tentang UMKM Desa Marindal 1</li>
            </ul>
            <br>
            <p class="font-italic">
              Pada Desa Marindal 1 terdapat beberapa UMKM yang telah kami data yaitu UMKM Tempe, UMKM Jamur Tiram, UMKM Dimsum, UMKM Kerupuk dan UMKM Bibit Lele.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row counters">

          <div class="col-lg-12 col-md-6 text-center">
            <?php
            include_once "countumkm.php";
            $obj = json_decode($data);
            $sman = "";
            foreach ($obj->results as $item) {
              $sman .= $item->sma;
            }
            ?>
            <div class="col-lg-12 col-md-6 text-center">
              <span data-toggle="counter-up"><?php echo $sman; ?></span>
              <p>Jumlah Usaha UMKM</p>
            </div>
          </div>
        </div>
    </section>
    </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>UMKM Desa Marindal 1</h3>
          <p> Detail lokasi UMKM di Desa Marindal 1</p>
          <a class="cta-btn" href="#portfolio">Lihat Detail</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="text-center" data-aos="zoom-in">
          <h3 style="font-weight: bold; text-transform: uppercase;">Peta</h3>
        </div>
        <div class="panel-body" style="align-content: center;">
          <div id="map" style="width:100%;height:480px;"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap "></script>

          <script type="text/javascript">
            function initialize() {

              var mapOptions = {
                zoom: 10,
                center: new google.maps.LatLng(-7.000382, 107.6304087),
                disableDefaultUI: false
              };

              var mapElement = document.getElementById('map');

              var map = new google.maps.Map(mapElement, mapOptions);

              setMarkers(map, officeLocations);

            }

            var officeLocations = [
              <?php
              $data = file_get_contents('http://localhost/SIG_UMKM/ambildata.php');
              $no = 1;
              if (json_decode($data, true)) {
                $obj = json_decode($data);
                foreach ($obj->results as $item) {
              ?>[<?php echo $item->id_umkm ?>, '<?php echo $item->nama_umkm ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
              <?php
                }
              }
              ?>
            ];

            function setMarkers(map, locations) {
              var globalPin = 'img/marker.png';

              for (var i = 0; i < locations.length; i++) {

                var office = locations[i];
                var myLatLng = new google.maps.LatLng(office[4], office[3]);
                var infowindow = new google.maps.InfoWindow({
                  content: contentString
                });

                var contentString =
                  '<div id="content">' +
                  '<div id="siteNotice">' +
                  '</div>' +
                  '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
                  '<div id="bodyContent">' +
                  '<a href=detail.php?id_umkm=' + office[0] + '>Info Detail</a>' +
                  '</div>' +
                  '</div>';

                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: office[1],
                  icon: 'img/markermap.png'
                });

                google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
              }
            }

            function getInfoCallback(map, content) {
              var infowindow = new google.maps.InfoWindow({
                content: content
              });
              return function() {
                infowindow.setContent(content);
                infowindow.open(map, this);
              };
            }

            initialize();
          </script>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="portfolio" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <div class="section-title">
              <h2>Data UMKM</h2>
              <p>Halaman ini memuat informasi Tempat UMKM di Desa Marindal 1 </p>
            </div>
          </div>

          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-12">
              <div class="panel panel-info panel-dashboard">
                <div class="panel-heading centered">

                </div>
                <div class="panel-body">
                  <table class="table table-bordered table-striped table-admin">
                    <thead>
                      <tr>
                        <th width="5%">No.</th>
                        <th width="30%">Nama UMKM</th>
                        <th width="30%">Alamat</th>
                        <th width="30%">Foto</th>
                        <th width="30">Harga Produk</th>
                        <th width="20%">Detail UMKM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $data = file_get_contents('http://localhost/SIG_UMKM/ambildata.php');
                      $no = 1;
                      if (json_decode($data, true)) {
                        $obj = json_decode($data);
                        foreach ($obj->results as $item) {
                      ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $item->nama_umkm; ?></td>
                            <td><?php echo $item->alamat; ?></td>
                            <td><img src="produk/<?php echo $item->foto; ?>" alt="" width="100px"></td>
                            <td>Rp. <?php echo $item->harga_tiket; ?></td>
                            <td class="ctr">
                              <div class="btn-group">
                                <a href="detail.php?id_umkm=<?php echo $item->id_umkm; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                                  <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                              </div>
                            </td>
                          </tr>
                      <?php $no++;
                        }
                      } else {
                        echo "data tidak ada.";
                      } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KKN Universitas Negeri Medan</h3>
            <p>
              Desa Marindal 1 <br>
              Kabupaten Deli Serdang<br>
              Provinsi Sumatera Utara <br><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#map">Maps</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Jumlah UMKM di Desa Bojongsari</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Eksplorasi Mendalam UMKM Bojongsari</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Menghubungkan Komunitas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Informasi Berharga Tentang UMKM Bojongsari</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Ikuti info terbaru</h4>
            <p>Subscribe email</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>KKN Universitas Negeri Medan</span></strong>.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.instagram.com/kkn_unimed_marendal1" class=""><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/datatable-bootstrap.js"></script>

</body>

</html>