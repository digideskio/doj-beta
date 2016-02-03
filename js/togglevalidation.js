// togglevalidation


function validateInputs() {
    $('.control-group').addClass('validation');
    $('.control-group .validation-error,.validation-summary').removeClass('js-hidden');
    $('.control-group.not-required').removeClass('validation');
}
function unvalidateInputs() {
    $('.control-group').removeClass('validation');
    $('.control-group .validation-error,.validation-summary').addClass('js-hidden');
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
