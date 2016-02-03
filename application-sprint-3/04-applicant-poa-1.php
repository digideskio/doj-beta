<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Enduring power of attorney";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Do you have enduring power of attorney?</h1>

    <p class="text">Enduring power of attorney gives you permission to act on the claimant's behalf.</p>

    <form action="post">
        <div class="control-group">

              <span class="hint text"></span>
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



        <div class="button-group js-hidden" id="yes">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-poa-2-yes.php" class="btn btn-primary arrowr">Next</a>
        </div>

        <div class="button-group js-hidden" id="no">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-poa-2-no.php" class="btn btn-primary arrowr">Next</a>
        </div>


    </form>



</div>

<?php include_once("../includes/footer.php"); ?>