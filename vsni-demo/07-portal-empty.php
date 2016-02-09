<?php
    $bodyclass = "";
    $documenttitle = "Compensation Services Portal";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">




<h1>Compensation Services Portal</h1>
<p class="text">Use this portal to track the progress of applications, securely upload documents and accept or reject offers of compensation.</p>

<a href="09.php" class="btn btn-call-to-action">Apply for compensation</a>

<hr>
<h2>Applications for compensation</h2>

<table class="standard unfixed margin-bottom">
<tr>
    <th>Case reference</th>
    <th>Date of application</th>
    <th>Applicant name</th>
    <th>Status</th>
</tr>

<tr>
    <td><a href="08-case-detail.php">CI123/14</a></td>
    <td>12/03/2014</td>
    <td>Miss Anna Bloggs</td>
    <td>Registered</td>
</tr>

<tr>
    <td><a href="08-case-detail.php">CD111/16</a></td>
    <td>12/01/2016</td>
    <td>Mr Jon Gold</td>
    <td>Police Report received</td>
</tr>

<tr>
    <td><a href="08-case-detail-3.php">CD005/15</a></td>
    <td>12/07/2015</td>
    <td>Mrs Nuala O'Rawe</td>
    <td>Denied / Award issued</td>
</tr>
</table>

<hr>
<h2>All notifications</h2>

<table class="standard unfixed margin-bottom">
<tr>
    <th>Case type and reference</th>
    <th>Date of application</th>
    <th>Subject</th>
</tr>

<tr>
    <td>Criminal Injury CI123/14</td>
    <td>12/03/2014</td>
    <td>Police Report Received</td>
</tr>
</table>


</div>

<?php include_once("../includes/footer.php"); ?>