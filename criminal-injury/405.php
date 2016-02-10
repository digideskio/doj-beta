<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Type of claimant";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Application type</h1>
    <div class="text">
      <h3>Injury</h3>
      <ul>
        <li>Mental or physical injury following a crime of violence</li>
        <li>Sexual or physical abuse</li>
        <li>Loss of earnings, where you have no or limited capacity to work as the direct result of a criminal injury</li>
        <li>Special expenses payments,these cover certain costs you may have incurred as a direct result of an incident. You can only ask us to consider special expenses if your injuries mean you have been unable to work or have been incapacitated to a similar extent for more than 28 weeks</li>
      </ul>
      <h3>Fatality</h3>
      <ul>
        <li>A fatality caused by a crime of violence including bereavement payments, payments for loss of parental services and financial dependency and funeral payments</li>
      </ul>

    </div>

<form action="post" class="form">
    <fieldset>
      <legend class="instruction">Select application type</legend>
        <div class="form-group">
          <label class="block-label" for="radio-indent-1" data-target="myself">
            <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
            Injury
          </label>
          <label class="block-label" data-target="someone-else" for="radio-indent-2">
            <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
            Fatality
          </label>
        </div>

        <p>&nbsp;</p>


        <h3>Selecting the appropriate scheme</h3>

        <div class="text">
          <ul>
            <li>The Northern Ireland Criminal Injuries Compensation Scheme 2002 applies to all incidents occurring <strong>on or after 1 May 2002 until 31 March 2009</strong></li>
            <li>The Northern Ireland Criminal Injuries Compensation Scheme 2009 applies to all incidents occurring <strong>on or after 1 April 2009</strong></li>
            <li>There are exceptions for dealing with historic incidents of sexual abuse, please contact us for more details</li>
          </ul>
        </div>

        <legend class="instruction">Select compensation scheme</legend>
          <div class="form-group">
            <label class="block-label" for="radio-indent-1" data-target="myself">
              <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
              Northern Ireland Criminal Injuries Compensation Scheme 2002
            </label>
            <label class="block-label" data-target="someone-else" for="radio-indent-2">
              <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
              Northern Ireland Criminal Injuries Compensation Scheme 2009
            </label>
          </div>
    </fieldset>

    <div class="button-group">
        <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
    </div>


</form>



</div>

<?php include_once("../includes/footer.php"); ?>