<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Koach - Cours par branche</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/K.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .collapsible ul {
      display: none;
    }

    .collapsible.open ul {
      display: block;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="assets/img/logo-KOACH.png" alt=""><!-- <span>.</span>--></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Koach</span> </a>
            <ul>
              <li><a href="about.php">Histoire Koach</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-right dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Cours/Formation</span> </a>
            <ul>
              <li><a href="cour-branche.php">Cours par branche</a></li>
              <li class="dropdown"><a href="#"><span>Devenir Consultant</span> <i
                    class="bi bi-chevron-right dropdown-indicator"></i></a>
                <ul>
                  <li><a href="tfh.php">Consultant TFH</a></li>
                  <li><a href="brain-gym.php">Brain Gym</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="services.php">Calendrier</a></li>
          <li><a href="blog.php">Témoignages</a></li>
          <li><a href="contact.php">Contact & Infos</a></li>
          <li><a href="blog.php" class="btn btn-outline-warning">séance privée</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Cours par branche</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Formation</a></li>
          <li>Cours par branche</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="row gy-4">

        <div class="container col-lg-2" style="margin-left:250px;" data-aos="fade-up">
          <div class="sidebar card py-2 mb-4"
            style="border-radius:0; border-bottom-style: none;border-left-style: none;border-top-style: none;">
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item">
                <a class="nav-link text-muted" href="#"> Cours </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#">
                  <i class="bi bi-chevron-right dropdown-indicator"></i> Découverte </a>
                <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                  <li><a class="nav-link" href="Cours/equilibration.php">Equilibration par les couleurs </a></li>
                  <li><a class="nav-link" href="#">Submenu item 2 </a></li>
                  <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
                </ul>

              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#">
                  More menus  </a>
                <ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
                  <li><a class="nav-link" href="#">Submenu item 4 </a></li>
                  <li><a class="nav-link" href="#">Submenu item 5 </a></li>
                  <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                  <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Another page </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Demo link </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Menu item </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Something </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Other link </a>
              </li>
            </ul>
          </div>
          <!-- Vertical line --><!-- <div class="vertical-line" style="width: 2px;height: 200px;background-color: #000;margin: 0 auto;"></div> -->
        </div>
        <div class="container col-lg-8" style="margin-left:10px;" data-aos="fade-up">
          <p>KOACH propose des cours :</p>
          <ol>
            <li>de Kinésiology,</li>
            <li>des Pratiques supervisées et examens en kinésiologie,</li>
            <li>des Cours complémentaires en Sciences (Anatomie, Nutrition, Premiers Secours…),</li>
            <li>des cours d’EFT et Tapping,</li>
            <li>et d’autres cours hors Kinésiologie (Analyse Transactionnelle, Psychogénéalogie, …).</li>
          </ol>
          <p>Vous trouvez tous ces cours classés par branche dans le menu de gauche.</p>
          <h3>Inscription</h3>
          <p>Pour vous inscrire à un cours, merci d’utiliser les formulaires attachés à chaque cours :</p>
          <ol>
            <li>Choisissez le cours auquel vous désirez vous inscrire et la date qui vous convient dans le menu ou le
              calendrier, cliquez sur le titre du cours pour ouvrir le formulaire d’inscription.</li>
          </ol>
          <p><a href="">Assurez-vous d’avoir lu les Conditions Générales</a> qui précisent les modalités de paiement,
            les conditions d’annulation,…</p>
        </div>

      </div>

    </section>
    <!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>UpConstruction</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', function () {
      var collapsibleItems = document.querySelectorAll('.collapsible');

      for (var i = 0; i < collapsibleItems.length; i++) {
        collapsibleItems[i].addEventListener('click', function () {
          this.classList.toggle('open');
        });
      }
    });
  </script>

</body>

</html>