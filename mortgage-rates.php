<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>mortgage-rates</title>
<<<<<<< HEAD
   <!-- <link rel="stylesheet" href="./assets/css/global.css"> -->
   <link rel="stylesheet" href="./assets/css/style.css">
   <!-- <link rel="stylesheet" href="./assets/css/responsive.css"> -->
=======
   <link rel="stylesheet" href="./assets/css/final.css">
>>>>>>> dev-rafi
</head>

<body class="about-shay">
   <?php include 'header.php'; ?>
   <!-- hero section start -->
   <section class="hero-section">
<<<<<<< HEAD
      <div class="common-wrap d-flex justify-between item-center">
=======
      <div class="common-wrap d-flex justify-between gap-20">
>>>>>>> dev-rafi
         <div class="content-wraper">
            <p class="sub-title">The lowest rates on the market!</p>
            <h1 class="title">Mortage Rates Today</h1>
            <p class="content">We are proud to offer the lowest interest rates on the market. Check out our rates below, and then be sure to request a free rate quote!</p>
            <div class="btn-wraper d-flex flex-wrap gap-20">
               <a class="btn btn-primary" href="#">Get a Rate Quote</a>
            </div>
         </div>
<<<<<<< HEAD
         <div class="media">
=======
         <div class="media d-flex item-end flex-col">
>>>>>>> dev-rafi
            <img src="./assets/images/mortgage-rates-today.jpg" alt="about-shay-wright-video">
         </div>
      </div>
   </section>
   <!-- hero section start -->
<<<<<<< HEAD
   <!-- mortgage calculator section start -->
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
                        <input type="number" id="loanBasic">
                     </div>
                     <div class="input-group">
                        <label>Loan Term (Yrs)</label>
                        <input type="number" id="termBasic">
                     </div>
                     <div class="input-group">
                        <label>Interest Rate (%)</label>
                        <input type="number" id="rateBasic">
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
                        <input type="number" id="loanBasic">
                     </div>
                     <div class="input-group">
                        <label>Loan Term (Yrs)</label>
                        <input type="number" id="termBasic">
                     </div>
                     <div class="input-group">
                        <label>Interest Rate (%)</label>
                        <input type="number" id="rateBasic">
                     </div>
                     <div class="input-group">
                        <label>Property Taxes (Yearly)</label>
                        <input type="number" id="rateBasic">
                     </div>
                     <div class="input-group">
                        <label>Insurance (Yearly)</label>
                        <input type="number" id="rateBasic">
                     </div>
                     <div class="input-group">
                        <label>Other (Yearly)</label>
                        <input type="number" id="rateBasic">
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
=======

   <!-- mortgage calculator section start -->
   <?php include "calculator.php"; ?>
>>>>>>> dev-rafi
   <!-- mortgage calculator section end -->


   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>
</body>

</html>