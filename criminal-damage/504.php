<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Claimant list";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Claimants</h1>
    <div class="info-notice">Mr Eddie Lagan has been removed from the application</div>

    <p class="text">You have told us that you are applying for compensation on behalf of multiple applicants. Use this screen to tell us about all the claimants relative to your application.</p>

    <form action="post" class="form">
        <input type="submit" value="Add a claimant" class="btn btn-success">

        <hr>

        <table class="standard unfixed margin-bottom">
        <tr>
            <th colspan="2">Claimant</th>
        </tr>
        <!-- <tr>
            <td>Mr Eddie Lagan</td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr> -->
        <tr>
            <td>Mrs Nuala O'Rawe</td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        </table>

        <!-- <form action="post" class="form">
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

        </form> -->

        <hr>

        <div class="button-group">
            <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>

    </form>


</div>

<?php include_once("../includes/footer.php"); ?>