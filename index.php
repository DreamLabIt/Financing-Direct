<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financing Direct | Home</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>
  <body>
    <main> 
      <!-- ====  Beginning header section === -->
      <?php include "./header.php";?>
     <!-- ====  End header section === -->

     <!-- ===== Mortgages section start -->
      <section class="mortgages-wrap ">
        <div class="mortgages common-wrap">
          <div class="item" style="background-image: url('./assets/images/mortgage-types.jpg');">
            <h3>All Type of Mortgages</h3>
            <p>From zero down loans to multi-millions dollar jumbo loans, we have a loan option that perfectly fits your situation!</p>
            <a href="#" class="btn explore">Explore your loan options</a>
          </div>
          <div class="item " style="background-image: url('./assets/images/ask-mortgage-professional.jpg');">
            <h3>Ask a Mortgage Question</h3>
            <p>Do you have a mortgage related question? We love answering questions and being of assistance in any other way possible.</p>
            <a href="#" class="btn btn-primary">Ask us a question</a>
          </div>
          <div class="item" style="background-image: url('./assets/images/customers-love-us.jpg');">
            <h3>Our Customers Love Us</h3>
            <p>From zero down loans for first-time home buyers to jumbo loans for luxury home purchases, we have a loan option that.</p>
            <a href="#" class="btn">Read our testimonials</a>
          </div>
        </div>
      </section>
     <!-- ===== Mortgages section end -->

     <!-- ======== Dreams section start ======== -->
      <section class="dreams-wrap">
        <div class="common-wrap ">
          <div class="dream-item">
            <h2><span>Realizing Dreams ... </span>
            One Mortgage at a Time</h2>
            <p>Our honest, customer centric approach is what sets us apart from the competition.  We make the mortgage process smooth and stress-free and take as much off your plate as possible.</p>
            <button class="btn btn-border">Learn More About Us</button>
          </div>
          <div></div>
        </div>
      </section>
      
     <!-- ======== Dreams section end ======== -->

     <!-- ======= Calculetor section start ======= -->
      <section class="calculator-section common-wrap">
        <div class="calculator-container">
          <div class="calculator-header">
            <h2>MORTGAGE PAYMENT CALCULATOR</h2>
            <p>Calculate your monthly payment for different loan scenarios</p>
          </div>

          <div class="tabs">
            <div class="tabs-right">
              <button class="tab active" onclick="switchTab('basic')">BASIC</button>
              <button class="tab" onclick="switchTab('advanced')">ADVANCED</button>
            </div>
          </div>

          <div class="calculator-body">
            <!-- BASIC TAB -->
            <div id="basic" class="form-section active">
              <div class="form-inner">
                <div class="input-group">
                  <label>Loan Amount</label>
                  <input type="number" id="loanBasic" />
                </div>
                <div class="input-group">
                  <label>Loan Term (Yrs)</label>
                  <input type="number" id="termBasic" />
                </div>
                <div class="input-group">
                  <label>Interest Rate (%)</label>
                  <input type="number" id="rateBasic" />
                </div>
                <div class="input-group">
                  <button class="calculate-btn" onclick="calculateBasic()">CALCULATE</button>
                </div>
              </div> 
              <span></span>
              <div class="output">
                <div class="output-label">Monthly Payment</div>
                <div class="output-value" id="resultBasic">$1,663</div>
              </div>
            </div>

            <!-- ADVANCED TAB -->

             <div id="basic" class="form-section ">
              <div class="form-inner">
                <div class="input-group">
                  <label>Loan Amount</label>
                  <input type="number" id="loanBasic" />
                </div>
                <div class="input-group">
                  <label>Loan Term (Yrs)</label>
                  <input type="number" id="termBasic" />
                </div>
                <div class="input-group">
                  <label>Interest Rate (%)</label>
                  <input type="number" id="rateBasic" />
                </div>
                <div class="input-group">
                  <label>Property Taxes (Yearly)</label>
                  <input type="number" id="rateBasic" />
                </div>
                <div class="input-group">
                  <label>Insurance (Yearly)</label>
                  <input type="number" id="rateBasic" />
                </div>
                <div class="input-group">
                  <label>Other (Yearly)</label>
                  <input type="number" id="rateBasic" />
                </div>
                <div class="input-group">
                  <button class="calculate-btn" onclick="calculateBasic()">CALCULATE</button>
                </div>
              </div> 
              <span></span>
              <div class="output">
                <div class="output-label">Monthly Payment</div>
                <div class="output-value" id="resultBasic">$1,663</div>
              </div>
            </div>
        
          </div>
        </div>
      </section>





      <!-- ============================ FAQ section start ============================ -->

      <section class="common-faq-section">
        <div class="common-wrap common-faq-wrap">
          <h2>Construction Loan FAQs</h2>
          <p class="subtitle">Answers to commonly asked questions about our one-time close construction loans.</p>
          <div class="d-flex gap-10 common-faq">
            <div class="d-flex flex-col gap-10">
              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">Will my interest rate change when construction is complete?</h5>
                </div>
                <div class="answer">
                  <p>You will lock in an interest rate for the construction phase...</p>
                </div>
              </div>

              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">How long do I have to complete construction?</h5>
                </div>
                <div class="answer">
                  <p>You have 12 months from closing to complete construction...</p>
                </div>
              </div>

              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">How much interest is charged during construction?</h5>
                </div>
                <div class="answer">
                  <p>The interest is based on the amount drawn each month...</p>
                </div>
              </div>
            </div>  
            <div class="d-flex flex-col gap-10">
            
              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">Can I still do this loan if I already own my lot?</h5>
                </div>
                <div class="answer">
                  <p>Yes! We can use the value of your lot as part of the equity...</p>
                </div>
              </div>

              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">Does my builder have to be approved through your program?</h5>
                </div>
                <div class="answer">
                  <p>Yes, your builder must be reviewed and approved by our team...</p> 
                </div>
              </div>

              <div class="common-faq-item">
                <div class="question">
                  <h5 class="d-flex item-center justify-between gap-10">What construction documentation will be required?</h5>
                </div>
                <div class="answer">
                  <p>Required documents include contract, plans, permits, appraisal, etc.</p>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </section>

<script>
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
</script>

        

      <!-- ============================ FAQ section end ============================ -->




      <!-- ============================= FHA loon rate section start ========================== -->


      <section class="mortgage-rates">
        <div class="mortgage-rates-inner">
          <div class="exceptional-title">
            <h2>FHA Loan Limits</h2>
            <p>The following are the loan limits for most counties in Texas with a few exceptions. Look up the FHA loan limit for a specific county in Texas.</p>
          </div>
          <div class="rate-box">
            <div class="rate-row rate-box-head">
              <div class="rate-col">
                <h5>Single Family</h5>
              </div>
              <div class="rate-col">
                <h5>Duplex</h5>
              </div>
              <div class="rate-col">
                  <h5>Triplex</h5>
              </div>
              <div class="rate-col">
                  <h5>Fourplex</h5>
              </div>
            </div>
            <div class="rate-box-body ">
              <div class="rate-row">
                <div class="rate-col">
                  <p>$571,550</p>
                </div>
                <div class="rate-col">
                  <p>$731,700</p>
                </div>
                <div class="rate-col">
                  <p>$884,450</p>
                </div>
                <div class="rate-col">
                  <p>$1,099,150</p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </section>


<br>
<br>


      <section class="down-pament-rates">
        <div class="mortgage-rates-inner">
          <div class="exceptional-title">
            <h2>Down Payment Requirements</h2>
            <p>The following are our minimum FHA down payment amounts based on credit score.</p>
          </div>
          <div class="rate-box">
            <div class="rate-row rate-box-head">
              <div class="rate-col">
                <h5>Credit Score</h5>
              </div>
              <div class="rate-col">
                <h5>Minimum Down</h5>
              </div>
            </div>
            <div class="rate-box-body ">
              <div class="rate-row">
                <div class="rate-col">
                  <p>600+</p>
                </div>
                <div class="rate-col">
                  <p>0.0%</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col">
                  <p>580+</p>
                </div>
                <div class="rate-col">
                  <p>3.5%</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col">
                  <p>500-579</p>
                </div>
                <div class="rate-col">
                  <p>10%</p>
                </div>
              </div>
            </div>
          </div>
          <p class="note">* Please note that the 0% down payment option will result in an interest rate that is about 1% higher than the 3.5% down option.</p> 
        </div>
      </section>


      <!-- ============================= FHA loon rate section end ========================== -->



      <!-- ======================== Our Mortgage Rates start ====================== -->

      <section class="our-mortgage-rates">
        <div class="mortgage-rates-inner">
          <div class="exceptional-title">
            <h2>Our Mortgage Rates</h2>
            <p>The lowest rates on the market!</p>
          </div>
          <div class="rate-box">
            <div class="rate-row rate-box-head">
              <div class="rate-col rate-col-head">
                <h5>Loan Type</h5>
              </div>
              <div class="rate-col">
                <h5>Rate</h5>
              </div>
              <div class="rate-col">
                <h5>APR</h5>
              </div>
              <div class="rate-col">
                <h5>Points</h5>
              </div>
              
            </div>
            <div class="rate-box-body ">
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>Conventional</h5>
                  <p>15 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>4.95%</p>
                </div>
                <div class="rate-col">
                  <p>5.20%</p>
                </div>
                <div class="rate-col">
                  <p>1.45</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>Conventional</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>5.90%</p>
                </div>
                <div class="rate-col">
                  <p>6.15%</p>
                </div>
                <div class="rate-col">
                  <p>1.45</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>FHA</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>5.30%</p>
                </div>
                <div class="rate-col">
                  <p>5.88%</p>
                </div>
                <div class="rate-col">
                  <p>1.00</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>VA</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>5.35%</p>
                </div>
                <div class="rate-col">
                  <p>5.73%</p>
                </div>
                <div class="rate-col">
                  <p>1.00</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>USDA</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>5.62%</p>
                </div>
                <div class="rate-col">
                  <p>6.13%</p>
                </div>
                <div class="rate-col">
                  <p>1.00</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>Jumbo</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>6.25%</p>
                </div>
                <div class="rate-col">
                  <p>6.41%</p>
                </div>
                <div class="rate-col">
                  <p>1.45</p>
                </div>
              </div>
              <div class="rate-row">
                <div class="rate-col d-flex flex-col rate-col-body">
                  <h5>Investment</h5>
                  <p>30 yr fixed</p>
                </div>
                <div class="rate-col">
                  <p>6.55%</p>
                </div>
                <div class="rate-col">
                  <p>6.88%</p>
                </div>
                <div class="rate-col">
                  <p>1.45</p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </section>

      <!-- ======================== Our Mortgage Rates end ====================== -->


      <!-- ============================ loan parameters section start ========================= -->

      <section class="parameters-wrap">
        <div class="common-wrap">
          <div class="parameters d-flex flex-wrap flex-col justify-between">
            <div class="parameters-item">
                <h2>Conventional</h2>
                <p>Loan Parameters</p>
              <div class="parameters-links d-flex flex-wrap flex-col justify-between gap-10">
                <ul>
                  <li>15 yr fixed and 30 yr fixed</li>
                  <li>7 yr ARM and 10 yr ARM</li>
                  <li>Primary, second & investment homes</li>
                </ul>
                <ul>
                  <li>Max loan amount of $806,500</li>
                  <li>Minimum credit score of 700</li>
                  <li>Minimum down payment of 5%</li>
                </ul>
              </div>
            </div>
            <div class="border"></div>
            <div class="parameters-item">
                <h2>VA <span>(active military or veteran)</span></h2>
                <p>Loan Parameters</p>
              <div class="parameters-links d-flex flex-wrap flex-col justify-between gap-10">
                <ul>
                  <li>30 yr fixed</li>
                  <li>Primary residence only</li>
                  <li>Max loan amount of $4 million</li>
                </ul>
                <ul>
                  <li>Minimum credit score of 580</li>
                  <li>Minimum down payment of 0%</li>
                  <li>No owner builders</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================ loan parameters section end ========================= -->




      
     <!-- ======= Calculetor section end ======= -->
     <!-- ====== form section start ===== -->
      <?php include "./form.php";?>
     <!-- ====== form section end ===== -->

    <!-- ==== testimonial section start ==== -->
     <?php include "./testimonial.php";?>
    <!-- ==== testimonial section end ==== -->

      <!-- ====  Beginning footer section === -->
        <?php include "./footer.php";?>
        
       <!-- ====  End footer section ===-->

      

    </main>
    <script>
      function switchTab(tab) {
        document.querySelectorAll('.tab').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.form-section').forEach(section => section.classList.remove('active'));

        document.querySelector(`.tab[onclick="switchTab('${tab}')"]`).classList.add('active');
        document.getElementById(tab).classList.add('active');
      }

      function calculateBasic() {
        const loan = parseFloat(document.getElementById('loanBasic').value);
        const term = parseFloat(document.getElementById('termBasic').value);
        const rate = parseFloat(document.getElementById('rateBasic').value);

        if (!loan || !term || !rate) return alert("Please fill all fields");

        const monthlyRate = rate / 100 / 12;
        const n = term * 12;
        const monthly = loan * monthlyRate / (1 - Math.pow(1 + monthlyRate, -n));

        document.getElementById('resultBasic').innerText = `$${monthly.toFixed(0).toLocaleString()}`;
      }

      function calculateAdvanced() {
        const loan = parseFloat(document.getElementById('loanAdv').value);
        const term = parseFloat(document.getElementById('termAdv').value);
        const rate = parseFloat(document.getElementById('rateAdv').value);
        const tax = parseFloat(document.getElementById('taxAdv').value) || 0;
        const ins = parseFloat(document.getElementById('insAdv').value) || 0;
        const other = parseFloat(document.getElementById('otherAdv').value) || 0;

        if (!loan || !term || !rate) return alert("Please fill all required fields");

        const monthlyRate = rate / 100 / 12;
        const n = term * 12;
        const baseMonthly = loan * monthlyRate / (1 - Math.pow(1 + monthlyRate, -n));
        const additional = (tax + ins + other) / 12;

        const total = baseMonthly + additional;
        document.getElementById('resultAdv').innerText = `$${total.toFixed(0).toLocaleString()}`;
      }
    </script>
  </body>
</html>
