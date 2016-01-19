<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Applicant's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Applicant's details</h1>

    <form action="post">
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
                    Your relationship to the victim</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">I work for Victim Support NI</option>
                    <option value="Mrs">I work for Citizens Advice</option>
                    <option value="Miss">I am a Solicitor</option>
                    <option value="Miss">Relative of friend</option>
                    <option value="Miss">Other</option>
                </select>
            </div>

            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    Other from relationship
                </label>
                <span class="text hint">If you selected 'Other" from the above selection, please specify the relationship to the victim</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
              <label class="text form-label" for="ddl_title">
                  If you are not related to the victim, provide details of why you are making an application on their behalf</label>
                  <textarea name="" id="" cols="30" rows="7"></textarea>
            </div>

            <div class="control-group">
              <label for="" class="form-label">
                Do you have enduring power of attorney?
              </label>
              <span class="hint text">This gives you permission to act on the person's behalf</span>
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

            <div class="js-hidden" id="yes">
              <div class="control-group">
                <label class="text form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information"> Provide proof of enduring power of attorney</label>
                    <textarea name="" id="" cols="30" rows="7"></textarea>
              </div>
            </div>

            <div class="js-hidden" id="no">
              <div class="control-group">
                <label class="text form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information"> Tell us why you need to apply on behalf of the victim</label>
                    <textarea name="" id="" cols="30" rows="7"></textarea>
              </div>
            </div>






        </fieldset>



        <div class="button-group">
            <a href="03.php" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-address.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>