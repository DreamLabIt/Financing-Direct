// common faq start 
  document.querySelectorAll('.common-faq-item').forEach(item => {
      item.addEventListener('click', () => {
        const answer = item.querySelector('.answer');
        const icon = item.querySelector('.icon');
        const isShown = answer.classList.contains('show');

        document.querySelectorAll('.answer').forEach(a => a.classList.remove('show'));
        document.querySelectorAll('.icon').forEach(i => i.classList.remove('rotate'));

        if (!isShown) {
          answer.classList.add('show');
          icon.classList.add('rotate');
        }
      });
    });
// common faq end

 
 
 const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
      const button = item.querySelector(".faq-button");

      button.addEventListener("click", () => {
        const isActive = item.classList.contains("active");

        // Remove active from all
        faqItems.forEach(i => i.classList.remove("active"));

        // If this was not active before, activate it
        if (!isActive) {
          item.classList.add("active");
        }
      });
    });

   
    // client testimonial slider start
  const swiper = new Swiper('.testimonial-swiper', {
    loop: true,
    spaceBetween: 20,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

    // 👇 Responsive breakpoints
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      641: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween:56,
      },
    },
  });
  // client testimonial slider end