<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Criminal convictions";
    include_once("../includes/header-app-prototype.php");
?>
    <div class="content container">
        <h1>Criminal convictions</h1>
        <p></p>
        <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>
        <form action="post" class="form">
            <div class="control-group" id="uk">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> <strong>Question 1:</strong> Have you or the deceased been convicted of a criminal offence in Northern Ireland or any other part of the United Kingdom?</p>
                <span class="validation-error js-hidden">Select an option</span>
                <div class="form-group">
                    <label class="block-label" for="yes-1">
                        <input id="yes-1" name="group-1" value="1" type="radio"> Yes, I have been convicted
                    </label>
                    <label class="block-label" for="yes-3">
                        <input id="no-1" name="group-1" value="2" type="radio"> Yes, the deceased has been convicted
                    </label>
                    <label class="block-label" for="yes-2">
                        <input id="yes-1" name="group-1" value="1" type="radio"> Yes, both have been convicted
                    </label>
                    <label class="block-label" for="no-1">
                        <input id="no-1" name="group-1" value="2" type="radio"> No, neither have been convicted
                    </label>
                </div>
            </div>
            <div class="control-group" id="2">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> <strong>Question 2:</strong> Have you or the deceased been convicted of a criminal offence outside the United Kingdom?</p>
                <span class="validation-error js-hidden">Select an option</span>
                <div class="form-group">
                    <label class="block-label" for="yes-1">
                        <input id="yes-1" name="group-1" value="1" type="radio"> Yes, I have been convicted
                    </label>
                    <label class="block-label" for="yes-3">
                        <input id="no-1" name="group-1" value="2" type="radio"> Yes, the deceased has been convicted
                    </label>
                    <label class="block-label" for="yes-2">
                        <input id="yes-1" name="group-1" value="1" type="radio"> Yes, both have been convicted
                    </label>
                    <label class="block-label" for="no-1">
                        <input id="no-1" name="group-1" value="2" type="radio"> No, neither have been convicted
                    </label>
                </div>
            </div>
            <div class="well text">
                <p class="form-label">If you selected 'Yes' to <strong>Question 2</strong>, you must provide us with a copy of your criminal record, detailing the relevant convictions.</p>
                <hr>
                <p class="form-label">If you selected 'No' to <strong>Question 2</strong> and you or the deceased were or are not a resident of the United Kingdom, you must provide us with one of the following:</p>
                <ul class="form-label text">
                    <li>Certificate of Good Conduct</li>
                    <li>Certificate of Good Standing</li>
                    <li>Extrait du Casier Judicaire</li>
                    <li>Certificat de bonnes vies et moeurs</li>
                    <li>other official evidence of a clear criminal record</li>
                </ul>
                <div class="control-group">
                    <p class="form-label">Send documents along with your claim reference number<sup>*</sup> to:
                        <br> Compensation Services
                        <br> 6th floor
                        <br> Millennium House
                        <br> 25 Great Victoria Street
                        <br> Belfast
                        <br> BT2 7AQ
                        <br>
                        <br>
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
