<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Declaration";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Declaration</h1>
    <div class="text">
      <p class="intro">Read and agree to the declaration carefully before submitting an application.</p>
      <ul>
        <li>I want to apply to Compensation Services for compensation</li>
        <li>I declare that the information I have given is true and accurate to the best of my knowledge</li>
        <li>I shall tell Compensation Services if there are any changes in the details I have given</li>
      </ul>
      <p>I understand that I may have to pay a fine or go to prison (or both) if:</p>
      <ul>
        <li>I give false or misleading information, or fail to give information that may affect my application</li>
        <li>I fail to tell Compensation Services if I receive any amount of compensation or damages from any other source, relating to the injuries for which I am now applying for compensation.</li>
      </ul>

      <p>I give Compensation Services permission to ask:</p>
      <ul>
        <li>from any medical practitioner attended by the applicant or victim, medical records, notes and reports which are relevant to this application (This will include GP and Counselling Notes and records if required)</li>
        <li>from the police all relevant information, including copies of the applicant or victim's criminal record (if any) and any statements made in connection with this application.</li>
        <li>from the Social Security Agency, any information which is relevant to this application</li>
        <li>from the NI Housing Executive, any information which is relevant to this application</li>
        <li>from the Rate Collection Agency or Land and Property Services, any information which is relevant to this application</li>
        <li>from the Inland Revenue UK, any information which is relevant to this application</li>
        <li>from the applicant or victim's former or present employers, information about earnings, conditions of service, pension rights and any other information which is relevant to this application</li>
        <li>from any source, any information which is relevant to this application</li>
      </ul>

      <p>I understand that DOJ Compensation Services may notify these authorities mentioned above that I have applied for compensation and may inform them of the decision about this claim.</p>
      <p>The information provided on this form may be made available to other departments/agencies for the purposes of preventing or detecting crime.</p>

      <p>If the claimant is under 18 years old, legally incapacitated or otherwise incapacitated this application should be signed by the applicant.</p>

      <div class="control-group">
        <label class="block-label" for="DeclarationAgreed"><input class="input-validation-error" id="DeclarationAgreed" name="DeclarationAgreed" type="checkbox" value="true"><input name="DeclarationAgreed" type="hidden" value="false"> I agree to the declaration</label>
      </div>
    </div>

<form action="post" class="form">
  <br><br>
  <a class="btn btn-secondary arrowl" href="">Back</a> <input type="submit" class="btn btn-success" value="Submit application">
</form>



</div>

<?php include_once("../includes/footer.php"); ?>