<?php
    $bodyclass = "";
    $documenttitle = "Claiming for funeral expenses | Apply for compensation | nidirect";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Claiming for funeral expenses</h1>
    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


    <form action="post" class="form">
        <div class="control-group" id="3">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Are you responsible for the funeral costs?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="vat-1" data-target="yes">
                <input id="vat-1" name="group-1" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="vat-2" data-target="no">
                <input id="vat-2" name="group-1" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div id="yes" class="js-hidden">
            <div class="control-group" id="2">
                <label for="PreIncidentValueInput" class="form-label">Enter the total cost of the funeral</label> 
                <span class="add-on add-on-valid">£</span>
                <input class="prepended-input" name="PreIncidentValueInput" type="text" value="">
            </div>

            <div class="control-group" id="3">
                <label for="PreIncidentValueInput" class="form-label">How much of the total cost have you or will you be paying?</label> 
                <span class="hint-text">If paid already, please provide proof of payment</span>
                <span class="add-on add-on-valid">£</span>
                <input class="prepended-input" name="PreIncidentValueInput" type="text" value="">
            </div>

            <div class="control-group" id="4">
            <label for="n4" class="form-label text"> If you are not paying all the costs, please give the name(s) and address(es) of the person(s) or body who is paying the balance of the costs</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="n4" id="n4" cols="30" rows="5"></textarea>
        </div>
        </div>

        <div class="button-group">
          <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>