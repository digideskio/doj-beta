<?php
    $bodyclass = "";
    $documenttitle = "386 - Applicant'd details";
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
        <ul>
            <li><a href="#1">Select a title from the menu</a></li>
            <li><a href="#2">You selected 'Other' above, enter a title *** You selected a title above, you can't have more than one title</a></li>
            <li><a href="#3">Enter first name(s)</a></li>
            <li><a href="#4">Enter a surname</a></li>
            <li><a href="#5">Enter your relationship to the claimant</a></li>
            <li><a href="#8">You must tell us why you are making an application on behalf of the claimant</a></li>
        </ul>
    </div>

    <!--
            /End validation summary
     -->

    <form action="post" class="form">
        <fieldset>
            <div class="control-group" id="1">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Title</label>
                <span class="validation-error js-hidden">Select a title from the menu</span>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                    <option value="Dr">Dr</option>
                </select>
            </div>
            <div class="control-group" id="2">
                <label class="form-label" for="txt_firstname">
                    Other title
                </label>
                <span class="validation-error js-hidden">You selected 'Other' above, please provide title</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group" id="3">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    First name(s)
                </label>
                <span class="validation-error js-hidden">Enter first name(s)</span>
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group" id="4">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Surname
                </label>
                <span class="validation-error js-hidden">Enter a surname</span>
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group" id="5">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Relationship to the claimant</label>
                    <span class="validation-error js-hidden">Enter your relationship to the claimant</span>
                    <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group not-required">
                <label for="" class="form-label text">If you are not related to the claimant, provide details of why you are making an application on their behalf</label>
                <textarea name="#" id="" cols="30" rows="6"></textarea>
            </div>

            <div class="control-group not-required">
                <p class="form-label">Do you have enduring power of attorney?</p>
                <span class="hint-text">This gives you permission of act on the claimant's behalf</span>
                <div class="form-group inline">
                  <label class="block-label" for="radio-indent-1">
                    <input id="radio-indent-1" name="radio-indent-group" value="L" type="checkbox">
                    Yes, I have enduring power of attorney
                  </label>
                </div>
            </div>

            <div class="control-group" id="8">
                <label for="" class="form-label">If you do not have enduring power of attorney, provide details of why you are making an application on behalf of the claimant</label>
                <span class="validation-error js-hidden">You must tell us why you are making an application on behalf of the claimant</span>
                <textarea name="#" id="" cols="30" rows="6"></textarea>
            </div>

        </fieldset>



        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="14-applicant-contact.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>
<?php include_once("../includes/footer.php"); ?>
<script src="/js/togglevalidation.js"></script>