<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ask-expert</title>
   <!-- <link rel="stylesheet" href="./assets/css/global.css"> -->
   <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
   <link rel="stylesheet" href="./assets/css/final.css">
   <!-- <link rel="stylesheet" href="./assets/css/responsive.css"> -->
</head>

<body>
   <?php include 'header.php'; ?>

   <!-- hero section start -->
   <section class="hero-section">
      <div class="common-wrap d-flex justify-between gap-20">
         <div class="content-wraper">
            <p class="sub-title">Your mortgage partner</p>
            <h1 class="title">About Us</h1>
            <p class="content">Our company was built on the principles of trust, integrity, and customer-centric service, and we are committed to offering our clients the best mortgage options on the market.</p>
         </div>
         <div class="media d-flex item-end flex-col">
            <img src="./assets/images/texas-mortgage-company.jpg" alt="about-shay-wright-video">
         </div>
      </div>
   </section>
   <!-- hero section start -->

   <!-- form section  -->
   <section class="common-form-section">
      <div class="common-form-wrap d-flex flex-col">
         <div class="common-form-content text-center">
            <h2>Ask Us a Question</h2>
            <p>Get expert mortgage advice</p>
         </div>
         <form>
            <div class="common-form-group">
               <label for="name">Name</label>
               <input type="text" id="name">
            </div>
            <div class="common-form-group">
               <label for="email">Email</label>
               <input type="email" id="email">
            </div>
            <div class="common-form-group">
               <label for="phone">Phone</label>
               <input type="text" id="phone">
            </div>
            <div class="common-form-group">
               <label for="contact">Preferred Method of Contact</label>
               <input type="text" id="contact">
            </div>
            <div class="common-form-group wrap">
               <label for="message">Question or Comment</label>
               <textarea id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="submit-btn"><img src="./assets/images/send-icon.png" alt="send icon"> SEND</button>
         </form>
      </div>
   </section>


   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>
</body>

</html>