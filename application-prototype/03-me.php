<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Step 2";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Are you applying on someone else's behalf?</h1>
    <!-- <p class="text">If you are claiming for an injury to your person select criminal injury.</p>

    <p class="text">If you are claiming for damage to property or vehicle select criminal damage.</p> -->

<form action="post">
    <fieldset>
        <div class="form-group form-group-compound">
          <label class="block-label" for="radio-indent-1">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            I'm applying for myself
          </label>
          <label class="block-label" data-target="permit-form" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio" aria-controls="permit-form">
            I'm applying for someone else
          </label>
        </div>
    </fieldset>

    <div class="button-group">
        <!-- <a href="#0" class="btn btn-secondary arrowl">Back</a> --> <a href="02.php" class="btn btn-primary arrowr">Next</a>
    </div>
</form>



</div>

<?php include_once("../includes/footer.php"); ?>