<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Step 2";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Are you applying on someone else's behalf?</h1>
    <!-- <p class="text">If you are claiming for an injury to your person select criminal injury.</p>

    <p class="text">If you are claiming for damage to property or vehicle select criminal damage.</p> -->
    <p class="ul">Select 'I'm applying for someone else' if</p>

    <ul>
      <li>the claimant is under 18 years old or</li>
      <li>the claimant is unable to handle their own affairs</li>
    </ul>

<form action="post" class="form">
    <fieldset>
        <div class="form-group form-group-compound">
          <label class="block-label" for="radio-indent-1" data-target="myself">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            I'm applying for myself or a client
          </label>
          <label class="block-label" data-target="someone-else" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio" aria-controls="permit-form">
            I'm applying for someone else
          </label>
        </div>
    </fieldset>

    <div class="button-group">
        <a onclick="history.go(-1);" class="btn btn-secondary arrowl">Back</a> <a href="11-claimant-details.php" class="btn btn-primary arrowr">Next</a>
    </div>


</form>



</div>

<?php include_once("../includes/footer.php"); ?>