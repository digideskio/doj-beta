<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Step 3";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>What is your relationship to the victim?</h1>
    <form action="post">
        <fieldset>
            <div class="form-group form-group-compound">
              <label class="block-label" for="radio-indent-1">
                <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
                I work for Victim Support NI
              </label>
              <label class="block-label" for="radio-indent-2">
                <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
                I work for Citizens Adivce
              </label>
              <label class="block-label" for="radio-indent-3">
                <input id="radio-indent-3" name="radio-indent-group" value="Q" type="radio">
                I am a Solicitor
              </label>
              <label class="block-label" data-target="other-field" for="radio-indent-4">
                <input id="radio-indent-4" name="radio-indent-group" value="Q" type="radio">
                I am a relative or friend
              </label>
              <label class="block-label" data-target="other-field" for="radio-indent-5">
                <input id="radio-indent-5" name="radio-indent-group" value="Q" type="radio">
                Other
              </label>
              <div class="js-hidden" id="other-field">
                  <div class="control-group">
                      <label class="form-label" for="txt_firstname">
                          <img src="/images/required.gif" class="required" alt="Required information">
                          Your relationship to the victim
                      </label>
                      <!-- <span class="validation-error">name is required</span> -->
                      <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
                  </div>
                  <div class="control-group">
                      <label class="form-label" for="rel">
                        <img src="/images/required.gif" class="required" alt="Required information">
                          Provide details of why are making an application on behalf of this person
                      </label>
                      <textarea name="rel" id="rel" cols="30" rows="5"></textarea>
                  </div>
              </div>

            </div>
        </fieldset>

        <div class="button-group">
            <a href="02.php" class="btn btn-secondary arrowl">Back</a> <a href="04.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>