<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Relationship to the claimant";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Relationship to the claimant</h1>

    <p class="text">We need more details about your relationship to the claimant.</p>

    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>

    <form action="post">
        <fieldset>
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    What is your relationship to the claimant?
                </label>
<!--                 <span class="text hint">If you selected 'Other" from the above selection, please specify the relationship to the claimant</span>
 -->                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <div class="control-group">
              <label class="text form-label" for="ddl_title">
                  <img src="/images/required.gif" class="required" alt="Required information">
                  As you are not related to the victim, provide details of why you are making an application on their behalf</label>
                  <textarea name="" id="" cols="30" rows="7"></textarea>
            </div>

        </fieldset>

        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-poa-1.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>