<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Financing Direct | rate-quote-purchase</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="./assets/css/final.css">
</head>

<body class="about-shay">
   <?php include 'header.php'; ?>
   <!-- hero section start -->
   <section class="hero-section">
      <div class="common-wrap d-flex justify-center text-center">
         <div class="content-wraper">
            <p class="sub-title">Your mortgage partner</p>
            <h1 class="title">About Us</h1>
            <p class="content">Our company was built on the principles of trust, integrity, and customer-centric service, and we are committed to offering our clients the best mortgage options on the market.</p>
         </div>
   </section>
   <!-- hero section end -->
   <!-- form section start -->
   <section class="form-section">
      <div class="common-wrap">
         <form action="" class="common-form d-flex flex-col gap-20">
            <div class="form-item-wrap grid">
               <div class="form-item d-flex flex-col">
                  <label for="first_time_buyer">First Time Buyer</label>
                  <div class="d-flex gap-10">
                     <div>
                        <input name="firstTimeBuyer" id="buyerYes" type="radio" value="yes">
                        <label for="buyerYes">Yes</label>
                     </div>
                     <div>
                        <input name="firstTimeBuyer" id="buyerNo" type="radio" value="no">
                        <label for="buyerNo">No</label>
                     </div>
                  </div>
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="first_time_buyer">Veteran or Active Military?</label>
                  <div class="d-flex gap-10">
                     <div>
                        <input name="military" id="militaryYes" type="radio" value="yes">
                        <label for="militaryYes">Yes</label>
                     </div>
                     <div>
                        <input name="military" id="militaryno" type="radio" value="no">
                        <label for="militaryno">No</label>
                     </div>
                  </div>
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="propertyType">Property Type</label>
                  <select name="propertyType" id="propertyType">
                     <option value="Select Property Type">Select Property Type</option>
                     <option value="By layout">By layout</option>
                     <option value="By layout">By layout</option>
                  </select>
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="intendeduse">Intended Use</label>
                  <select name="propertyType" id="intendeduse">
                     <option value="Select Intended Use">Select Intended Use</option>
                     <option value="By layout">Intended Use</option>
                     <option value="Intended Use">Intended Use</option>
                  </select>
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="expectedPurchaseprice">Expected Purchase Price</label>
                  <input id="expectedPurchaseprice" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="expecteddownPayment">Expected Down Payment</label>
                  <input id="expecteddownPayment" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="expectedZipCode">Expected Zip Code</label>
                  <input id="expectedZipCode" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="estimatedCriditScore">Estimated Cridit Score</label>
                  <input id="estimatedCriditScore" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="yourName">Your Name</label>
                  <input id="yourName" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="email">Email</label>
                  <input id="email" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="phone">Phone</label>
                  <input id="phone" type="text">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="preferredMethodContact">Preferred Method of Contact</label>
                  <input id="preferredMethodContact" type="text">
               </div>
               <div class="form-item form-full-width d-flex flex-col">
                  <label for="comment">Comments (if any)</label>
                  <textarea name="" id="comment"></textarea>
               </div>
               <div class="form-item form-submit form-full-width d-flex flex-col">
                  <button type="submit" class="btn btn-primary d-flex item-center justify-center gap-10">Get My Rate Quote</button>
               </div>
            </div>
         </form>
      </div>
   </section>
   <!-- form section end -->
   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <script src="./script.js"></script>
</body>

</html>