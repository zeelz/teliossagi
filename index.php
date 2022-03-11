<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Teliossagi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/extra.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.7.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Teliossagi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#about">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">


      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Gain knowledge</h2>
          <h3>Available <span>eBooks</span></h3>
          <p>Books expands your knowledge and opens your mind. <br> They have allow you to solve hard problems and uncover new interests. <br> They can helped you excel in life and business.</p>
        </div>






        <div class="row">

          <?php

          // function 

          $ebooks = [
            ["name" => "Apps and Tools used for Yahoo", "price" => 490, "fn" => "Apps-and-Tools-used-for-Yahoo"],
            ["name" => "Blackmail Format", "price" => 120, "fn" => "Blackmail-Format"],

            // "Carding",
            // "CRAIGLIST SCAM",
            // "DATING FORMAT",
            // "Grant and Consignment",
            // "HOW TO SPOT A FAKE INESTMENT",
            // "HOW TO SPOT REPLICAS AND COUNTERFEIT ITEMS ONLINE",
            // "Inheritance format",
            // "Medical Billing Format",
            // "Military Format",
            // "Oil Rig Format",
            // "PTS [Main]",
            // "WIRE-WIRE"
          ];

          foreach ($ebooks as $ebook) : ?>

            <div class="col-lg-4 col-md-6">
              <div class="box" style="padding: 0;">
                <h2 data-ebook-cover="<?= $ebook['name'];  ?>"><?= $ebook['name'];  ?></h2>
                <div class="btn-wrap">
                  <form method="POST" action="pay.php">
                    <input type="hidden" name="price" value="<?= $ebook['price'] ?>">
                    <input type="hidden" name="email" class="email">
                    <input type="hidden" name="ebookNo" value="<?= $ebook['fn'] ?>">
                  </form>
                  <button type="submit" class="btn-buy" data-bs-toggle="modal" data-ebook-price="<?= $ebook['price']; ?>" data-bs-target="#buyModal">Buy eBook</button>


                </div>
              </div>
            </div>


          <?php endforeach ?>



        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Get in touch</h2>
          <h3>Contact <span>Us</span></h3>
        </div>


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@teliossagi.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>WhatsApp:</h4>
                <p>+234 805 488 5421</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Phone" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Teliossagi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://azusion.com/">Azusion</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Modal -->
  <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-white">
            <h5 class="modal-title" id="buyModalLabel">Enter email to proceed</h5>
            <p class="small">eBook will be sent to this email address</p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
          <div class="modal-body">
            <input type="email" required placeholder="enter email" class="form-control py-3 email">
          </div>
          <div class="modal-footer border-0 mt-0 pt-0">
            <button id="proceedToPay" type="submit" class="btn btn-outline-light">Proceed to Pay</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    const ebookTitles = document.querySelectorAll('.box h2');
    ebookTitles.forEach(title => {
      const cvr = title.dataset.ebookCover
      const coverNameDashed = cvr.split(" ").join("-")

      title.parentElement.style.backgroundImage = `url(assets/covers/${coverNameDashed}.jpg)`

    })


    const proceedToPay = document.querySelector('#proceedToPay')
    const buyButtons = document.querySelectorAll('.btn-buy');
    let paymentForm;

    buyButtons.forEach(btn => {
      btn.addEventListener('click', e => {

        const priceInput = proceedToPay.parentElement.querySelector('input')
        paymentForm = e.target.parentElement.querySelector('form')

        // priceInput.value = e.target.dataset.ebookPrice
      })
    })

    proceedToPay.addEventListener('click', e => {
      e.preventDefault()
      // const price = e.target.parentElement.querySelector('input').value
      const email = e.target.parentElement.previousElementSibling.querySelector('input.email').value
      const emailInput = paymentForm.querySelector('input.email')
      emailInput.value = email
      paymentForm.submit()
    })
  </script>

</body>

</html>