<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Victim's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Claimant's details</h1>

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
            <!-- <li><a href="#5">Other surnames</a></li> -->
            <li><a href="#6">Select a marital status</a></li>
            <li><a href="#7">Select a gender</a></li>
            <li><a href="#8">Enter a date of birth ** Date of birth must be a date in the past</a></li>
            <!-- <li><a href="#9">National Insurance number</a></li> -->
            <!-- <li><a href="#10">Occupation</a></li> -->
        </ul>
    </div>

    <!--
            /End validation summary
     -->

    <p class="text">The claimant is the person claiming compensation.</p>

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
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    Other surnames
                </label>
                <span class="hint">Maiden name or other surnames you have used</span>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group" id="6">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Marital status</label>
                    <span class="validation-error js-hidden">Select a marital status</span>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Single</option>
                    <option value="Mrs">Married</option>
                    <option value="Miss">Widowed</option>
                    <option value="Ms">Divorced</option>
                    <option value="Dr">Separated</option>
                </select>
            </div>
            <div class="control-group" id="7">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Gender</label>
                <span class="validation-error js-hidden">Select a gender</span>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Female</option>
                    <option value="Mrs">Male</option>
                    <option value="Miss">Other</option>
                </select>
            </div>
            <fieldset class="control-group" id="8"><label class="form-label"><img src="/images/required.gif" alt="Indicates a required field"> Date of birth</label>
                <span class="validation-error js-hidden">Enter a date of birth ** Date of birth must be a date in the past</span><div class="form-date"><div class="form-group"><label for="dob-day">Day</label><input autocomplete="Off" class="input-small" id="DobDay" maxlength="2" name="DobDay" placeholder="DD" type="text" value=""></div><div class="form-group"><label for="dob-month">Month</label><input autocomplete="Off" class="input-small" id="DobMonth" maxlength="2" name="DobMonth" placeholder="MM" type="text" value=""></div><div class="form-group"><label for="dob-year">Year</label><input autocomplete="Off" class="input-small" id="DobYear" maxlength="4" name="DobYear" placeholder="YYYY" type="text" value=""></div></div></fieldset>

            <div class="control-group not-required">
                <label class="form-label" for="txt_firstname">
                    National Insurance number
                </label>
                <span class="hint">It's on your National Insurance card, benefit letter, payslip or P60. <br>For example, 'QQ123456C'</span>
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group not-required">
                <label class="form-label" for="txt_firstname">
                    Occupation
                </label>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>
        </fieldset>



        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-address.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>
<script src="/js/togglevalidation.js"></script>