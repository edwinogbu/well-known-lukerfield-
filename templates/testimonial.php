<section id="loan">
  <div class="dark-overlay section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="slide-content">
            <?php 

                if(isset($success)){
                  echo "<div class='alert alert-success'>$success</div>";
                }elseif(isset($notSent)){
                  echo "<div class='alert alert-danger'>$notSent</div>";
                }


             ?>
            <form action="<?php echo htmlentities('index.php#loan') ?>" method="POST" enctype='multipart/form-data'>
              <div class="slidecontainer p-5">
                <div class="form-group row">
                  <p class="slider-label w-100">How much do you want?:</p>
                   <div class="col-sm-9">
                     <input type="range" name="how_much" step="50000" min="50000" id="sliderOne" max="2000000" class="slider">
                   </div>
                   <label class="col-sm-3 col-form-label">
                    N
                    <span id="labelMoneyOne">
                      <script>
                        var number = parseFloat(1050000).toLocaleString("en-GB-u-ca-islamic", {minimumFractionDigits: 2, maximumFractionDigits: 2})
                        document.write(number);
                      </script> 
                    </span>
                  </label>
                 </div>
                 <hr class="mt-5 mb-5">
                 <div class="form-group row">
                  <p class="slider-label w-100">How long do you want it for?:</p>
                   <div class="col-sm-9">
                     <input type="range" min="1" step="1" name="how_long" id="sliderTwo" max="12"  class="slider">
                   </div>
                   <label class="col-sm-3 col-form-label"><span id="labelMoneyTwo">6</span> Months</label>
                 </div>
                 <hr class="mt-5 mb-5">
                 <div class="row data-form">
                    <div class="col-sm-6">
                      <label for="labelTrepay" class="data-form-label">Total Repayment</label>
                      <input type="text" name="total_repayment" value="N1, 128, 750.00" id="labelTrepay" class="money-value form-control">
                    </div>
                    <div class="col-sm-6">
                      <label for="labelMrepay" class="data-form-label">Monthly Repayment</label>
                      <input type="text" name="monthly_repayment" value="N188, 125.00" id="labelMrepay" class="money-value form-control">
                    </div>
                    
                  </div>
                  

       
            </div>
          </div>
          <!-- END OF SLIDE CONTENT --> 
              <div class="row data-form no-gutters" id="formCollapse">
                <div class="col-sm-12 bg-dark pt-4">
                  <h4 class="text-center text-white mb-4">Get a Loan</h4>
                  <hr class="mt-5 mb-5">
                </div>
                <div class="col-sm-3 bg-dark pr-3 pl-3 pt-5">
                  <h5 class="text-center text-white mb-3">Download the forms below</h5>
                  <a class="btn btn-light btn-dwn text-dark">
                    Lukefield Account Opening Form Loan 
                    <span class="badge badge-light">
                      <i class="fas fa-download"></i>
                    </span>
                  </a> 
                  <a class="btn btn-light btn-dwn text-dark">
                    Lukefield Guarantors-Form
                    <span class="badge badge-light">
                      <i class="fas fa-download"></i>
                    </span>
                  </a>
                  <a class="btn btn-light btn-dwn text-dark">
                    Personal Loan Application Form
                    <span class="badge badge-light">
                      <i class="fas fa-download"></i>
                    </span>
                  </a>
                </div>
                <div class="col-sm-9 bg-dark pr-3 pl-3 pt-5 pb-5">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="first_name" class="form-control reduce-p" placeholder="Firstname">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="last_name" class="form-control reduce-p" placeholder="Lastname">
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="email" name="email" class="form-control reduce-p" placeholder="Email">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="phone" class="form-control reduce-p" placeholder="Phone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="bvn" class="form-control reduce-p" placeholder="BVN">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="salary" class="form-control reduce-p" placeholder="Salary">
                    </div>
                  </div> 
                
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file"  name="passport" class="custom-file-input" id="validatedCustomFile1" value="" required>
                          <label class="custom-file-label" for="validatedCustomFile1" id="pasportLabel">Upload Passport Photo*</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file" name="validId" class="custom-file-input" id="validatedCustomFile2" required>
                          <label class="custom-file-label" for="validatedCustomFile2">Upload Valid Id*</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file" placeholder="Upload" name="utitity" class="custom-file-input" id="validatedCustomFile3" required>
                          <label class="custom-file-label" for="validatedCustomFile3">Upload Utility Bill*</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file" name="salary" class="custom-file-input" id="validatedCustomFile4" required>
                          <label class="custom-file-label" for="validatedCustomFile4">Upload Salary Account Statement*</label>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file" name="account" class="custom-file-input" id="validatedCustomFile5" required>
                          <label class="custom-file-label" for="validatedCustomFile5">Account Opening Form* </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="custom-file">
                          <input type="file" name="guarantor" class="custom-file-input" id="validatedCustomFile6" required>
                          <label class="custom-file-label" for="validatedCustomFile6">Guarantors Form*</label>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="custom-file">
                          <input type="file" name="personalLoan" class="custom-file-input" id="validatedCustomFile7" required>
                          <label class="custom-file-label" for="validatedCustomFile7">Personal Loan Form*</label>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-sm-12">
                  <input type="submit" name="loanUpload" value="Submit Form" class="btn btn-submit btn-text mt-4 mb-4 btn-block">
                  <div class="text-center">
                    <a href="#" style="color:yellow;font-weight: bold;">Terms &amp; Condition Apply</a>
                  </div>
                </div>
              </div>
              
              <!-- <a href="#formCollapse" data-toggle="collapse" id="formApply"  class="btn btn-data-form btn-text btn-block">
                Click to apply for loan
                 <span class="badge badge-light">
                   <i class="fas fa-arrow-down"></i>
                 </span>
              </a> -->
              
          </form>
        </div>
        <!-- END OF COLUMN 12 -->
      </div>
    </div>
  </div>
</section>

<!--// Testimonial Area