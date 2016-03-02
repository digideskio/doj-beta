<?php
    $bodyclass = "";
    $documenttitle = "Deceased’s's employment details | Apply for compensation | nidirect";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Deceased's employment details</h1>
    
    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


    <form action="post" class="form">
        <div class="control-group" id="1">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was the deceased self-employed or were earnings in the form of fees or a share of profits?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="">
                <input id="" name="" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <div class="control-group" id="2">
            <label class="form-label">If 'Yes' was selected above, enter the type of business they ran</label>
            <input id="ContactNumber" name="ContactNumber" type="text" value="">
        </div>
        <div class="control-group" id="3">
            <p class="form-label text"> Was he or she the sole owner of the business?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="sole-yes">
                <input id="sole-yes" name="sole-owner" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="sole-no">
                <input id="sole-no" name="sole-owner" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <div class="control-group" id="4">
            <label class="form-label" for="who-share">If 'No' was selected above, what share of the business did they own?</label>
            <input id="who-share" name="ContactNumber" type="text" value="">
        </div>
        <div class="control-group" id="5">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was the deceased in employment during the two years before their death?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="emp-yes">
                <input id="emp-yes" name="emp-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="emp-no">
                <input id="emp-no" name="emp-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <div class="control-group" id="6">
            <label for="emp-details" class="form-label text"> If ‘Yes’ was selected above, enter the names and addresses of the deceased’s employers at the time of death</label>
            <span class="validation-error js-hidden"></span>
            <span class="hint-text">Include the start and end dates of employment</span>
            <textarea name="emp-details" id="emp-details" cols="30" rows="5"></textarea>
        </div>
        <div class="control-group" id="7">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is any pension or gratuity payable by the deceased's employer?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="grat-yes">
                <input id="grat-yes" name="grat-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="grat-no">
                <input id="grat-no" name="grat-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <div class="button-group">
          <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>

    </form>



</div>

<?php include_once("../includes/footer.php"); ?>