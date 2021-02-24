$(document).ready(function(){

  let principal = 1050000;
  let month = 6;
  let outputLabelTrepay = $('#labelTrepay');
  let outputLabelMrepay = $('#labelMrepay');
  let totalRepaymentInput = $('#labelTrepay');
  let monthlyRepaymentInput = $('#labelMrepay');
  let output1 = $('#labelMoneyOne');
  let output2 = $('#labelMoneyTwo');
  
 

  $('#sliderOne').on('input', function() {
    principal = $('#sliderOne').val();
    output1.html(parseFloat(principal).toLocaleString("en-GB-u-ca-islamic", {minimumFractionDigits: 2, maximumFractionDigits: 2})); 
   
  });


  $('#sliderTwo').on('input', function() {
   month = $('#sliderTwo').val();
   output2.html(month);
   rate = 0.15;
   // TOTAL REPAYMENT CALCULATION
   interest = principal * rate * month/12;
   totalRepayment = parseFloat(principal) + interest;
   outputTotalRepayment = parseFloat(totalRepayment).toLocaleString("en-GB-u-ca-islamic", {minimumFractionDigits: 2, maximumFractionDigits: 2});
   outputLabelTrepay.val('N'+outputTotalRepayment);

   // TOTAL REPAYMENT CALCULATION
   monthlyRepayment = totalRepayment/month;
   outputMonthly = parseFloat(monthlyRepayment).toLocaleString("en-GB-u-ca-islamic", {minimumFractionDigits: 2, maximumFractionDigits: 2});
   outputLabelMrepay.val("N"+ outputMonthly);
  });
  
  $('.custom-file > .custom-file-input').change(function(){
    $name = $(this).val();
    $input = '#'+$(this).attr('id');
    $length = $name.length;
    $newName = $name.substring(12, $length);
    $($input).siblings('label').html($newName);
  })

});


