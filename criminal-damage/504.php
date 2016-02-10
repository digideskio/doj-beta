<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Claimant list";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Claimants</h1>
    <div class="info-notice">Mr Eddie Lagan has been removed from the application</div>

    <p class="text">You have told us that you are applying for compensation on behalf of multiple claimants. Use this screen to tell us about all the claimants relative to your application.</p>

    <p class="text">The first claimant added will become the 'Primary claimant' and will receive all correspondence relating to this application.</p>

    <form action="post" class="form">
        <input type="submit" value="Add a claimant" class="btn btn-success">

        <hr>

        <table class="standard unfixed margin-bottom">
        <tr>
            <th colspan="2">Claimant</th>
        </tr>
        <!-- <tr>
            <td>Mr Eddie Lagan <span class="label label-info">Primary claimant</span></td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr> -->
        <tr>
            <td>Mrs Nuala O'Rawe <span class="label label-info">Primary claimant</span></td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        </table>

        <hr>

        <div class="button-group">
            <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>

    </form>


</div>

<?php include_once("../includes/footer.php"); ?>