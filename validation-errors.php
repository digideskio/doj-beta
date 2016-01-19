<?php
    $bodyclass = "";
    $documenttitle = "Validation Errors";
    include_once("includes/header.php");
?>

<div class="content container">
    <h1>Forms and validation styles</h1>
	<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, consequuntur in, ipsam minus veritatis deleniti eius!</p>
	<div class="validation-summary">
		<h2><img src="/images/error-icon.png" alt=""> Please review and correct the following errors</h2>
		<p>Make sure you:</p>
		<ul>
			<li>Enter a first name</li>
			<li>Enter a valid date of birth</li>
		</ul>
	</div>
	<form class="form">
		<div class="control-group validation">
		    <label class="form-label" for="txt_firstname">
		        <img src="/images/required.gif" class="required" alt="Required information">
		        First name(s)
		    </label>
		    <span class="validation-error">name is required</span>
		    <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
		</div>

		<hr>

		<div class="control-group validation">
		    <label class="form-label">Date of birth</label>
		    <span class="validation-error">date of birth can not be after incident date</span>
		    <div class="form-date">
		        <div class="form-date-day">
		            <label class="form-label-sm" for="dob-day">Day</label>
		            <select name="day" id="day" onchange="" class="input-small" style="width: 70px">
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
		            <label class="form-label-sm" for="dob-month">Month</label>
		            <select name="month" id="month" onchange="" class="input-small" style="width: 120px">
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
		            <label class="form-label-sm" for="dob-year">Year</label>
		            <input autocomplete="off" id="year1" name="year1" type="text" maxlength="4" class="input-small" placeholder="YYYY" style="width: 90px; min-width: 90px">
		        </div>
		    </div>
		</div>

		<div class="control-group validation">
			<fieldset class="inline">
                <label class="form-label">My radio group with an error</label>
                <span class="validation-error">A selection is required</span>
                <div class="form-group form-group-compound">
                  <label class="block-label" for="r1">
                    <input id="r1" name="radio-indent-group" value="1" type="radio">
                    Annual
                  </label>
                  <label class="block-label" data-target="permit-form" for="r2">
                    <input id="r2" name="radio-indent-group" value="2" type="radio">
                    14 days
                  </label>
                  <label class="block-label" data-target="permit-form" for="r3">
                    <input id="r3" name="radio-indent-group" value="3" type="radio">
                    3 days
                  </label>
                </div>
            </fieldset>
		</div>
		<div class="button-group">
			<a href="#0" class="btn btn-secondary arrowl">Back</a> <a href="#0" class="btn btn-primary arrowr">Next</a>
		</div>
</div>

<?php include_once("includes/footer.php"); ?>