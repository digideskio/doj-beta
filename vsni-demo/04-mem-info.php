<?php
    $bodyclass = "";
    $documenttitle = "nidirect &middot; login";
    include_once("../includes/header-app-nida.php");
?>

<div class="content container">




<h1>Set memorable information</h1>







<form action="/Registration/MemorableInformation" class="form" method="post">    <fieldset>
        <p>The service you are signing into requires extra security.</p>
        <p>
            Choose a memorable word between 6 and 15 characters.
            In future when you log in, you will be asked to provide a random selection of characters from this word.
        </p>
        <p>
            You will also be asked to verify your identity at an <a href="/Registration/IdentityVerificationLink" target="_blank" class="elink">identity verification centre.</a>
        </p>
        <input name="__RequestVerificationToken" type="hidden" value="ilhYw9bW4i9sScXS9JWVg-ns1ZCxll3vQZior27VcxcJdeNRLmgTVtfAVHzy7ljsaiNFOpJJhjnbay_qhnBUf0Eaj2Y2d5VA65VO__6Bj601">

        <div>
            <img src="/images/required.gif" alt="Required"> Indicates a required field
        </div>

        <div class="control-group ">
            <label class="form-label" for="MemorableInformation"><img alt="Required information" src="/images/required.gif"> Memorable word </label>

            <input id="MemorableInformation" maxlength="15" name="MemorableInformation" type="password">
        </div>

        <div class="control-group ">
            <label class="form-label" for="ConfirmMemorableInformation"><img alt="Required information" src="/images/required.gif"> Re-enter memorable word </label>

            <input id="ConfirmMemorableInformation" maxlength="15" name="ConfirmMemorableInformation" type="password">
        </div>
    </fieldset>
    <div class="button-div">
            <a class="btn btn-secondary arrowl" href="03-register.php" id="BackButton">Back</a> <a href="05-address.php" class="btn btn-primary arrowr" value="Next">Next</a>

    </div>
</form>
        </div>

<?php include_once("../includes/footer.php"); ?>
