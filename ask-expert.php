<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Financing Direct | ask expert</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="./assets/css/final.css">
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
            <img src="./assets/images/ask-mortgage-expert.jpg" alt="ask mortgage expert">
         </div>
      </div>
   </section>
   <!-- hero section end -->
   <!-- form section start -->
   <section class="form-section">
      <div class="common-wrap">
         <form action="" class="common-form d-flex flex-col gap-20">
            <div class="d-flex flex-col item-center gap-10">
               <h3>Ask Us a Question</h3>
               <p>Get expert mortgage advice</p>
            </div>
            <div class="form-item-wrap grid">
               <div class="form-item d-flex flex-col">
                  <label for="name">Name</label>
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
                  <!-- <input type="text" id="preferred_method"> -->
                  <select name="preferred_method" id="preferred_method">
                     <option value="Please select">Please select</option>
                     <option value="Please select">Bangladesh</option>
                     <option value="Please select">United State</option>
                     <option value="Please select">United kingdom</option>
                  </select>
               </div>
               <div class="form-item form-full-width d-flex flex-col">
                  <label for="comment">Question or Comment</label>
                  <textarea name="" id="comment"></textarea>
               </div>
               <div class="form-item form-submit form-full-width d-flex flex-col">
                  <button type="submit" class="btn btn-primary d-flex item-center justify-center gap-10"><img src="./assets/images/send-icon.png" alt="send icon"> Submit Your Question</button>
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