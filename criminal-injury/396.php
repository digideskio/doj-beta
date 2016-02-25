<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Injuries as a result of the incident";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Injuries as a result of the incident</h1>
    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


    <form action="post" class="form">

        <div class="control-group">
          <label for="names" class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> What injuries were received?</label>
          <textarea name="names" id="names" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Has there been a full recovery?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group">
          <label for="names" class="form-label">If 'No' was selected above, what are the current injuries?</label>
          <textarea name="names" id="names" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is treatment still being received for injuries?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Have the injuries left any permanent scarring?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was a hospital visit required?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
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