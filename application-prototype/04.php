<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Victim's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Claimant's details</h1>

    <p class="text">The claimant is the person claiming compensation.</p>

    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


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
                    <img src="/images/required.gif" class="required" alt="Required information">
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
                <label class="form-label" for="txt_firstname">
                    Other surnames
                </label>
                <span class="hint">Maiden name or other surnames you have used</span>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>
            <div class="control-group">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Marital status</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Single</option>
                    <option value="Mrs">Married</option>
                    <option value="Miss">Widowed</option>
                    <option value="Ms">Divorced</option>
                    <option value="Dr">Separated</option>
                </select>
            </div>
            <div class="control-group">
                <label class="form-label" for="ddl_title">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    Gender</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Female</option>
                    <option value="Mrs">Male</option>
                    <option value="Miss">Other</option>
                </select>
            </div>
            <fieldset><label class="form-label"><img src="/images/required.gif" alt="Indicates a required field"> Date of birth</label><div class="form-date"><div class="form-group"><label for="dob-day">Day</label><input autocomplete="Off" class="input-small" id="DobDay" maxlength="2" name="DobDay" placeholder="DD" type="text" value=""></div><div class="form-group"><label for="dob-month">Month</label><input autocomplete="Off" class="input-small" id="DobMonth" maxlength="2" name="DobMonth" placeholder="MM" type="text" value=""></div><div class="form-group"><label for="dob-year">Year</label><input autocomplete="Off" class="input-small" id="DobYear" maxlength="4" name="DobYear" placeholder="YYYY" type="text" value=""></div></div></fieldset>

            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    National Insurance number
                </label>
                <span class="hint">It's on your National Insurance card, benefit letter, payslip or P60. <br>For example, 'QQ123456C'</span>
                <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
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