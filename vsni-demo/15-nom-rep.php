<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Nominate a representative";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Do you want to nominate a representative?</h1>
    <p class="text">
      If you choose someone to represent you we will send all correspondence (letters and so on) direct to them. You are still responsible for the information your representative gives us.
    </p>
    <form action="post">
        <fieldset>
            <div class="form-group form-group-compound">
              <label class="block-label" for="radio-indent-1">
                <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
                Yes, I want to nominate a representative
              </label>
              <label class="block-label" for="radio-indent-2">
                <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
                No
              </label>

            </div>
        </fieldset>

        <div class="button-group">
            <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="16-rep-details.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>