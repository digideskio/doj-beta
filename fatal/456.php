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
            <label class="form-label">If 'Yes' was selected above, enter the type of business he or she ran</label>
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
            <label class="form-label" for="who-share">If 'No' was selected above, what share of the business did he or she own?</label>
            <input id="who-share" name="ContactNumber" type="text" value="">
        </div>

    </form>



</div>

<?php include_once("../includes/footer.php"); ?>