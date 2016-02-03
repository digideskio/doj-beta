<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Representative's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Representative's details</h1>

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
            <li><a href="#5">Select an organisation</a></li>
            <li><a href="#6">You selected 'Other' above, enter an organisation</a></li>
        </ul>
    </div>

    <!--
            /End validation summary
     -->

    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>

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
                <span class="validation-error js-hidden">You selected 'Other' above, enter a title *** You selected a title above, you can't have more than one title</span>
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
                    Organisation</label>
                <span class="validation-error js-hidden">Select an organisation</span>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Victim Support NI</option>
                    <option value="Mrs">Citizens Advice</option>
                    <option value="Miss">Solicitor</option>
                    <option value="Miss">Relative or friend</option>
                    <option value="Miss">Other</option>
                </select>
            </div>

            <div class="control-group" id="6">
                <label class="form-label" for="txt_firstname">
                    Other organisation / name of firm
                </label>
                <span class="validation-error js-hidden">You selected 'Other' above, enter an organisation</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group not-required">
                <label class="form-label" for="txt_firstname">
                    Document exchange (DX) number
                </label>
                <span class="hint">If you are a solicitor, please fill in your DX number</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group not-required">
                <label class="form-label" for="txt_firstname">
                    Your reference number
                </label>
                <span class="hint">If you want us to give a reference number when we write to you</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>




        </fieldset>



        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="07-rep-address.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>
<script src="/js/togglevalidation.js"></script>