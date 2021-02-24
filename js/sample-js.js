$(document).ready(function(){

  $('#sliderOne').on('input', function() {
    slider = $('#sliderOne').val();
    output1 = $('#labelMoneyOne');
    output1.html(slider);
    outLabelSlide1 = slider;
    outputLabelTrepay = $('#labelTrepay');
    outputLabelTrepay.val('N'+outLabelSlide1);
  });

  $('#sliderTwo').on('input', function() {
    slider = $('#sliderTwo').val();
    output1 = $('#labelMoneyTwo');
    output1.html(slider);
    outLabelSlide2 = slider;
    outputLabelMrepay = $('#labelMrepay');
   
    outputLabelMrepay.val("N"+outLabelSlide2);
  });

  $('.custom-file > .custom-file-input').change(function(){
    $name = $(this).val();
    $input = '#'+$(this).attr('id');
    $length = $name.length;
    $newName = $name.substring(12, $length);
    $($input).siblings('label').html($newName);
  })

    function update() {
      var interest = 0.045;
      var amount = $("#amount").val();
      var duration = $("#duration").val();
      
      var repayment = parseInt(amount) + (parseInt(amount) * interest * parseInt(duration));

      var total_repayment = parseFloat(repayment).toLocaleString();
      
      var monthly_repayment = parseFloat((parseInt(repayment)/parseInt(duration)).toFixed(2)).toLocaleString();

      //console.log(total_repayment);
      $("#total_repayment").val("N"+ total_repayment);
      $("#monthly_repayment").val("N" + monthly_repayment);

    }

    $("#slider1").slider({
        max:2000000,
        min:50000,
        step:10000,
        slide: function(event, ui) {   
            $("#amount").val(ui.value);
            $("#amount_view").html('N' + parseFloat(ui.value).toLocaleString());
            update();
        }
    })
    .slider("float");
    //$( "#amount" ).val( "$" + $( "#slider1" ).slider( "value" ) );

    $("#slider2").slider({
        max: 12,
        min: 3,
        step:1,
        slide: function(event, ui) {   
            $("#duration").val(ui.value);
            $("#duration_view").html(ui.value + ' Months');
            update();
        }
    })
    .slider("pips", {
      rest: "pip",
      suffix: "months"
  });

});




