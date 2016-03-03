<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Previous applications";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
  <h1>Previous criminal injury applications</h1>
  <form action="post" class="form">
    <div class="control-group" id="1">
      <label for="textarea" class="form-label"> Tell us about any previous applications for compensation. <br>Include the date of incident(s) and any reference number(s)</label>
      <span class="validation-error js-hidden"></span>
      <textarea name="textarea" id="textarea" cols="30" rows="15"></textarea>
    </div>
    <div class="button-group">
        <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
      </div>
  </form>


  



</div>

<?php include_once("../includes/footer.php"); ?>