<?php
    $bodyclass = "";
    $documenttitle = "Payments and compensation from other sources | Apply for compensation | nidirect";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1 class="text">Payments and compensation from other sources</h1>

    
    
    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>

    <form action="post" class="form">
        <h2 class="no-top-margin">Insurance policy</h2>
        <p>You have told us that a sum of money is payable from an insurance policy.</p>
        <div class="control-group" id="1">
            <label for="in-details" class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Enter the names and addresses of any insurance companies along with policy numbers</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="in-details" id="in-details" cols="30" rows="10"></textarea>
        </div>

        <div class="control-group" id="2">
            <label class="form-label" for="who-paid">
                <img src="/images/required.gif" class="required" alt="Required information"> Who paid the policy premiums?
            </label>
            <input name="who-paid" type="text" id="who-paid">
        </div>

        <div class="control-group" id="3">
            <label for="ins-payments" class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> What payments have been received or are expected to be received?</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="ins-payments" id="ins-payments" cols="30" rows="5"></textarea>
        </div>

        <h2>Compensation from other sources</h2>

        <div class="control-group" id="4">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Have you applied for compensation for this incident from any other person or body (other than an order to pay compensation made by a criminal court)?</p>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="">
                <input id="" name="" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group" id="5">
            <label for="comp-other" class="form-label text">If 'Yes' was selected above, enter the name and address of the person or body you have applied to. Include the date of the application and any reference numbers</label>
            <textarea name="comp-other" id="comp-other" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group" id="6">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Do you intend to apply  for compensation for this incident from any other person or body (other than an order to pay compensation made by a criminal court)?</p>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="">
                <input id="" name="" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group" id="7">
            <label for="comp-other" class="form-label text">If 'Yes' was selected above, enter the name and address of the person or body you intend to apply to</label>
            <textarea name="comp-other" id="comp-other" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group" id="6">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> As a direct result of the incident have you received or hope to receive compensation or damages as a result of any court order?</p>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="">
                <input id="" name="" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group" id="6">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> As a direct result of the incident have you received or hope to receive compensation or damages from any other source?</p>
            <div class="form-group inline">
              <label class="block-label" for="">
                <input id="" name="" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="">
                <input id="" name="" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group" id="7">
            <label for="comp-other" class="form-label text">If 'Yes' was selected for either of the previous two questions, enter details here</label>
            <textarea name="comp-other" id="comp-other" cols="30" rows="5"></textarea>
        </div>

        <div class="well text">
                <p class="form-label"><strong>To support your claim, you must provide us with the following original documents:</strong></p>
                <ul class="form-label text">
                  <li>Death Certificate</li>
                  <li>Full Birth Certificate or Adoption Certificate</li>
                  <li>Funeral account - if applicable, showing the expenses incurred and details of payments made</li>
                  <li>Marriage Certificate - if applicable</li>
                  <li>Documentary evidence - to prove your claim that you lived as husband and wife or as same sex partners in the same household for at least 2 years immediately before the date of death</li>
                  <li>Notices of assessment for income tax and certified accounts for the 3 years up to the date of the deceased's death - if the deceased was self-employed or earning a share of profits</li>
                </ul>
                <div class="control-group">
              
                <p class="form-label">Send documents along with your claim reference number<sup>*</sup> to:<br>
                Compensation Services<br>
                6th floor<br>
                Millennium House<br>
                25 Great Victoria Street<br>
                Belfast<br>
                BT2 7AQ<br><br>
                </p>
                <p class="form-label">* You will get the claim reference number when you submit the claim</p>
              </div>
        </div>

        <div class="button-group">
          <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
        </div>


    </form>



</div>

<?php include_once("../includes/footer.php"); ?>