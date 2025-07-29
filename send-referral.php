<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>send-referral</title>
   <link rel="stylesheet" href="./assets/css/final.css">
</head>

<body class="about-shay">
   <?php include 'header.php'; ?>
   <!-- hero section start -->
   <section class="hero-section">
      <div class="common-wrap d-flex justify-between gap-20">
         <div class="content-wraper">
            <p class="sub-title">In good hands</p>
            <h1 class="title">Send a Referral</h1>
            <p class="content">Do you know someone who needs a great new mortgage? I love referrals, and I would really appreciate any business you refer to me. And of course, I promise to take great care of anyone you send my way!</p>
         </div>
         <div class="media d-flex item-end flex-col">
            <img src="./assets/images/mortgage-referral.jpg" alt="about-shay-wright-video">
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- form section start -->
   <section class="form-section">
      <div class="common-wrap">
         <form action="" class="common-form d-flex flex-col gap-20">
            <div class="d-flex flex-col item-center gap-10">
               <p>Send referral to</p>
               <h3>Shay Wright</h3>
            </div>
            <div class="form-item-wrap grid">
               <div class="form-item d-flex flex-col">
                  <label for="name">Your Name</label>
                  <input type="text" id="name">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="email">Your Email</label>
                  <input type="text" id="email">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="referral_name">Referral's Name</label>
                  <input type="text" id="referral_name">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="referral_email">Referral's Email</label>
                  <input type="text" id="referral_email">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="referral_phone">Referral's Phone</label>
                  <input type="text" id="referral_phone">
               </div>
               <div class="form-item d-flex flex-col">
                  <label for="referral_contact">Referral's Preferred Method of Contact</label>
                  <input type="text" id="referral_contact">
               </div>
               <div class="form-item form-full-width d-flex flex-col">
                  <label for="referral_comment">Comments (if any)</label>
                  <textarea name="" id="referral_comment"></textarea>
               </div>
               <div class="form-item form-full-width d-flex flex-col">
                  <button type="submit" class="btn btn-primary d-flex item-center justify-center gap-10">Send Referral</button>
               </div>
            </div>
         </form>
      </div>
   </section>
   <!-- form section end -->
   <?php include 'footer-simple.php'; ?>
   <!-- footer section end -->
   <script src="./script.js"></script>
</body>

</html>