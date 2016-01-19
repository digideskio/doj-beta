<?php
    $bodyclass = "";
    $documenttitle = "Kainos NICS Styles";
    include_once("includes/header.php");
?>

<div class="content container">
    <h1>Kainos NICS Styleguide</h1>
    <div class="text">
    <p class="intro">The styles below have been used in various Kainos projects for the NICS, they are based on <a href="http://uxm.nidirect.gov.uk">nidirect's UXM</a></p>
    <p>Right click and inspect element to get element markup and ensure CSS and JavaScript files are being correctly imported.</p>
    <p>This repository is on <a href="http://github.com/xz/knics">github    </a></p>

    </div>

    <hr>

    <h1>This is h1</h1>
    <h2>This is h2</h2>
    <h3>This is h3</h3>

    <p>Standard p text</p>

    <p class="intro">Intro paragraph</p>

    <hr>

        <form>
            <fieldset class="inline">
                <legend class="instruction">Inline radio group</legend>
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
        </form>

        <hr>

        <form>
            <fieldset>
                <legend class="instruction">Block level radio group</legend>
                <div class="form-group form-group-compound">
                  <label class="block-label" for="radio-indent-1">
                    <input id="radio-indent-1" name="radio-indent-group" value="L" type="radio">
                    Licence
                  </label>
                  <label class="block-label" data-target="permit-form" for="radio-indent-2">
                    <input id="radio-indent-2" name="radio-indent-group" value="P" type="radio" aria-controls="permit-form">
                    Permit
                  </label>
                  <label class="block-label" data-target="permit-form" for="radio-indent-3">
                    <input id="radio-indent-3" name="radio-indent-group" value="Combo" type="radio" aria-controls="permit-form">
                    Combined licence and permit
                  </label>
                </div>
            </fieldset>
        </form>

        <hr>
        <form id="declaration">
            <fieldset>
                <legend class="instruction">Declaration</legend>
                <blockquote class="text">By using this service you agree that your details may be shared with parties solely for the purpose of identity clarification</blockquote>
                <div class="form-group form-group-compound">
                    <!-- <span class="validation-error">Required information</span> -->
                    <label class="block-label" for="radio-indent-55">
                    <input id="radio-indent-55" name="radio-indent-group" value="Combo" type="checkbox">
                    I agree
                  </label>
                </div>
            </fieldset>
        </form>

        <hr>

        <form id="declaration-error">
            <fieldset>
                <legend class="instruction">Declaration</legend>
                <blockquote class="text">By using this service you agree that your details may be shared with parties solely for the purpose of identity clarification</blockquote>
                <div class="form-group form-group-compound validation">
                    <span class="validation-error">Required information</span>
                    <label class="block-label" for="radio-indent-55">
                    <input id="radio-indent-55" name="radio-indent-group" value="Combo" type="checkbox">
                    I agree
                  </label>
                </div>
            </fieldset>
        </form>

        <hr>

	    <div class="text">
	    	<h1>Sample transaction start page</h1>
	    	<p>Give the title of the service, explain all the user requirements. What pieces of information does the user need? Where can they get help?</p>

	    	<p><a href="#0" class="btn btn-success btn-large arrowr">Apply for compensation</a></p>
	        <h2>Requirements</h2>
	        <p>To buy a licence or permit, you will need to supply some or all of the following:</p>
	        <ul>
	            <li>Name</li>
	            <li>Email address</li>
	            <li>Date of birth</li>
	            <li>National Insurance Number (If claiming a concession)</li>
	        </ul>

	        <h2>Cost and making payments</h2>
	        <p>You will need a  debit or credit card to buy a licence or permit. Once payment has been received, you can print or save your licence or permit.</p>

	        <h2>Help</h2>
	        <p>If you need further help or advice using this service, please contact:
	        <br>xxxxxxxx on <strong>028 9xxxx xxxx</strong></p>
	    </div>

        <hr>

        <h1 id="postcode-lookup">Loading pattern for postcode lookup</h1>

        <h3>Before</h3>
        <form>
            <div>
                <label class="form-label" for="txt_postcode-example">
                    Postcode
                    <span class="hint">To find your address please enter a valid NI postcode and select find address</span>
                </label>

                <input type="text" id="txt_postcode-example" maxlength="8" class="short" value="BT2 8LW">
                <button class="btn btn-primary btn-small btn-inline" id="find-address" type="button">Find address</button>
            </div>
        </form>

        <h3>Clicked</h3>
        <form>
            <div>
                <label for="txt_postcode-example">
                    Postcode
                    <span class="hint">To find your address please enter a valid NI postcode and select find address</span>
                </label>
                <input type="text" id="txt_postcode-example" maxlength="8" class="short disabled" value="BT2 8LW" disabled>
                <button class="btn btn-primary btn-small btn-inline disabled" id="find-address" type="button" disabled>Loading...</button>
            </div>
        </form>

        <h3>Error</h3>
        <form>
            <div>
                <label for="txt_postcode-example">
                    Postcode
                    <span class="hint">To find your address please enter a valid NI postcode and select find address</span>
                </label>
                <input type="text" id="txt_postcode-example" maxlength="8" class="short" value="BT2 8LW">
                <button class="btn btn-primary btn-small btn-inline" id="find-address" type="button">Find address</button>
            </div>
            <div class="info-notice">Sorry, no addresses have been found for the postcode 'bt7 9hg’.</div>
            <div class="info-notice">Sorry, no addresses have been found for the postcode.</div>
        </form>

        <hr>

        <!-- Forms -->

        <h1>Forms styles</h1>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, consequuntur in, ipsam minus veritatis deleniti eius!</p>
        <form class="form">
            <div class="control-group">
                <label class="form-label" for="txt_firstname">
                    <img src="/images/required.gif" class="required" alt="Required information">
                    First name(s)
                </label>
                <!-- <span class="validation-error">name is required</span> -->
                <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
            </div>

            <hr>

            <div class="control-group">
                <div class="form-label">Date of birth</div>
                <!-- <span class="validation-error">date of birth can not be after incident date</span> -->
                <div class="form-date">
                    <div class="form-date-day">
                        <label class="form-label-sm" for="dob-day">Day</label>
                        <select name="dob-day" id="dob-day" class="input-small" style="width: 70px">
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
                        <select name="dob-month" id="dob-month" class="input-small" style="width: 120px">
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
                        <input autocomplete="off" id="dob-year" name="dob-year" type="text" maxlength="4" class="input-small" placeholder="YYYY" style="width: 90px; min-width: 90px">
                    </div>
                </div>
            </div>

            <div class="control-group">
                <fieldset class="inline">
                    <label class="form-label">Label for radio input</label>
                    <!-- <span class="validation-error">A selection is required</span> -->
                    <div class="form-group form-group-compound">
                      <label class="block-label" for="r1x">
                        <input id="r1x" name="radio-indent-group" value="1" type="radio">
                        Annual
                      </label>
                      <label class="block-label" data-target="permit-form" for="r2x">
                        <input id="r2x" name="radio-indent-group" value="2" type="radio">
                        14 days
                      </label>
                      <label class="block-label" data-target="permit-form" for="r3x">
                        <input id="r3x" name="radio-indent-group" value="3" type="radio">
                        3 days
                      </label>
                    </div>
                </fieldset>
            </div>

            <div class="control-group">
                <label class="form-label" for="ddl_title">Drop down example</label>
                <select name="ddl_title" id="ddl_title">
                    <option value="0">--- Please select ---</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Ms">Ms</option>
                    <option value="Dr">Dr</option>
                </select>
            </div>

            <div class="button-group">
                <a href="#0" class="btn btn-secondary arrowl">Back</a> <a href="#0" class="btn btn-primary arrowr">Next</a>
            </div>
        </form>

        <!-- Forms with validation -->

        <hr>

            <h1>Validating errors</h1>
            <p class="text">Show a summary of errors below the heading, the errors should link to the affected form element.</p>
            <div class="validation-summary">
                <h2><img src="/images/error-icon.png" alt=""> Please review and correct the following errors</h2>
                <p>Make sure you:</p>
                <ul>
                    <li><a href="#formid1">Enter a first name</a></li>
                    <li><a href="#formid2">Enter a valid date of birth</a></li>
                    <li>This isn't a link, but a non-blocking warning.</li>
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
                            <label class="form-label-sm" for="day">Day</label>
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
                            <label class="form-label-sm" for="month">Month</label>
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
                            <label class="form-label-sm" for="year1">Year</label>
                            <input autocomplete="off" id="year1" name="year1" type="text" maxlength="4" class="input-small" placeholder="YYYY" style="width: 90px; min-width: 90px">
                        </div>
                    </div>
                </div>

                <div class="control-group validation">
                    <fieldset class="inline">
                        <label class="form-label">My radio group with an error</label>
                        <span class="validation-error">selection is required</span>
                        <div class="form-group form-group-compound">
                          <label class="block-label" for="xr1">
                            <input id="xr1" name="radio-indent-group" value="1" type="radio">
                            Annual
                          </label>
                          <label class="block-label" data-target="permit-form" for="xr2">
                            <input id="xr2" name="radio-indent-group" value="2" type="radio">
                            14 days
                          </label>
                          <label class="block-label" data-target="permit-form" for="xr3">
                            <input id="xr3" name="radio-indent-group" value="3" type="radio">
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