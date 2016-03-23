<?php
    $bodyclass = "";
    $documenttitle = "Compensation Services Portal";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">




<h1>Compensation Services</h1>
<p class="text">Use this service to track the progress of applications, securely upload documents and accept or reject offers of compensation.</p>

<a href="09.php" class="btn btn-call-to-action">Apply for compensation</a>

<hr>
<h2>Applications for compensation</h2>

<table class="standard unfixed margin-bottom">
    <thead>
        <tr>
            <th>Case reference</th>
            <th>Date of application</th>
            <th>Applicant name</th>
            <th>Status</th>
        </tr>
    </thead>
    

    <tr>
        <td data-label="Reference"><a href="08-case-detail.php">CI123/14</a></td>
        <td data-label="Date">12/03/2014</td>
        <td data-label="Applicant">Miss Anna Bloggs</td>
        <td data-label="Status">Registered</td>
    </tr>

    <tr>
        <td data-label="Reference"><a href="08-case-detail.php">CI123/14</a></td>
        <td data-label="Date">12/03/2014</td>
        <td data-label="Applicant">Miss Anna Bloggs</td>
        <td data-label="Status">Registered</td>
    </tr>

    <tr>
        <td data-label="Reference"><a href="08-case-detail.php">CI123/14</a></td>
        <td data-label="Date">12/03/2014</td>
        <td data-label="Applicant really long label">Miss Anna Bloggs realllyyljhsdf lonononononondfogndfogndfgo</td>
        <td data-label="Status">Registered</td>
    </tr>

</table>

<hr>
<h2>All notifications</h2>

<table class="standard unfixed margin-bottom">
    <thead>
        <tr>
            <th>Case type and reference</th>
            <th>Date of application</th>
            <th>Subject</th>
        </tr>
    </thead>

    <tr>
        <td data-label="Case ref.">Criminal Injury CI123/14</td>
        <td data-label="Date">12/03/2014</td>
        <td data-label="Subject">Police Report Received</td>
    </tr>
</table>


</div>

<?php include_once("../includes/footer.php"); ?>