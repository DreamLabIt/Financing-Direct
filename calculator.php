<section class="calculator-section">
   <div class="common-wrap">
      <div class="calculator-container">
         <div class="calculator-header">
            <h2>MORTGAGE PAYMENT CALCULATOR</h2>
            <p>Calculate your monthly payment for different loan scenarios</p>
         </div>
         <div class="calculator-body">
            <div class="tabs d-flex justify-end flex-wrap">
               <div class="tabs-right d-flex gap-10">
                  <button class="tab active" onclick="switchTab('basic')">BASIC</button>
                  <button class="tab" onclick="switchTab('advanced')">ADVANCED</button>
               </div>
            </div>
            <!-- BASIC TAB -->
            <div id="basic" class="basic-tab calculator-form d-flex gap-20 active">
               <div class="form-inner d-flex item-end flex-wrap gap-20">
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
                     <button class="calculate-btn btn btn-primary" onclick="calculateBasic()">CALCULATE</button>
                  </div>
               </div>
               <span></span>
               <div class="output">
                  <div class="output-label">Monthly Payment</div>
                  <div class="output-value" id="resultBasic">$1,663</div>
               </div>
            </div>

            <!-- ADVANCED TAB -->
            <div id="basic" class="form-section d-flex  gap-20" style="display: none;">
               <div class="form-inner d-flex item-end flex-wrap gap-20">
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
                     <button class="calculate-btn btn btn-primary" onclick="calculateBasic()">CALCULATE</button>
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
   </div>
</section>