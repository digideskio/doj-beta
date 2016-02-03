<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Applicant's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Applicant's details</h1>

    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>

    <!--
            Validation summary should only be displayed following server side validation.
            It is displayed here to associate error messages with inputs
    -->

    <div class="validation-summary js-hidden">
        <h2><img src="/images/error-icon.png" alt=""> Please review and correct the following errors</h2>
        <p>Make sure you:</p>
        <ul>
            <li>Enter a first name</li>
            <li>Enter a valid date of birth</li>
        </ul>
    </div>

    <!--
            /End validation summary
     -->

    <form action="post" class="form">
        <fieldset>
            <div class="control-group">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Title</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                    <option value="Dr">Dr</option>
                </select>
            </div>
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    Other title
                </label>
                <span class="validation-error js-hidden">You selected 'Other' above, please provide title</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    First name(s)
                </label>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Surname
                </label>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Relationship to the claimant</label>
                    <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
                <label for="" class="form-label text">If you are not related to the claimant, provide details of why you are making an application on their behalf</label>
                <textarea name="#" id="" cols="30" rows="6"></textarea>
            </div>

            <div class="control-group">
                <p class="form-label">Do you have enduring power of attorney?</p>
                <span class="hint-text">This gives you permission of act on the claimant's behalf</span>
                <div class="form-group inline">
                  <label class="block-label" for="radio-indent-1" data-target="yes">
                    <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
                    Yes
                  </label>
                  <label class="block-label" data-target="no" for="radio-indent-2">
                    <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio" aria-controls="permit-form">
                    No
                  </label>
                </div>
            </div>

            <div class="control-group">
                <label for="" class="form-label">If you do not have enduring power of attorney, provide details of why you are making an application on behalf of the claimant</label>
                <textarea name="#" id="" cols="30" rows="6"></textarea>
            </div>

        </fieldset>



        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-relationship.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>
<?php include_once("../includes/footer.php"); ?>

<script>
function validateInputs() {
    $('.control-group').addClass('validation');
    $('.control-group .validation-error,.validation-summary').removeClass('js-hidden');
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
</script>