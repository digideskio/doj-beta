<?php
    $bodyclass = "";
    $documenttitle = "Incident details | Apply for compensation | nidirect";
    include_once("../includes/header-app-prototype.php");
?>
    <div class="content container">
        <h1>Incident details</h1>
        <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>
        <!--
            Validation summary should only be displayed following server side validation.
            It is displayed here to associate error messages with inputs
    -->
        <div class="validation-summary js-hidden">
            <h2><img src="/images/error-icon.png" alt=""> Please review and correct the following errors</h2>
            <ul>
            </ul>
        </div>
        <!--
            /End validation summary
     -->
        <form action="post" class="form">
            <div class="control-group" id="1">
                <div class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> When did the incident happen?</div>
                <span class="validation-error js-hidden">Enter when the incident happened</span>
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
            <!-- /date time control group -->
            <div class="control-group not-required" id="2">
                <p class="form-label text">If the injuries are as a result of sexual abuse, domestic violence or harrassment over a period of time give the first and last dates of the incidents
                    <br>
                    <br>
                </p>
                <div class="form-date">
                    <div class="form-label">First date</div>
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
                <div class="form-date">
                    <div class="form-label">Last date</div>
                    <div class="form-date-day">
                        <label class="form-label-sm" for="day3">Day</label>
                        <select name="dob-day" id="day3" class="input-small" style="width: 70px">
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
                        <label class="form-label-sm" for="month3">Month</label>
                        <select name="dob-month" id="month3" class="input-small" style="width: 120px">
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
                        <label class="form-label-sm" for="year4">Year</label>
                        <input autocomplete="off" id="year4" name="dob-year" type="text" maxlength="4" class="input-small" placeholder="YYYY" style="width: 90px; min-width: 90px">
                    </div>
                </div>
            </div>
            <!-- /control-group incident range -->
            <div class="control-group not-required">
                <label for="names" class="form-label">Address at the time of the incident if it is different from current address</label>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group">
                <label for="names" class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> Where did the incident happen?</label>
                <span class="validation-error js-hidden">Enter where the incident happened</span>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group not-required">
                <label for="names" class="form-label">Who caused the injury?</label>
                <span class="hint-text">Give the full names if known</span>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group" id="4">
                <label for="names" class="form-label"><img src="/images/required.gif" class="required" alt="Required information"> What happened?</label>
                <span class="hint-text text">Provide full details, if more than 5000 characters are needed, please use the 'Extra information' screen later in the application</span>
                <span class="validation-error js-hidden">Enter full details of what happened</span>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group not-required">
                <label for="names" class="form-label text">If it is more than two years since the incident happened why is application for compensation only being made now?</label>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group" id="5">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Did the injured person and the person that caused the injury live in the same household as members of the same family?</p>
                <span class="validation-error js-hidden text">Select if the injured person and the person that caused the injury lived in the same household as members of the same family</span>
                <div class="form-group inline">
                    <label class="block-label" for="r1">
                        <input id="r1" name="radio-indent-group" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" data-target="permit-form" for="r2">
                        <input id="r2" name="radio-indent-group" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="6">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is the person who caused the injury still living in the same household as the injured person as members of the same family?</p>
                <span class="validation-error js-hidden text">Select if the person who caused the injury is still living in the same household as the injured person as members of the same family</span>
                <div class="form-group inline">
                    <label class="block-label" for="r1-1">
                        <input id="r1-1" name="radio-indent-group-1" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="r2-2">
                        <input id="r2-2" name="radio-indent-group-1" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="7">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Did anyone other than the person injured see the incident?</p>
                <span class="validation-error js-hidden text">Select if anyone else saw the incident</span>
                <div class="form-group inline">
                    <label class="block-label" for="r1-1-1">
                        <input id="r1-1-1" name="radio-indent-group-1-1" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="r2-2-2">
                        <input id="r2-2-2" name="radio-indent-group-1-1" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group not-required">
                <label for="names" class="form-label text">Name and address of anyone who saw the incident or who could give us information about it</label>
                <textarea name="names" id="names" cols="30" rows="5"></textarea>
            </div>
            <div class="button-group">
                <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
            </div>
        </form>
    </div>
    <?php include_once("../includes/footer.php"); ?>
    <script src="/js/togglevalidation.js"></script>
