<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financing Direct | Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
  <link rel="stylesheet" href="./assets/css/final.css">

</head>

<body>
  <?php include 'header.php'; ?>
  <!-- hero section start -->
  <section class="hero-section">
    <div class="common-wrap d-flex justify-between gap-20">
      <div class="content-wraper">
        <p class="sub-title">Best Mortgage Solutions</p>
        <h1 class="title">The Absolute Lowest Rates & Fees</h1>
        <p class="content">We’re passionate about what we do because we understand just how important getting the absolute best mortgage is for each of our clients!</p>
        <div class="btn-wraper d-flex flex-wrap gap-20">
          <a class="btn btn-primary" href="#">Get a Rate Quote</a>
          <a class="btn btn-white" href="#">View Rates</a>
        </div>
      </div>
      <div class="media d-flex item-end flex-col">
        <img src="./assets/images/homepage-hero-bg.png" alt="about-shay-wright-video">
      </div>
    </div>
  </section>
  <!-- hero section start -->
  <!-- ===== Mortgages section start -->
  <section class="mortgages-wrap">
    <div class="common-wrap">
      <div class="mortgages grid">
        <div class="item d-flex flex-col justify-end" style="background-image: url('./assets/images/mortgage-types.jpg');">
          <h3 class="text-left">All Type of Mortgages</h3>
          <p class="text-left">From zero down loans to multi-millions dollar jumbo loans, we have a loan option that perfectly fits your situation!</p>
          <a href="#" class="btn explore">Explore your loan options</a>
        </div>
        <div class="item d-flex flex-col justify-end" style="background-image: url('./assets/images/ask-mortgage-professional.jpg');">
          <h3 class="text-left">Ask a Mortgage Question</h3>
          <p class="text-left">Do you have a mortgage related question? We love answering questions and being of assistance in any other way possible.</p>
          <a href="#" class="btn btn-primary">Ask us a question</a>
        </div>
        <div class="item d-flex flex-col justify-end" style="background-image: url('./assets/images/customers-love-us.jpg');">
          <h3 class="text-left">Our Customers Love Us</h3>
          <p class="text-left">From zero down loans for first-time home buyers to jumbo loans for luxury home purchases, we have a loan option that.</p>
          <a href="#" class="btn">Read our testimonials</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Mortgages section end -->
  <!-- double img hero section start -->
  <section class="hero-section double-img-hero">
    <div class="common-wrap d-flex justify-between gap-20">
      <div class="content-wraper">
        <h2 class="h1 title"><span>Realizing Dreams ... </span>
          One Mortgage at a Time</h2>
        <p class="content">Our honest, customer centric approach is what sets us apart from the competition. We make the mortgage process smooth and stress-free and take as much off your plate as possible.</p>
        <div class="btn-wraper d-flex flex-wrap gap-20">
          <a class="btn btn-white" href="#">Learn More About Us</a>
        </div>
      </div>
      <div class="media">
        <img src="./assets/images/mortgage-dreams.jpg" alt="">
      </div>
    </div>
  </section>
  <!-- double img hero section start -->
  <!-- cta section start -->
  <section class="cta">
    <?php include 'cta.php'; ?>
  </section>
  <!-- cta section end -->
  <!-- ======= Calculetor section start ======= -->
  <?php include 'calculator.php'; ?>

  <!-- ======= Calculetor section end ======= -->

  <section class="support-box-section">
    <div class="common-wrap">
      <div class="support-box text-center">
        <h2 class="support-title">We’re Here to Help</h2>
        <p class="support-text">Have a mortgage related question? Looking for additional information about our mortgage products and services? Please reach out to us anytime!</p>
        <button class="support-btn btn">
          <img src="./assets/images/phone-icon.png" alt=""> (512) 593-4157
        </button>
      </div>
    </div>
  </section>
  <?php include "form.php"; ?>
  <!-- ====  Beginning footer section === -->
  <!-- testimonial section start  -->
  <?php include 'client-testimonials.php'; ?>
  <!-- testimonial section end -->
  <?php include 'footer-simple.php'; ?>
  <!-- ====  End footer section ===-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./assets/js/common-scripts.js"></script>
  <script src="./script.js"></script>
</body>

</html>