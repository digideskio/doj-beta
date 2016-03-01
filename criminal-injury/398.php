<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Loss of earnings, payments and compensation";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
  <h1>Loss of earnings</h1>
  <p class="text">As outlined in Paragraph 20 of The Scheme, it is the responsibility of the person seeking compensation to provide assumptions, calculations and supporting documents in support of their claim for loss of earnings. </p>
  <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


  <form action="post" class="form">

  <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Has there been or is it expected that earnings will be lost for more than 28 full weeks as a result of the injury?</p>

  <div class="form-group inline">
    <label class="block-label" for="radio-indent-1" data-target="myself">
      <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
      Yes
    </label>
    <label class="block-label" data-target="someone-else" for="radio-indent-2">
      <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
      No
    </label>
  </div>

  <div class="form-date">
        <div class="form-label">If 'Yes' was selected above, tell us when a return to work is expected</div>
        <div class="form-date-day">
            <label class="form-label-sm" for="day2">Day</label>
            <select name="dob-day" id="day2" class="input-small" style="width: 70px">
                <option value="0">—</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
        </div>
        <div class="form-date-month">
            <label class="form-label-sm" for="month2">Month</label>
            <select name="dob-month" id="month2" class="input-small" style="width: 120px">
                <option value="0">—</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </div>
        <div class="form-date-year">
            <label class="form-label-sm" for="year3">Year</label>
            <input autocomplete="off" id="year3" name="dob-year" type="text" maxlength="4" class="input-small" placeholder="YYYY" style="width: 90px; min-width: 90px">
        </div>
      </div>
      
      <div class="clearfix"></div>
      
      <h2>Special expenses</h2>

      <div class="form-group inline">
      <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is there an expectation to have to pay special expenses as a result of the injury?</p>
        <label class="block-label" for="radio-indent-1" data-target="myself">
          <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
          Yes
        </label>
        <label class="block-label" data-target="someone-else" for="radio-indent-2">
          <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio">
          No
        </label>
      </div>

      <h2>Payments and compensation for injuries from other sources</h2>

      <div class="control-group" id="4">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Has compensation been applied for or is there an intention to apply for compensation from another person or organisation?</p>
            <span class="hint-text">This does <strong>not</strong> include compensation received from a criminal court</span>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="4-yes">
                <input id="4-yes" name="yes-no-4" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="4-no">
                <input id="4-no" name="yes-no-4" value="2" type="radio">
                No
              </label>
            </div>
      </div>
      
      <div class="control-group" id="5">
            <label for="other-source" class="form-label text"> If ‘Yes’ was selected above, give the name, address and contact number of the person or organisation</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="other-source" id="other-source" cols="30" rows="5"></textarea>
        </div>

      <div class="control-group" id="6">
          <label class="form-label" for="ref-no">
               If you have a reference number, enter it here
          </label>
          <input name="ref-no" type="text" id="ref-no">
      </div>

      <div class="control-group" id="7">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Has compensation or damages been received or is there an expectation that you will receive compensation or damages at a Criminal Court as the result of a Court Order?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="result-1">
                <input id="result-1" name="group-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="result-2">
                <input id="result-2" name="group-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <div class="control-group" id="8">
            <label for="if-yes" class="form-label text">  If 'Yes' was selected above, give the name of the Court dealing with this and details of the compensation or damages</label>
            <span class="validation-error js-hidden"></span>
            <textarea name="if-yes" id="if-yes" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group" id="9">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Has the injured person applied for criminal injury compensation before for another incident?</p>
            <span class="validation-error js-hidden"></span>
            <div class="form-group inline">
              <label class="block-label" for="yes-previous">
                <input id="yes-previous" name="previous-app" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" for="no-previous">
                <input id="no-previous" name="previous-app" value="2" type="radio">
                No
              </label>
            </div>
        </div>


  <div class="button-group">
    <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
  </div>

  </form>



</div>

<?php include_once("../includes/footer.php"); ?>