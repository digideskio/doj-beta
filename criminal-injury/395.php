<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Reporting the incident";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Reporting the incident to an authority other than the police</h1>
    <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>


    <form action="post" class="form">

        <div class="control-group">
            <p class="form-label text">Did the injured person report the incident in person?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
                No
              </label>
            </div>
        </div>

        <p class="form-label text">If 'No' was selected above, who reported the incident to the other authority? <br><br></p>

        <div class="control-group">
            <label class="form-label" for="ddl_title">
                Title</label>
            <select name="ddl_title" id="ddl_title">
                <option value="0">--- Please select ---</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Ms">Ms</option>
                <option value="Dr">Dr</option>
            </select>
        </div>
        <div class="control-group">
            <label class="form-label" for="txt_firstname">
                Other title
            </label>
            <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
        </div>
        <div class="control-group">
            <label class="form-label" for="txt_firstname">
                First name(s)
            </label>
            <!-- <span class="validation-error">name is required</span> -->
            <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
        </div>
        <div class="control-group">
            <label class="form-label" for="txt_firstname">
                Surname
            </label>
            <!-- <span class="validation-error">name is required</span> -->
            <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
        </div>

        <div class="control-group">
          <label for="names" class="form-label">Why did the injured person not tell the authority in person?</label>
          <textarea name="names" id="names" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group">
          <label for="names" class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> Who was the incident reported to?</label>
          <textarea name="names" id="names" cols="30" rows="5"></textarea>
        </div>





        <div class="control-group">
            <div class="form-label">When was the incident first reported?</div>
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


            <div class="form-date">
                <div class="form-date-day">
                    <label class="form-label-sm" for="hour">Hour</label>
                    <select name="dob-day" id="hour" class="input-small" style="width: 70px">
                        <option>--</option>
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
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
                    </select>
                </div>
                <span style="display:inline-block;float:left;position:relative;top: 30px; left: -5px;">:</span>
                <div class="form-date-month">
                    <label class="form-label-sm" for="minute">Minute</label>
                    <select name="month" id="minute" class="input-small" style="width: 70px">
                        <option>--</option>
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
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
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="control-group">
          <label for="names" class="form-label text">If the incident was not reported immediately after it happened, explain why</label>
          <textarea name="names" id="names" cols="30" rows="5"></textarea>
        </div>

        <div class="control-group">
            <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was a written statement made?</p>
            <div class="form-group inline">
              <label class="block-label" for="r1">
                <input id="r1" name="radio-indent-group" value="1" type="radio">
                Yes
              </label>
              <label class="block-label" data-target="permit-form" for="r2">
                <input id="r2" name="radio-indent-group" value="2" type="radio">
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