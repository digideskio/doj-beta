<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Representative's details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Representative's details</h1>

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
                    Organisation</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Victim Support NI</option>
                    <option value="Mrs">Citizens Advice</option>
                    <option value="Miss">Solicitor</option>
                    <option value="Miss">Relative of friend</option>
                    <option value="Miss">Other</option>
                </select>
            </div>

            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    Other organisation
                </label>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    Document exchange (DX) number
                </label>
                <span class="hint">If you are a solicitor, please fill in your DX number</span>
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
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