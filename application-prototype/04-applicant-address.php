<?php
    $bodyclass = "";
    $documenttitle = "Apply for compensation &middot; Applicant's contact details";
    include_once("../includes/header-app-prototype.php");
?>

<div class="content container">
    <h1>Applicant's contact details</h1>

    <form action="post">
            <fieldset>
                    <div class="control-group">
                        <label class="form-label"><img class="required" src="../Images/required.gif"> Building name or number</label>
                        <input data-val="true" data-val-length="Building name or number must be between 1 and 100 characters" data-val-length-max="100" data-val-length-min="1" data-val-required="Enter building name or number" id="BuildingNameOrNumber" name="BuildingNameOrNumber" type="text" value="">
                    </div>
                    <div class="control-group">
                        <label class="form-label"><img class="required" src="../Images/required.gif"> Address line 1</label>
                        <input data-val="true" data-val-length="Address line 1 must be between 2 and 100 characters" data-val-length-max="100" data-val-length-min="2" data-val-required="Enter address line 1" id="AddressLine1" name="AddressLine1" type="text" value="">
                    </div>
                    <div class="control-group">
                        <label class="form-label"><img class="required" src="../Images/required.gif"> Address line 2</label>
                        <input data-val="true" data-val-length="Address line 2 must be between 2 and 100 characters" data-val-length-max="100" data-val-length-min="2" data-val-required="Enter address line 2" id="AddressLine2" name="AddressLine2" type="text" value="">
                    </div>
                    <div class="control-group">
                        <label class="form-label"> Address line 3 </label>
                        <input data-val="true" data-val-length="Address line 3 must be between 2 and 100 characters" data-val-length-max="100" data-val-length-min="2" id="AddressLine3" name="AddressLine3" type="text" value="">
                    </div>
                    <div class="control-group">
                        <label class="form-label"> Postcode </label>
                        <input data-val="true" data-val-length="Postcode must be less than 10 characters" data-val-length-max="10" id="Postcode" name="Postcode" type="text" value="">
                    </div>
                    <div class="control-group dropdown-wide">
                        <label class="form-label"><img class="required" src="../Images/required.gif"> Country</label>
                        <select data-val="true" data-val-required="Select a country" id="Country" name="Country"><option value="">-- Please select --</option>
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
            <div class="control-group">
                <label class="form-label"> Contact number </label>
                <span class="hint">Include area / country code</span>
                <input data-val="true" data-val-length="Contact number must be between 6 and 20 characters" data-val-length-max="20" data-val-length-min="6" id="ContactNumber" name="ContactNumber" type="text" value="">
            </div>
            <div class="control-group">
                <label class="form-label">Email address</label>
                <span class="hint">Will only be used for correspondence</span>
                <input data-val="true" data-val-length="Contact number must be between 6 and 20 characters" data-val-length-max="20" data-val-length-min="6" id="ContactNumber" name="ContactNumber" type="text" value="">
            </div>
        </fieldset>



        <div class="button-group">
            <a href="03.php" class="btn btn-secondary arrowl">Back</a> <a href="05-nominate-rep.php" class="btn btn-primary arrowr">Next</a>
        </div>
    </form>



</div>

<?php include_once("../includes/footer.php"); ?>