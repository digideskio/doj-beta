<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Criminal convictions";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
  <h1>Extra information</h1>

  <form action="post" class="form">
    <div class="control-group" id="1">
            <label for="ExtraInfo" class="form-label text"> The information you have entered should be enough for us to begin to consider your claim. If you want to add anything else to the information you have already given, please do so in the space below</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="ExtraInfo" id="ExtraInfo" cols="30" rows="15"></textarea>
        </div>

    <div class="button-group">
        <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
      </div>
  </form>


  



</div>

<?php include_once("../includes/footer.php"); ?>