<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financing Direct | Home</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <!-- hero section start -->
  <section class="hero-section">
    <div class="common-wrap d-flex justify-between item-center">
      <div class="content-wraper">
        <p class="sub-title">Best Mortgage Solutions</p>
        <h1 class="title">The Absolute Lowest Rates & Fees</h1>
        <p class="content">We’re passionate about what we do because we understand just how important getting the absolute best mortgage is for each of our clients!</p>
        <div class="btn-wraper d-flex flex-wrap gap-20">
          <a class="btn btn-primary" href="#">Get a Rate Quote</a>
          <a class="btn btn-white" href="#">View Rates</a>
        </div>
      </div>
      <div class="media">
        <img src="./assets/images/homepage-hero-bg.png" alt="about-shay-wright-video">
        <!-- <div class="media-shape">
          <img src="./assets/images/about-shay-wright-shape.png" alt="about-shay-wright-shape">
        </div> -->
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
  <section class="hero-section hero-double-img">
    <div class="common-wrap d-flex justify-between item-center">
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
  <section class="calculator-section">
    <div class="common-wrap">
      <div class="calculator-container">
        <div class="calculator-header">
          <h2>MORTGAGE PAYMENT CALCULATOR</h2>
          <p>Calculate your monthly payment for different loan scenarios</p>
        </div>

        <div class="tabs d-flex justify-end flex-wrap">
          <div class="tabs-right d-flex gap-10">
            <button class="tab active" onclick="switchTab('basic')">BASIC</button>
            <button class="tab" onclick="switchTab('advanced')">ADVANCED</button>
          </div>
        </div>

        <div class="calculator-body">
          <!-- BASIC TAB -->
          <div id="basic" class="form-section active">
            <div class="form-inner">
              <div class="input-group">
                <label>Loan Amount</label>
                <input type="number" id="loanBasic" />
              </div>
              <div class="input-group">
                <label>Loan Term (Yrs)</label>
                <input type="number" id="termBasic" />
              </div>
              <div class="input-group">
                <label>Interest Rate (%)</label>
                <input type="number" id="rateBasic" />
              </div>
              <div class="input-group">
                <button class="calculate-btn btn btn-primary" onclick="calculateBasic()">CALCULATE</button>
              </div>
            </div>
            <span></span>
            <div class="output">
              <div class="output-label">Monthly Payment</div>
              <div class="output-value" id="resultBasic">$1,663</div>
            </div>
          </div>

          <!-- ADVANCED TAB -->
          <div id="basic" class="form-section ">
            <div class="form-inner">
              <div class="input-group">
                <label>Loan Amount</label>
                <input type="number" id="loanBasic" />
              </div>
              <div class="input-group">
                <label>Loan Term (Yrs)</label>
                <input type="number" id="termBasic" />
              </div>
              <div class="input-group">
                <label>Interest Rate (%)</label>
                <input type="number" id="rateBasic" />
              </div>
              <div class="input-group">
                <label>Property Taxes (Yearly)</label>
                <input type="number" id="rateBasic" />
              </div>
              <div class="input-group">
                <label>Insurance (Yearly)</label>
                <input type="number" id="rateBasic" />
              </div>
              <div class="input-group">
                <label>Other (Yearly)</label>
                <input type="number" id="rateBasic" />
              </div>
              <div class="input-group">
                <button class="calculate-btn btn btn-primary" onclick="calculateBasic()">CALCULATE</button>
              </div>
            </div>
            <span></span>
            <div class="output">
              <div class="output-label">Monthly Payment</div>
              <div class="output-value" id="resultBasic">$1,663</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ======= Calculetor section end ======= -->

  <section class=" common-wrap-form">
    <div class="common-wrap">
      <div class="support-box">
        <h2 class="support-title">We’re Here to Help</h2>
        <p class="support-text">Have a mortgage related question? Looking for additional information about our mortgage products and services? Please reach out to us anytime!</p>
        <button class="support-btn btn">
          <img src="./assets/images/phone-icon.png" alt=""> (512) 593-4157
        </button>
      </div>
      <div class="form-box">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone">
          </div>
          <div class="form-group">
            <label for="contact">Preferred Method of Contact</label>
            <input type="text" id="contact">
          </div>
          <div class="form-group full">
            <label for="message">Question or Comment</label>
            <textarea id="message" rows="5"></textarea>
          </div>
          <button type="submit" class="submit-btn btn btn-primary">✉️ SEND</button>
        </form>
      </div>
    </div>
  </section>
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