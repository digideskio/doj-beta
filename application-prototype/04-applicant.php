<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Applicant's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Applicant's details</h1>

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
                    Your relationship to the claimant</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">I work for Victim Support NI</option>
                    <option value="Mrs">I work for Citizens Advice</option>
                    <option value="Miss">I am a Solicitor</option>
                    <option value="Miss">Relative</option>
                    <option value="Friend">Friend</option>
                    <option value="Miss">Other</option>
                </select>
            </div>

        </fieldset>



        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-relationship.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>