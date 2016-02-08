<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Type of claimant";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Application type</h1>
    <p class="text">Lorem xpedita laborum nihil nostrum sequi deleniti ad. Cumque consequuntur quidem, voluptatibus voluptates sapiente. Ab, totam aperiam quo id nostrum voluptatibus odio delectus aspernatur magnam.</p>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, perspiciatis.</li>
      <li>Labore dolore delectus exercitationem, nihil totam commodi aut atque animi.</li>
      <li>Eveniet et non repellendus ut debitis molestias corporis amet ratione.</li>
    </ul>

<form action="post" class="form">
    <fieldset>
        <p class="form-label">Select application type</p>
        <div class="form-group inline">
          <label class="block-label" for="radio-indent-1" data-target="myself">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            Injury
          </label>
          <label class="block-label" data-target="someone-else" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
            Fatality
          </label>
        </div>


        <h2>Compensation Scheme (2002)</h2>
          <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam iure, quo explicabo accusantium temporibus alias ducimus, expedita laborum nihil nostrum sequi deleniti ad. Cumque consequuntur quidem, voluptatibus voluptates sapiente. Ab, totam aperiam quo id nostrum voluptatibus odio delectus aspernatur magnam.</p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, perspiciatis.</li>
              <li>Labore dolore delectus exercitationem, nihil totam commodi aut atque animi.</li>
              <li>Eveniet et non repellendus ut debitis molestias corporis amet ratione.</li>
            </ul>
          </div>
          <h2>Compensation Scheme (2009)</h2>
          <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam iure, quo explicabo accusantium temporibus alias ducimus, expedita laborum nihil nostrum sequi deleniti ad. Cumque consequuntur quidem, voluptatibus voluptates sapiente. Ab, totam aperiam quo id nostrum voluptatibus odio delectus aspernatur magnam.</p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, perspiciatis.</li>
              <li>Labore dolore delectus exercitationem, nihil totam commodi aut atque animi.</li>
              <li>Eveniet et non repellendus ut debitis molestias corporis amet ratione.</li>
            </ul>
          </div>

        <div class="form-group inline">
          <p class="form-label">Under which Compensation Scheme are you applying?</p>

          <label class="block-label" for="indent-1">
            <input id="indent-1" name="radio-indent" value="L" type="radio">
            2002
          </label>

          <label class="block-label" data-target="someone-else" for="indent-2">
            <input id="indent-2" name="radio-indent" value="P" type="radio">
            2009
          </label>
        </div>
    </fieldset>

    <div class="button-group">
        <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
    </div>


</form>



</div>

<?php include_once("../includes/footer.php"); ?>