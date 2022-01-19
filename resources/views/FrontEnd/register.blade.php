<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>De graaf</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.7.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
 
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown" style="margin-top :100px;;">Restaurant <span>De graaf</span> </h2>
                
                <form action="{{URL::to('/store')}}" method="post" style="margin-bottom:10% ;">
                @csrf
                  <table>
                  <tr>
                    <td><label for="voornaam"><h2><span>Voornaam</span></h2> </label></td>
                    <td><input type="text" placeholder="Enter Firstname" name="voornaam" required></td>
                    <br>
</tr> 
<tr>
                    <td><label for="achternaam"><h2><span>Achternaam</span></h2> </label></td>
                    <td><input type="text" placeholder="Enter Lastname" name="achternaam" required></td>
                    <br>
</tr> 
<tr>
                    <td><label for="email"><h2><span>Email</span></h2> </label></td>
                    <td><input type="text" placeholder="Enter Email" name="email" required></td>
                    <br>
</tr> 
                    <tr>
                    <td><label for="wachtwoord"><h2><span>Wachtwoord</span></h2> </label></td>
                    <td><input type="text" placeholder="Enter Password" name="wachtwoord" required></td>
                    <br>
</tr> 

<tr>
 <td> <a href="/de-graaf/public/login" class="btn-book animate__animated animate__fadeInUp scrollto">Al een account</a></td>
<td><button class="btn-book animate__animated animate__fadeInUp scrollto" type="submit">Aanmaken</button></td>
</tr>

                    </table>
                </form>
              


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">




   



   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Restaurant De Graaf</h3>
     
      <div class="copyright">
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
          </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>