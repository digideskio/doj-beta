<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Type of claimant";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>What type of application are you making?</h1>
    <p class="text">The claimant is the person claiming compensation.</p>
    <p class="text">I'm applying:</p>

<form action="post" class="form">
    <fieldset>
        <div class="form-group form-group-compound">
          <label class="block-label" for="radio-indent-1" data-target="myself">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            for an individual claimant
          </label>
          <label class="block-label" data-target="someone-else" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
            for a group of claimants
          </label>
          <label class="block-label" data-target="someone-else" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
            on behalf of a company
          </label>
        </div>
    </fieldset>

    <div class="button-group">
        <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
    </div>


</form>



</div>

<?php include_once("../includes/footer.php"); ?>