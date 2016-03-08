// togglevalidation


function validateInputs() {
    $('.control-group').addClass('validation');
    $('.control-group.not-required').removeClass('validation');
    $('.js-hidden').css('display', 'block');
}
function unvalidateInputs() {
    $('.control-group').removeClass('validation');
    $('.js-hidden').css('display', 'none');
}
    $(document).keypress(function(e) {
      if(e.which == 118) {
        // v pressed
        validateInputs();
      }
    });

    $(document).keypress(function(e) {
      if(e.which == 117) {
        // u pressed
        unvalidateInputs();
      }
    });
