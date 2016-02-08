<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; What are you claiming for?";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>What are you claiming for?</h1>
    <p class="text">If you are claiming for an injury to your person select criminal injury.</p>

    <p class="text">If you are claiming for damage to property or vehicle select criminal damage.</p>

<form class="form" action="post">
    <fieldset>
        <div class="form-group form-group-compound">
          <label class="block-label" for="radio-indent-1">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            Criminal injury
          </label>
          <label class="block-label" data-target="permit-form" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio" aria-controls="permit-form">
            Criminal damage
          </label>
        </div>
    </fieldset>

    <div class="button-group">
        <a href="10.php" class="btn btn-primary arrowr">Next</a>
    </div>
</form>



</div>

<?php include_once("../includes/footer.php"); ?>