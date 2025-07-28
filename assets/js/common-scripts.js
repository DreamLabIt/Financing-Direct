(function($){
	$(function(){
		  
        
        // Phone nav click function
      
        $('#phone-nav').click(function () {
            $("body").toggleClass("navShown");
        });

       /*  $('.main-nav ul li a').click(function () {
            $("body").toggleClass("navShown");
        }); */

      /* Dropdown menu */
		$(".main-nav > ul > li").find("ul").parent("li").addClass("has-sub-nav");
		
        if($(window).width() < 768 ){
            $(".main-nav > ul > li.has-sub-nav > a").bind('click', 'touchend', function (e) {
                e.preventDefault();
                $('body').toggleClass('sub-menu-active');
                $(".main-nav > ul > li").find("> ul:visible").slideUp();
                $(".main-nav > ul > li").removeClass("active");
                if ($(this).parent().find("> ul:visible").length) {
                    $(this).removeClass("active");
                    $(this).parent().find("> ul").slideUp();
                } else {
                    $(this).addClass("active");
                    $(this).parent().find("> ul").slideDown();
                }
            });
        }
        
        $(".service-wrap").each(function(){
			var $this = $(this);
			$this.find('.read-more').click(function(e) {
				e.preventDefault();
			  if ( $this.find('.moretext').is(":visible") ) {
				 $this.find('.moretext').slideUp();
				 $(this).text("Read More")
			  } else {
					$this.find('.moretext').slideDown();
					$(this).text("Read Less")
			  }
			});
        })
         
		$('.currency').each(function() {
			var data = $(this).val()
			if (data.length == 0) {
				$(this).val("$");
			}
		});

		var format_currency = function(num) {
			var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
			if (str.indexOf(".") > 0) {
				parts = str.split(".");
				str = parts[0];
			}
			str = str.split("").reverse();
			for (var j = 0, len = str.length; j < len; j++) {
				if (str[j] >= '0' && str[j] <= '9') {
					output.push(str[j]);
					if (i % 3 == 0 && j < (len - 1)) {
						output.push(",");
					}
					i++;
				}
			}
			formatted = output.reverse().join("");
			return("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
		};

		var format_numeric = function(num) {
			var str = num.toString().replace(/[^0-9]/g, "");
			return str;
		};

		$(".currency").keyup(function(e) {
			$(this).val(format_currency($(this).val()));
		});
		$(".numeric").keyup(function(e) {
			$(this).val(format_numeric($(this).val()));
		});


// Start Fees & Payment Worksheet

		if ($('.payment-item-wrap').length) {
            $('.payment-item-wrap').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                mobileFirst: true,
                arrows: false,
                dots: true,
                responsive: [
					{
						breakpoint: 592,
						settings: {
							slidesToShow: 2,
						}
				},
                    {
                            breakpoint: 767,
                            settings: 'unslick'
                    }
                ]
            })

            $(window).on('resize', function () {
                $('.payment-item-wrap').slick('resize');
                });
        }

		if ($('.client-testimonials-item-wrap').length) {
            $('.client-testimonials-item-wrap').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                mobileFirst: true,
                arrows: false,
                dots: true,
				infinite: false,
                responsive: [
					{
						breakpoint: 592,
						settings: {
							slidesToShow: 2,
						}
				},
                    {
                            breakpoint: 767,
                            settings: 'unslick'
                    }
                ]
            })

            $(window).on('resize', function () {
                $('.client-testimonials-item-wrap').slick('resize');
                });
        }

		// End Fees & Payment Worksheet
        
        if($('.selectric').length){
			$('.selectric').selectric();
		}

        
//        
//        $('.price-calculator-item').each(function(){
//            var $$this = $(this)
//            
//            if($$this.find('.total-wrap').length == 2){
//                alert('red')
//            }
//            
//        })
                  
    $('.price-calculator-item').each(function(){
     var $$this = $(this)
        
        if( $$this.find('.total-wrap > div').length == 3){
            $('.price-calculator-wrap').addClass('total-column-three')
            console.log('columns-three')
        }
        else if( $$this.find('.total-wrap > div').length == 4){
            $('.price-calculator-wrap').addClass('total-columns-four')
            console.log('columns-three')
        }
        
        
        
    })


	// Start New Js

	if ($('.testimonials-slider-item-wrap').length) {
		$('.testimonials-slider-item-wrap').slick({
			arrows: true,
			infinite: true,
			autoplay: false,
			navigation: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: false,
			centerMode: false,
			focusOnSelect: true,
			fade: false,
			adaptiveHeight: true,
			responsive: [

				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
		$(window).on('resize', function () {
			$('.testimonials-slider-item-wrap').slick('resize');

		});
		
	}

	if ($('.testimonial-carousel').length) {
		$('.testimonial-carousel').slick({
			arrows: false,
			infinite: true,
			autoplay: false,
			navigation: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: false,
			centerMode: false,
			focusOnSelect: true,
			fade: false,
			adaptiveHeight: false,
			responsive: [

				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
		$(window).on('resize', function () {
			$('.testimonial-carousel').slick('resize');

		});

		$(".prev").click(function () {
			$(".testimonial-carousel").slick("slickPrev");
		});
	
		$(".next").click(function () {
			$(".testimonial-carousel").slick("slickNext");
		});
	

		// const nextBtn = document.getElementById('nextSlideBtn');   
		// const nextSlide = function nextSlide(slider) {     
		// 	$(slider).slick('slickNext');   
		// };
		// nextBtn.addEventListener('click', function () {
		// 	return nextSlide('.current-slider-1');
		// });
		
	}
        
//        setTimeout(function(){
//          $('a').removeClass('fadeOut');
//        }, 100);


$(".question-content-info").each(function(){
	var $this = $(this);
	$this.find(" > h5").on("click touch", function(){
		$(".question-content-info").removeClass("accordion-active")
		$(".question-content-text").slideUp();
		if($this.find(".question-content-text:visible").length){
			$(".question-content-info").removeClass("accordion-active")
			$(".question-content-text").slideUp();
		}
		else{
			$this.addClass("accordion-active")
			$(".question-content-text").slideUp();
			$this.find(" > .question-content-text").slideDown();
		}
	})
})
        
   
		
			function formatCurrency(input) {
				let value = input.val().replace(/[^0-9.]/g, '');
				if (value !== '') {
					value = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'); 
					input.val('$' + value); 
				} else {
					input.val('');
				}
			}
		
			$('#expected-price, #down-payment, #estimated-market-value, #current-loan-balance, #cash-back, #AnnualIncome, #HouseholdIncome').on('input', function() {
				let inputVal = $(this).val().replace(/[^0-9.]/g, '');
				$(this).val(inputVal);
				formatCurrency($(this));
		
				$('#expected-price, #estimated-market-value, #current-loan-balance, #cash-back, #AnnualIncome, #HouseholdIncome').val().replace(/[^0-9]/g, '');
				$('#down-payment').val().replace(/[^0-9]/g, '');
				
			});

		$('.prev-next-form-field .next-cta').click(function(){
			$('.calculator-form-row-wrap').hide();
			$('.next-form-field-wrap').show();
				
		})	
        
        $('#purchase-form .next-form-field .next-cta, .estimated-market-field .next-cta').click(function(){
            $('.calculator-form-row-wrap').hide();
            $('.calculator-form-row-wrap.last-input-field').show();
            $('.calculator-form-row-wrap').hide();
            $('.calculator-form-row-wrap.prev-last-step-form').show();
        }) 
         $('.prev-last-step-form .next-cta').click(function(){
            $('.calculator-form-row-wrap').hide();
            $('.calculator-form-row-wrap.last-step-form').show();
            $('.submit-wrap').show();
             
        })
         $('#purchase-form .next-form-field .next-cta').click(function(){
            $('.submit-wrap').show();
        }) 
        $('.back-cta').click(function(){
            $('.calculator-form-row-wrap.first-item.top-bar-xm').hide();
        })
        $('.purchase-form .calculator-form-row-wrap.last-input-field .back-cta').click(function(){
            $('.purchase-form .calculator-form-row-wrap.form-first-item').hide();
        })
        $('.home-loan-match .calculator-form-row-wrap.last-input-field .back-cta').click(function(){
            $('.purchase-form .calculator-form-row-wrap.form-first-item + .calculator-form-row-wrap').hide();
        })
        $('.home-loan-match .calculator-form-row-wrap.next-form-field-wrap .back-cta').click(function(){
            $('.purchase-form .calculator-form-row-wrap.form-first-item').hide();
        })
        $('.form-first-item .back-cta').click(function(){
            $('.calculator-form-row-wrap').hide();
            $('.calculator-form-row-wrap.first-item.top-bar-xm').show();
        })
        
        $('.home-loan-match input[type="radio"]').click(function() {
            // Find the label associated with the clicked radio input and trigger the click event
            $('label[for="' + $(this).attr('id') + '"]').click();
        });
        
        
        $('.calculator-form-row-wrap.first-item.top-bar-xm input[type="radio"]').click(function(){
            $('body').addClass('heading-content-hide');
        })
        $('.form-first-item .back-cta').click(function(){
            $('body').removeClass('heading-content-hide');
        })
        $('.home-loan-match .calculator-form-row-wrap.first-item.top-bar-xm .next-cta').click(function(){
            $('.lead-text-wrap').hide();
        })
        $('.home-loan-match .calculator-form-row-wrap.form-first-item .back-cta').click(function(){
            $('.lead-text-wrap').show();
        })
        

        
      
        
      
		
		
	})// End ready function.

})(jQuery)
