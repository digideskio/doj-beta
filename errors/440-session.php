<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Criminal convictions";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
  <h1>Session error</h1>
  <p class="text">The session has expired due to inactivity.</p>
  
  <form action="post" class="form">
    <input type="submit" value="Return to Compensation Services" class="btn btn-primary">
  </form>

</div>

<?php include_once("../includes/footer.php"); ?>