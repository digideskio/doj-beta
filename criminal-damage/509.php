<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation | Incident details | nidirect";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Details of interested parties</h1>

    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>

    <form action="post" class="form">
      <div class="control-group" id="1">
            <label for="int-par" class="form-label"> Enter names, reference numbers and addresses of interested parties</label>
            <span class="hint-text">For example, building societies, hire purchase companies, landlord, tenants, insurance companies</span>
            <span class="validation-error js-hidden"></span>
            <textarea name="int-par" id="int-par" cols="30" rows="10"></textarea>
        </div>
        
        <h2>VAT</h2>
        <div class="control-group" id="3">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Are you registered for VAT?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="vat-1">
                <input id="vat-1" name="group-1" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="vat-2">
                <input id="vat-2" name="group-1" value="2" type="radio">
                No
              </label>
              <label class="block-label" for="vat-2">
                <input id="vat-2" name="group-1" value="2" type="radio">
                Partially
              </label>
            </div>
        </div>
        <div class="control-group" id="4">
            <label for="if-vat" class="form-label text"> If you selected ‘Partially registered’ above, give details including percentage of VAT recoverable from HMRC</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="if-vat" id="if-vat" cols="30" rows="5"></textarea>
        </div>
        <h2>Chief Constable's Certificate</h2>
        <div class="control-group" id="3">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Do you consider that an illegal organisation was responsible for this incident?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="vat-1">
                <input id="vat-1" name="group-1" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="vat-2">
                <input id="vat-2" name="group-1" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <div class="control-group" id="3">
            <p class="form-label text"> If 'Yes' was selected above, do you wish to apply for a Chief Constable Certificate for this incident under Article 5 (2) of The Order?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="vat-1">
                <input id="vat-1" name="group-1" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="vat-2">
                <input id="vat-2" name="group-1" value="2" type="radio">
                No
              </label>
            </div>
        </div>
        <h2>Extra information</h2>
        <div class="control-group" id="20">
            <label for="extra-info" class="form-label text"> The information you have entered should be enough for us to begin to consider your claim. If you want to add anything else to the information you have already given, please do so in the space below</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="extra-info" id="extra-info" cols="30" rows="5"></textarea>
        </div>
        <h2>Declaration</h2>
        <div class="text">
          <p>I / we intend to apply to Department of Justice for NI for compensation for the loss which I / we have suffered and request an extension of time under Article 7(3) of The Order if this Notice is not received within 10 days from the date of the damage.</p>

          <p>I authorise DOJ Compensation Services and / or my legal representative to obtain:</p>
          <ul>
            <li>from the police, all relevant information, including copies of my statement made in connection with this application</li>
            <li>from the Social Security Agency, any information which is relevant to the application</li>
            <li>from HMRC, any information which is relevant to this application</li>
            <li>from any source, any information which is relevant to this application</li>
          </ul>
          <div class="control-group" id="">
            <p class="form-label text"> </p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="checkbox">
                I agree
              </label>
            </div>
        </div>
        </div>
        <div class="button-group">
          <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-success">Submit</a>
        </div>
    </form>


</div>
<!-- Content container -->


<?php include_once("../includes/footer.php"); ?>