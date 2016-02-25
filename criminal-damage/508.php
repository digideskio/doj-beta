<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation | Buildings and vehicles | nidirect";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Buildings and vehicles</h1>

    <p class="text">Use this screen to tell us about all buildings or vehicles for which you are claiming compensation.</p>


    <form action="post" class="form">
        <input type="submit" value="Add a building" class="btn btn-success"> <input type="submit" value="Add a vehicle" class="btn btn-success">

        <hr>

        <table class="standard unfixed margin-bottom">
        <tr>
            <th colspan="2">Building</th>
        </tr>
        <tr>
            <td style="width: 100%;">
                Address line 1, Address line 2, Address line 3, Country, Post code
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        <tr>
            <td style="width: 100%;">
                Address line 1, Address line 2, Address line 3, Country, Post code
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        <tr>
            <td style="width: 100%;">
                Address line 1, Address line 2, Address line 3, Country, Post code
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        </table>

        <hr>

        <table class="standard unfixed margin-bottom">
        <tr>
            <th colspan="2">Vehicle</th>
        </tr>
        <tr>
            <td style="width: 100%;">
                IAZ 6969 - Ford Mustang
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        <tr>
            <td style="width: 100%;">
                IAZ 6969 - Lexus IS200
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        <tr>
            <td style="width: 100%;">
                IAZ 6969 - BMW 525i
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        <tr>
            <td style="width: 100%;">
                IAZ 6969 - BMW 740i
            </td>
            <td class="text-right"><a href="#0">Remove</a></td>
        </tr>
        
        </table>

        <hr>

        <div class="button-group">
            <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>

    </form>


</div>
<!-- Content container -->


<?php include_once("../includes/footer.php"); ?>