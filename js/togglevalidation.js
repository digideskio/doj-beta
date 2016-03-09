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

//build top validation summary using the error messages already on the page

$('.validation-error').each(function() {
  var MessageString = $(this).text();
  var anchor = $(this).parent('[id]').attr('id');
  $('.validation-summary ul').append('<li><a href="#' + anchor + '">' + MessageString + '</a></li>');
});
  