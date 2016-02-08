<?php
    $bodyclass = "";
    $documenttitle = "nidirect &middot; login";
    include_once("../includes/header-app-nida.php");
?>

<div class="content container">




<h1>Do you have an nidirect account?</h1>







<form action="/Home/Index" class="form loginform" method="post">    <fieldset id="login">

        <legend>I have an account</legend>

        <input name="__RequestVerificationToken" type="hidden" value="zWjIOyzgPzbGuv76H4MA3mfiAQIFm5cJ9MUXoKXoXdAuOHKo-d69COIAm36iZqGGB8m9A5W5sDb2bXgZjA4lXJBI3F8bvVt4KUmI308GRmM1">

        <div>
            <img src="/images/required.gif" alt="Required"> Indicates a required field
        </div>

        <div class="control-group ">
            <label class="form-label" for="Username"><img alt="Required information" src="/Images/required.gif"> Email address </label>

            <input class="text-box single-line" id="Username" name="Username" type="text" value="g.dempsey@kainos.com">
        </div>

        <div class="control-group ">
            <label class="form-label" for="Password"><img alt="Required information" src="/Images/required.gif"> Password </label>

            <input autocomplete="off" id="Password" name="Password" type="password" value="password">
        </div>

        <div class="button-div">
            <a href="07-portal-empty.php" class="btn btn-primary">Sign in</a>
        </div>

        <p>
            <a href="/ChangePassword/Index" id="ChangeMyPasswordButton" title="Change or forgotten password." class="">Change my password</a><br>
            <a href="/Home/ManagePersonalDetails" title="Change in circumstances (name, address)." class="">Manage my account details</a>
        </p>
    </fieldset>
    <fieldset id="register">
        <legend>I need an account</legend>
        <div>
            <a href="03-register.php" class="btn btn-success">Create account</a>
        </div>
    </fieldset>
</form>
        </div>

<?php include_once("../includes/footer.php"); ?>