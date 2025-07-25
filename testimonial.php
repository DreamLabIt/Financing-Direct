  <!-- Swiper Container -->
<div class="testimonial-box common-wrap">
    <h3 class="title">Clint Testimonials</h3>
    <div class="swiper mySwiper testimonial-slider">
    <div class="swiper-wrapper">
      <!-- Testimonial Slides -->
      <div class="swiper-slide">
        <div class="testimonial">
          <p class="quote">
            I am happy to wholeheartedly recommend Shay Wright! He answered all my questions and gave quality mortgage lending advice to my family. I would absolutely use Shay’s services again and have no hesitation recommending him!
          </p>
          <div class="testimonial-footer">
            <img class="user-img" src="./assets/images/home-builder-icon.png" alt="bilder icon">
            <div class="user-info">
              <p class="user-name">Erin Hosford1</p>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial">
          <p class="quote">
            I am happy to wholeheartedly recommend Shay Wright! He answered all my questions and gave quality mortgage lending advice to my family. I would absolutely use Shay’s services again and have no hesitation recommending him!
          </p>
          <div class="testimonial-footer">
            <img class="user-img" src="./assets/images/home-builder-icon.png" alt="bilder icon">
            <div class="user-info">
              <p class="user-name">Erin Hosford1</p>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial">
          <p class="quote">
            I am happy to wholeheartedly recommend Shay Wright! He answered all my questions and gave quality mortgage lending advice to my family. I would absolutely use Shay’s services again and have no hesitation recommending him!
          </p>
          <div class="testimonial-footer">
            <img class="user-img" src="./assets/images/home-builder-icon.png" alt="bilder icon">
            <div class="user-info">
              <p class="user-name">Erin Hosford1</p>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial">
          <p class="quote">
            I am happy to wholeheartedly recommend Shay Wright! He answered all my questions and gave quality mortgage lending advice to my family. I would absolutely use Shay’s services again and have no hesitation recommending him!
          </p>
          <div class="testimonial-footer">
            <img class="user-img" src="./assets/images/home-builder-icon.png" alt="bilder icon">
            <div class="user-info">
              <p class="user-name">Erin Hosford1</p>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Repeat .swiper-slide as needed -->

    </div> <!-- End .swiper-wrapper -->

    <!-- ✅ Move this outside of .swiper-wrapper -->
    <!-- <div class="swiper-pagination"></div> -->
  </div>
</div>
 

<!-- ✅ Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ✅ Init Script -->
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
      autoplay: {
      delay: 4000, 
      disableOnInteraction: false, 
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
</script>
