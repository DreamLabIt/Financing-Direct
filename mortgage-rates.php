<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>mortgage-rates</title>
   <link rel="stylesheet" href="./assets/css/final.css">
</head>

<body class="about-shay">
   <?php include 'header.php'; ?>
   <!-- hero section start -->
   <section class="hero-section">
      <div class="common-wrap d-flex justify-between gap-20">
         <div class="content-wraper">
            <p class="sub-title">The lowest rates on the market!</p>
            <h1 class="title">Mortage Rates Today</h1>
            <p class="content">We are proud to offer the lowest interest rates on the market. Check out our rates below, and then be sure to request a free rate quote!</p>
            <div class="btn-wraper d-flex flex-wrap gap-20">
               <a class="btn btn-primary" href="#">Get a Rate Quote</a>
            </div>
         </div>
         <div class="media d-flex item-end flex-col">
            <img src="./assets/images/mortgage-rates-today.jpg" alt="about-shay-wright-video">
         </div>
      </div>
   </section>
   <!-- hero section start -->

   <!-- mortgage calculator section start -->
   <?php include "calculator.php"; ?>
   <!-- mortgage calculator section end -->


   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>
</body>

</html>