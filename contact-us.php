<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>
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
            <p class="sub-title">We’re here to help</p>
            <h1 class="title">Contact Us</h1>
            <p class="content">Have a question? Want to learn more about our home financing options? Please complete the following form or reach out to us using one of the other contact methods listed below.</p>
         </div>
         <div class="media d-flex item-end flex-col">
            <img src="./assets/images/contact-us.jpg" alt="contact us">
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- form section start -->

   <section class="contact-us">
      <div class="common-wrap d-flex flex-col gap-24 item-start">
         <form action="" class="common-form d-flex flex-col gap-20">
            <div class="d-flex flex-col item-center gap-10">
               <h3>Email Us</h3>
               <p>We'd love to hear from you.</p>
            </div>
            <div class="form-item-wrap grid">
               <div class="form-item d-flex flex-col">
                  <label for="name">Your Name</label>
                  <input type="text" id="name">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="email">Email</label>
                  <input type="text" id="email">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="preferred_method">Preferred Method of Contact</label>
                  <input type="text" id="preferred_method">
               </div>
               <div class="form-item form-full-width d-flex flex-col">
                  <label for="message">Message</label>
                  <textarea name="" id="message"></textarea>
               </div>
               <div class="form-item form-submit form-full-width d-flex flex-col">
                  <button type="submit" class="btn btn-primary d-flex item-center justify-center gap-10"><img src="./assets/images/send-icon.png" alt="send icon"> Get in Touch</button>
               </div>
            </div>
         </form>
         <div class="contact-info d-flex flex-col gap-20">
            <h3>Contact Info</h3>
            <ul class="d-flex flex-col gap-20">
               <li class="contact-item d-flex gap-10"><img src="./assets/images/address-icon.png" alt="address icon">11701 FM Rd 2244 Suite 140 Austin, TX 78738</li>
               <li class="contact-item d-flex gap-10"><img src="./assets/images/phone-green-icon.png" alt="phone icon"><a href="tel:5125934157">(512) 593-4157</a></li>
               <li class="contact-item d-flex gap-10"><img src="./assets/images/email-icon.png" alt="email icon"><a href="mailto:info@homefinancingdirect.com">info@homefinancingdirect.com</a></li>
            </ul>
         </div>
      </div>
   </section>
   <!-- form section end -->
   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>

</body>

</html>