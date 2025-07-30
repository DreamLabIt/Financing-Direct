<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rate-quote-purchase</title>
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
   <!-- hero section start -->
   <section class="common-form-section">
      <div class="common-wrap">
         <div class="common-form-wrap">
            <div class="common-form d-flex flex-col">
               <div class="common-form-content text-center">
                  <h2>Ask Us a Question</h2>
                  <p>Get expert mortgage advice</p>
               </div>
               <form class="grid gap-20">
                  <div class="common-form-group d-flex flex-col">
                     <label for="name">Name</label>
                     <input type="text" id="name">
                  </div>
                  <div class="common-form-group d-flex flex-col">
                     <label for="email">Email</label>
                     <input type="email" id="email">
                  </div>
                  <div class="common-form-group d-flex flex-col">
                     <label for="phone">Phone</label>
                     <input type="text" id="phone">
                  </div>
                  <div class="common-form-group d-flex flex-col">
                     <label for="contact">Preferred Method of Contact</label>
                     <input type="text" id="contact">
                  </div>
                  <div class="common-form-group d-flex flex-col wrap">
                     <label for="message">Question or Comment</label>
                     <textarea id="message" rows="5"></textarea>
                  </div>
                  <button type="submit" class="submit-btn"><img src="./assets/images/send-icon.png" alt="send icon"> SEND</button>
               </form>
            </div>
         </div>
      </div>
   </section>


   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>
</body>

</html>