<?php
    $bodyclass = "";
    $documenttitle = "nidirect &middot; login";
    include_once("../includes/header-app-nida.php");
?>

<div class="content container">

<style>
  .dayDDL {
    width: 60px;
    margin-right: 20px;
}

.monthDDL {
    width: 120px;
}

.yearDDL {
    width: 50px;
}

.labelForDayDDL {
    margin-right: 10px;
}

.divForDOBDay {
    height: 40px;
    width: 70px;
}

.divForDOBMonth {
    height: 40px;
    width: 130px;
}

.divForDOBYear {
    height: 40px;
    width: 100px;
    margin-bottom: 30px;
}

.labelForMonthDDL {
    margin-right: 10px;
}

.labelForYearDDL {
    margin-right: 10px;
}

.dropdown-wide select {
    max-width: 344px;
    width: 344px;
}

.LOA2ActivateSection {
    margin-top: 40px;
}

/* Media query for sub menu on account management */
@media (max-width: 767px) {
    .accountSideMenu ul li {
        display: inline-block;
        width: auto !important;
        margin-right: 10px;
        float: left;
        padding-bottom: 3px;
    }
}

/* account management form - no margin-top */

.form.account-management {
    margin-top: 0;
}

.activeAccountMenuItem {
    /*font-weight: bold !important;*/
}

.account-management-container .validation-summary {
    max-width: 90%;
}

@media (max-width: 480px) {
    .account-management-container .validation-summary {
        max-width: 85%;
    }
}

.break-word {
    word-wrap: break-word;
}

.mem-inf {
    width: 50px !important;
}

/*
These classes area input the wrong CSS file in the UXM, so are excluded from the solution
*/

.form-date-day {
    width: 70px;
    float: left;
    margin-right: 10px;
    margin-bottom: 0;
    clear: none;
}

.form-date-month {
    width: 120px;
    float: left;
    margin-right: 10px;
    margin-bottom: 0;
    clear: none;
}

.form-date-year {
    width: 90px;
    float: left;
    margin-right: 10px;
    margin-bottom: 0;
    clear: none;
}

.form-date label {
    display: block;
    margin-bottom: 5px;
}

.noBottomMargin {
    margin-bottom: 0 !important;
}

.button-div {
    width: auto;
}

.fiftyPercentWidth {
    width: 50%;
}

.thirtyPercentWidth {
    width: 30%;
}

.fortyPercentWidth {
    width: 40%;
}

.sixtyPercentWidth {
    width: 60%;
}
.seventyPercentWidth {
    width: 70%;
}


</style>




<h1>Create an account on nidirect</h1>







<form action="/Registration/Index" class="form" method="post">    <fieldset>

        <input name="__RequestVerificationToken" type="hidden" value="7eKLAk5hBtwddXw7uuhZix_d_40JuGCLmCiLWRQB5gpBUgvngs21mIofrSTpG4XxDp0vNonBFcKdNIOLFzHWZ18t_RsS8_1n9RU2XiAfvqI1">

        <div>
            <img src="/images/required.gif" alt="Required"> Indicates a required field
        </div>

        <div class="control-group ">
            <label class="form-label" for="FirstName"><img alt="Required information" src="/images/required.gif"> First name </label>

            <input class="text-box single-line" id="FirstName" name="FirstName" type="text" value="">
        </div>

        <div class="control-group ">
            <label class="form-label" for="MiddleNames">Middle name(s) </label>

            <input class="text-box single-line" id="MiddleNames" name="MiddleNames" type="text" value="">
        </div>

        <div class="control-group ">
            <label class="form-label" for="LastName"><img alt="Required information" src="/images/required.gif"> Last name </label>

            <input class="text-box single-line" id="LastName" name="LastName" type="text" value="">
        </div>

        <div class="noBottomMargin control-group ">
            <div class="form-label"><img src="/images/required.gif" alt="Required"> Date of birth</div>


            <div class="divForDOBDay">
                <label id="dayOfBirth" class="labelForDayDDL form-label-sm" for="DayOfBirth">Day</label>
                <select class="dayDDL" id="DayOfBirth" name="DayOfBirth"><option selected="selected" value="0">-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
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

            <div class="divForDOBMonth">
                <label id="monthOfBirth" class="labelForMonthDDL form-label-sm" for="MonthOfBirth">Month</label>
                <select class="monthDDL" id="MonthOfBirth" name="MonthOfBirth"><option selected="selected" value="0">-</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
            </div>

            <div class="divForDOBYear">
                <label id="yearOfBirth" class="labelForYearDDL form-label-sm" for="YearOfBirth">Year</label>
                <input id="YearOfBirth" maxlength="4" name="YearOfBirth" style="width:50px" type="text" value="">
            </div>
        </div>

        <div class="control-group ">
            <label class="form-label" for="Username"><img alt="Required information" src="/images/required.gif"> Your email address <span class="hint">Your email address will be used when signing in</span></label>

            <input class="text-box single-line" id="Username" name="Username" type="email" value="">
        </div>

        <div class="control-group ">
            <label class="form-label" for="ConfirmUsername"><img alt="Required information" src="/images/required.gif"> Re-type your email address </label>

            <input class="text-box single-line" id="ConfirmUsername" name="ConfirmUsername" type="text" value="">
        </div>

        <div class="control-group ">
            <label class="form-label" for="Password"><img alt="Required information" src="/images/required.gif"> Create a password <span class="hint">Your password must be at least 8 characters, contain an uppercase letter, a lowercase letter and one number</span></label>

            <input autocomplete="off" id="Password" name="Password" type="password">
        </div>

        <div class="control-group ">
            <label class="form-label" for="ConfirmPassword"><img alt="Required information" src="/images/required.gif"> Re-type your password </label>

            <input autocomplete="off" id="ConfirmPassword" name="ConfirmPassword" type="password">
        </div>
    </fieldset>
    <div class="button-div">
        <a href="04-mem-info.php" class="btn btn-primary arrowr">Next<a/>
    </div>
</form>
        </div>

<?php include_once("../includes/footer.php"); ?>
