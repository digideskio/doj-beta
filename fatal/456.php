<?php
    $bodyclass = "";
    $documenttitle = "Details of deceased person | Apply for compensation | nidirect";
    include_once("../includes/header-app-prototype.php");
?>
    <div class="content container">
        <h1>Details of deceased person</h1>
        <p><img src="/images/required.gif" class="required" alt="Required information"> Indicates a required field</p>
        <form action="post" class="form">
            <fieldset>
                <div class="control-group" id="1">
                    <label class="form-label" for="ddl_title">
                        <img src="/images/required.gif" class="required" alt="Required information"> Title
                    </label>
                    <span class="validation-error js-hidden">Select a title from the menu</span>
                    <select name="ddl_title" id="ddl_title">
                        <option value="0">--- Please select ---</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                </div>
                <div class="control-group" id="2">
                    <label class="form-label" for="txt_firstname">
                        Other title
                    </label>
                    <span class="validation-error js-hidden">You selected 'Other' above, enter a title *** You selected a title above, you can't have more than one title</span>
                    <input name="txt_firstname" type="email" maxlength="50" id="txt_firstname">
                </div>
                <div class="control-group" id="3">
                    <label class="form-label" for="txt_firstname">
                        <img src="/images/required.gif" class="required" alt="Required information"> First name(s)
                    </label>
                    <span class="validation-error js-hidden">Enter first name(s)</span>
                    <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
                </div>
                <div class="control-group" id="4">
                    <label class="form-label" for="txt_firstname">
                        <img src="/images/required.gif" class="required" alt="Required information"> Surname
                    </label>
                    <span class="validation-error js-hidden">Enter a surname</span>
                    <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
                </div>
                <div class="control-group" id="5">
                    <label class="form-label" for="txt_firstname">
                        Other surnames
                    </label>
                    <input name="txt_firstname" type="text" maxlength="50" id="txt_firstname">
                </div>
                <div class="control-group">
                    <div class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Date of birth</div>
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
                    <div class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Date of death</div>
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
                <div class="control-group dropdown-wide">
                    <label class="form-label"><img class="required" src="/images/required.gif"> Gender</label>
                    <span class="validation-error js-hidden" style="display: none;">Country must be selected</span>
                    <select data-val="true" data-val-required="Select a country" id="Country" name="Country">
                        <option value="">-- Please select --</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                        <option value="3">Others</option>
                    </select>
                </div>
                <div class="control-group dropdown-wide">
                    <label class="form-label"><img class="required" src="/images/required.gif"> Marital status</label>
                    <span class="validation-error js-hidden" style="display: none;">Country must be selected</span>
                    <select data-val="true" data-val-required="Select a country" id="Country" name="Country">
                        <option value="">-- Please select --</option>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                        <option value="3">Widowed</option>
                        <option value="4">Divorced</option>
                        <option value="5">Separated</option>
                    </select>
                </div>
                <div class="control-group" id="111">
                    <label class="form-label" for="nat-no">
                        National insurance number
                    </label>
                    <input name="nat-no" type="text" id="nat-no">
                </div>
            </fieldset>
            <h2 class="no-top-margin">Address at time of death</h2>
            <fieldset>
                <div class="control-group" id="1">
                    <label class="form-label"><img class="required" src="/images/required.gif"> Address line 1</label>
                    <span class="validation-error js-hidden" style="display: none;">Address line 1 must be between 2 and 100 characters</span>
                    <input data-val="true" data-val-length="Address line 1 must be between 2 and 100 characters" data-val-length-max="100" data-val-length-min="2" data-val-required="Enter address line 1" id="AddressLine1" name="AddressLine1" type="text" value="">
                </div>
                <div class="control-group" id="2">
                    <label class="form-label"><img class="required" src="/images/required.gif"> Address line 2</label>
                    <span class="validation-error js-hidden" style="display: none;">Address line 2 must be between 2 and 100 characters</span>
                    <input data-val="true" data-val-length="Address line 2 must be between 2 and 100 characters" data-val-length-max="100" data-val-length-min="2" data-val-required="Enter address line 2" id="AddressLine2" name="AddressLine2" type="text" value="">
                </div>
                <div class="control-group not-required">
                    <label class="form-label">Address line 3</label>
                    <input data-val="true" data-val-length-max="100" data-val-length-min="2" id="AddressLine3" name="AddressLine3" type="text" value="">
                </div>
                <div class="control-group" id="4">
                    <label class="form-label"> Postcode </label>
                    <span class="validation-error js-hidden" style="display: none;">Postcode must be less than 10 characters</span>
                    <input data-val="true" data-val-length="Postcode must be less than 10 characters" data-val-length-max="10" id="Postcode" name="Postcode" type="text" value="">
                </div>
                <div class="control-group dropdown-wide">
                    <label class="form-label"><img class="required" src="/images/required.gif"> Country</label>
                    <span class="validation-error js-hidden" style="display: none;">Country must be selected</span>
                    <select data-val="true" data-val-required="Select a country" id="Country" name="Country">
                        <option value="">-- Please select --</option>
                        <optgroup label="Frequently used countries">
                            <option value="Northern&nbsp;Ireland">Northern&nbsp;Ireland</option>
                            <option value="England">England</option>
                            <option value="Scotland">Scotland</option>
                            <option value="Wales">Wales</option>
                            <option value="Republic&nbsp;of&nbsp;Ireland">Republic&nbsp;of&nbsp;Ireland</option>
                            <option value="Canada">Canada</option>
                            <option value="United&nbsp;States&nbsp;of&nbsp;America">United&nbsp;States&nbsp;of&nbsp;America</option>
                        </optgroup>
                        <optgroup label="All countries">
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland&nbsp;Islands">Åland&nbsp;Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American&nbsp;Samoa">American&nbsp;Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua&nbsp;and&nbsp;Barbuda">Antigua&nbsp;and&nbsp;Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia,&nbsp;Plurinational&nbsp;State&nbsp;of">Bolivia,&nbsp;Plurinational&nbsp;State&nbsp;of</option>
                            <option value="Bonaire,&nbsp;Sint&nbsp;Eustatius&nbsp;and&nbsp;Saba">Bonaire,&nbsp;Sint&nbsp;Eustatius&nbsp;and&nbsp;Saba</option>
                            <option value="Bosnia&nbsp;and&nbsp;Herzegovina">Bosnia&nbsp;and&nbsp;Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet&nbsp;Island">Bouvet&nbsp;Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British&nbsp;Indian&nbsp;Ocean&nbsp;Territory">British&nbsp;Indian&nbsp;Ocean&nbsp;Territory</option>
                            <option value="Brunei&nbsp;Darussalam">Brunei&nbsp;Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina&nbsp;Faso">Burkina&nbsp;Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Cape&nbsp;Verde">Cape&nbsp;Verde</option>
                            <option value="Cayman&nbsp;Islands">Cayman&nbsp;Islands</option>
                            <option value="Central&nbsp;African&nbsp;Republic">Central&nbsp;African&nbsp;Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas&nbsp;Island">Christmas&nbsp;Island</option>
                            <option value="Cocos&nbsp;(Keeling)&nbsp;Islands">Cocos&nbsp;(Keeling)&nbsp;Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo,&nbsp;the&nbsp;Democratic&nbsp;Republic&nbsp;of&nbsp;the">Congo,&nbsp;the&nbsp;Democratic&nbsp;Republic&nbsp;of&nbsp;the</option>
                            <option value="Cook&nbsp;Islands">Cook&nbsp;Islands</option>
                            <option value="Costa&nbsp;Rica">Costa&nbsp;Rica</option>
                            <option value="Côte&nbsp;d'Ivoire">Côte&nbsp;d'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaçao">Curaçao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech&nbsp;Republic">Czech&nbsp;Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican&nbsp;Republic">Dominican&nbsp;Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El&nbsp;Salvador">El&nbsp;Salvador</option>
                            <option value="Equatorial&nbsp;Guinea">Equatorial&nbsp;Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland&nbsp;Islands&nbsp;(Malvinas)">Falkland&nbsp;Islands&nbsp;(Malvinas)</option>
                            <option value="Faroe&nbsp;Islands">Faroe&nbsp;Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French&nbsp;Guiana">French&nbsp;Guiana</option>
                            <option value="French&nbsp;Polynesia">French&nbsp;Polynesia</option>
                            <option value="French&nbsp;Southern&nbsp;Territories">French&nbsp;Southern&nbsp;Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard&nbsp;Island&nbsp;and&nbsp;McDonald&nbsp;Islands">Heard&nbsp;Island&nbsp;and&nbsp;McDonald&nbsp;Islands</option>
                            <option value="Holy&nbsp;See&nbsp;(Vatican&nbsp;City&nbsp;State)">Holy&nbsp;See&nbsp;(Vatican&nbsp;City&nbsp;State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong&nbsp;Kong">Hong&nbsp;Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran,&nbsp;Islamic&nbsp;Republic&nbsp;of">Iran,&nbsp;Islamic&nbsp;Republic&nbsp;of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Isle&nbsp;of&nbsp;Man">Isle&nbsp;of&nbsp;Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea,&nbsp;Democratic&nbsp;People's&nbsp;Republic&nbsp;of">Korea,&nbsp;Democratic&nbsp;People's&nbsp;Republic&nbsp;of</option>
                            <option value="Korea,&nbsp;Republic&nbsp;of">Korea,&nbsp;Republic&nbsp;of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao&nbsp;People's&nbsp;Democratic&nbsp;Republic">Lao&nbsp;People's&nbsp;Democratic&nbsp;Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia,&nbsp;the&nbsp;former&nbsp;Yugoslav&nbsp;Republic&nbsp;of">Macedonia,&nbsp;the&nbsp;former&nbsp;Yugoslav&nbsp;Republic&nbsp;of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall&nbsp;Islands">Marshall&nbsp;Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia,&nbsp;Federated&nbsp;States&nbsp;of">Micronesia,&nbsp;Federated&nbsp;States&nbsp;of</option>
                            <option value="Moldova,&nbsp;Republic&nbsp;of">Moldova,&nbsp;Republic&nbsp;of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New&nbsp;Caledonia">New&nbsp;Caledonia</option>
                            <option value="New&nbsp;Zealand">New&nbsp;Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk&nbsp;Island">Norfolk&nbsp;Island</option>
                            <option value="Northern&nbsp;Mariana&nbsp;Islands">Northern&nbsp;Mariana&nbsp;Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian&nbsp;Territory,&nbsp;Occupied">Palestinian&nbsp;Territory,&nbsp;Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua&nbsp;New&nbsp;Guinea">Papua&nbsp;New&nbsp;Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto&nbsp;Rico">Puerto&nbsp;Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Réunion">Réunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian&nbsp;Federation">Russian&nbsp;Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint&nbsp;Barthélemy">Saint&nbsp;Barthélemy</option>
                            <option value="Saint&nbsp;Helena,&nbsp;Ascension&nbsp;and&nbsp;Tristan&nbsp;da&nbsp;Cunha">Saint&nbsp;Helena,&nbsp;Ascension&nbsp;and&nbsp;Tristan&nbsp;da&nbsp;Cunha</option>
                            <option value="Saint&nbsp;Kitts&nbsp;and&nbsp;Nevis">Saint&nbsp;Kitts&nbsp;and&nbsp;Nevis</option>
                            <option value="Saint&nbsp;Lucia">Saint&nbsp;Lucia</option>
                            <option value="Saint&nbsp;Martin&nbsp;(French&nbsp;part)">Saint&nbsp;Martin&nbsp;(French&nbsp;part)</option>
                            <option value="Saint&nbsp;Pierre&nbsp;and&nbsp;Miquelon">Saint&nbsp;Pierre&nbsp;and&nbsp;Miquelon</option>
                            <option value="Saint&nbsp;Vincent&nbsp;and&nbsp;the&nbsp;Grenadines">Saint&nbsp;Vincent&nbsp;and&nbsp;the&nbsp;Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San&nbsp;Marino">San&nbsp;Marino</option>
                            <option value="Sao&nbsp;Tome&nbsp;and&nbsp;Principe">Sao&nbsp;Tome&nbsp;and&nbsp;Principe</option>
                            <option value="Saudi&nbsp;Arabia">Saudi&nbsp;Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra&nbsp;Leone">Sierra&nbsp;Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint&nbsp;Maarten&nbsp;(Dutch&nbsp;part)">Sint&nbsp;Maarten&nbsp;(Dutch&nbsp;part)</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon&nbsp;Islands">Solomon&nbsp;Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South&nbsp;Africa">South&nbsp;Africa</option>
                            <option value="South&nbsp;Georgia&nbsp;and&nbsp;the&nbsp;South&nbsp;Sandwich&nbsp;Islands">South&nbsp;Georgia&nbsp;and&nbsp;the&nbsp;South&nbsp;Sandwich&nbsp;Islands</option>
                            <option value="South&nbsp;Sudan">South&nbsp;Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri&nbsp;Lanka">Sri&nbsp;Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard&nbsp;and&nbsp;Jan&nbsp;Mayen">Svalbard&nbsp;and&nbsp;Jan&nbsp;Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian&nbsp;Arab&nbsp;Republic">Syrian&nbsp;Arab&nbsp;Republic</option>
                            <option value="Taiwan,&nbsp;Province&nbsp;of&nbsp;China">Taiwan,&nbsp;Province&nbsp;of&nbsp;China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania,&nbsp;United&nbsp;Republic&nbsp;of">Tanzania,&nbsp;United&nbsp;Republic&nbsp;of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad&nbsp;and&nbsp;Tobago">Trinidad&nbsp;and&nbsp;Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks&nbsp;and&nbsp;Caicos&nbsp;Islands">Turks&nbsp;and&nbsp;Caicos&nbsp;Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United&nbsp;Arab&nbsp;Emirates">United&nbsp;Arab&nbsp;Emirates</option>
                            <option value="United&nbsp;States&nbsp;Minor&nbsp;Outlying&nbsp;Islands">United&nbsp;States&nbsp;Minor&nbsp;Outlying&nbsp;Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela,&nbsp;Bolivarian&nbsp;Republic&nbsp;of">Venezuela,&nbsp;Bolivarian&nbsp;Republic&nbsp;of</option>
                            <option value="Viet&nbsp;Nam">Viet&nbsp;Nam</option>
                            <option value="Virgin&nbsp;Islands,&nbsp;British">Virgin&nbsp;Islands,&nbsp;British</option>
                            <option value="Virgin&nbsp;Islands,&nbsp;U.S.">Virgin&nbsp;Islands,&nbsp;U.S.</option>
                            <option value="Wallis&nbsp;and&nbsp;Futuna">Wallis&nbsp;and&nbsp;Futuna</option>
                            <option value="Western&nbsp;Sahara">Western&nbsp;Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
            <h2 class="no-top-margin">Employment</h2>
            <div class="control-group" id="112">
                <label class="form-label" for="">
                    Occupation at time of death
                </label>
                <input name="" type="text" id="">
            </div>
            <div class="control-group" id="1">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was the deceased self-employed or were earnings in the form of fees or a share of profits?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="">
                        <input id="" name="" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="">
                        <input id="" name="" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="2">
                <label class="form-label">If 'Yes' was selected above, enter the type of business they ran</label>
                <input id="ContactNumber" name="ContactNumber" type="text" value="">
            </div>
            <div class="control-group" id="3">
                <p class="form-label text"> Was the deceased the sole owner of the business?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="sole-yes">
                        <input id="sole-yes" name="sole-owner" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="sole-no">
                        <input id="sole-no" name="sole-owner" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="4">
                <label class="form-label" for="who-share">If 'No' was selected above, what share of the business did they own?</label>
                <input id="who-share" name="ContactNumber" type="text" value="">
            </div>
            <div class="control-group" id="5">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was the deceased in employment during the two years before their death?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="emp-yes">
                        <input id="emp-yes" name="emp-group" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="emp-no">
                        <input id="emp-no" name="emp-group" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="6">
                <label for="emp-details" class="form-label text"> If ‘Yes’ was selected above, enter the names and addresses of the deceased’s employers at the time of death</label>
                <span class="validation-error js-hidden"></span>
                <span class="hint-text">Include the start and end dates of employment</span>
                <textarea name="emp-details" id="emp-details" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group" id="7">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is any pension or gratuity payable by the deceased's employer?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="grat-yes">
                        <input id="grat-yes" name="grat-group" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="grat-no">
                        <input id="grat-no" name="grat-group" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="111">
                <label for="name-org" class="form-label text"> If 'Yes' was selected above, enter the name and address of the organisation making the payments</label>
                <span class="validation-error js-hidden"></span>
                <textarea name="name-org" id="name-org" cols="30" rows="5"></textarea>
            </div>
            <div class="control-group" id="1111">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Was the deceased receiving any social security benefit, including Unemployment Benefit?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="ben-yes">
                        <input id="ben-yes" name="bens" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="ben-no">
                        <input id="ben-no" name="bens" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <div class="control-group" id="1111">
                <p class="form-label text"><img src="/images/required.gif" class="required" alt="Required information"> Is any sum payable from an insurance policy as a result of the death of the deceased?</p>
                <span class="validation-error js-hidden"></span>
                <div class="form-group inline">
                    <label class="block-label" for="ben-yes">
                        <input id="ben-yes" name="bens" value="1" type="radio"> Yes
                    </label>
                    <label class="block-label" for="ben-no">
                        <input id="ben-no" name="bens" value="2" type="radio"> No
                    </label>
                </div>
            </div>
            <h2>Other people who may qualify for compensation</h2>
            <div class="control-group" id="113">
                <label for="other-app" class="form-label text"> Enter the name, address and relationship to the deceased of anyone else you think may be eligible for an award</label>
                <span class="hint-text">Mother, father, children, spouse or partner</span>
                <textarea name="other-app" id="other-app" cols="30" rows="10"></textarea>
            </div>
            <div class="button-group">
                <a href="index.php" class="btn btn-secondary arrowl">Back</a> <a href="" class="btn btn-primary arrowr">Next</a>
            </div>
        </form>
    </div>
    <?php include_once("../includes/footer.php"); ?>
