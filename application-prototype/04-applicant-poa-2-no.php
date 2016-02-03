<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Enduring power of attorney";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Enduring power of attorney</h1>

<!--     <p class="text">Enduring power of attorney gives you permission to act on the claimant's behalf</p>
 -->
    <form action="post">
          <div class="control-group">
            <label class="text form-label" for="ddl_title">
                <img src="/images/required.gif" class="required" alt="Required information"> Tell us why you need to apply on behalf of the claimant</label>
                <textarea name="" id="" cols="30" rows="7"></textarea>
          </div>


        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="04-applicant-address.php" class="btn btn-primary arrowr">Next</a>
        </div>

    </form>



</div>

<?php include_once("../includes/footer.php"); ?>