@extends('layouts.header')

@section('content')
<section class="py-1">
    <div class="container">
        <div class="row mx-auto">
            <div class="col">
                <div data-reflow-type="shopping-cart">
                    <div class="reflow-shopping-cart" style="display: block;">
                        <div class="ref-loading-overlay"></div>
                        <div class="ref-message" style="display: none;"></div>
                        <div class="ref-checkout" style="display: flex;">
                            <div class="ref-checkout-content">
                                <form class="ref-details" style="display: block;">
                                    <div class="ref-back"> <a href="{{url ('checkout')}}">← Back to Cart</a></div>
                                    <div class="ref-heading">Customer Details</div>
                                    <div class="text-center ref-auth-button-holder" style="display: block;">
                                    </div><label><span>Email</span><input id="ref-field-email" class="ref-form-control" type="email" name="email" value required data-state-src="email" disabled placeholder="{{ Auth::user()->email }}" />
                                        <div class="ref-validation-error"></div>
                                    </label><label class="ref-phone-input"><span>Phone</span><input disabled id="ref-field-phone" class="ref-form-control" type="tel" name="phone" value pattern="[0-9\+\- ]{5,30}" placeholder="{{ Auth::user()->no_telp }}" required data-state-src="phone" />
                                        <div class="ref-validation-error"></div>
                                    </label><label class="ref-customer-name-input" style="display: none;"><span>Name</span><input class="ref-form-control" type="text" name="customer-name" value data-state-src="customer-name" minlength="5" disabled />
                                        <div class="ref-validation-error"></div>
                                    </label>
                                    <fieldset class="ref-digital-delivery" disabled style="display: none;">
                                        <div class="ref-digital-address-holder"></div><input type="hidden" name="delivery-method" value="digital" />
                                    </fieldset>
                                    <div class="ref-heading ref-heading-delivery" style="display: block;">Delivery</div>
                                    <div class="ref-delivery-unavailable" style="display: none;"></div>
                                    <div class="ref-delivery-card" style="display: block;">
                                        <div class="ref-tab ref-local-pickup-tab" data-ref-delivery="pickup" style="display: none;"><label class="ref-tab-toggle"><input type="radio" value="pickup" name="delivery-method" required />
                                                <div class="ref-heading-small">Pickup at Store</div>
                                            </label>
                                            <fieldset class="ref-tab-content">
                                                <div class="ref-heading-small">Select a Store</div>
                                                <div class="ref-locations ref-error-parent"></div>
                                                <div class="ref-billing-container">
                                                    <div class="ref-button ref-add-billing" style="display: inline-block;">Add Billing Info</div>
                                                    <fieldset class="ref-billing-address" disabled style="display: none;">
                                                        <div class="ref-row">
                                                            <div class="ref-heading-small">Billing Address</div>
                                                            <div class="ref-button ref-remove-billing">Remove</div>
                                                        </div>
                                                        <div class="ref-billing-address-holder"></div>
                                                    </fieldset>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="ref-tab ref-shipping-tab open" data-ref-delivery="shipping" style="display: block;"><label class="ref-tab-toggle"><input type="radio" value="shipping" name="delivery-method" required />
                                                <div class="ref-heading-small">Deliver to Address</div>
                                            </label>
                                            <fieldset class="ref-tab-content">
                                                <div class="ref-heading-small">Shipping Address</div>
                                                <div class="ref-shipping-address-holder">
                                                    <div class="ref-address-widget"><label><span>Name</span><input class="ref-form-control ref-field-details-name" type="text" value name="shipping-name" data-state-src="shipping-name" disabled placeholder="{{ Auth::user()->name }}" required minlength="5" />
                                                            <div class="ref-validation-error"></div>
                                                        </label><label><span>Address</span><textarea class="ref-form-control ref-field-details-address-line" row="2" name="shipping-address" data-state-src="shipping-address" required minlength="5" disabled placeholder="{{ Auth::user()->alamat }}"></textarea>
                                                            <div class="ref-validation-error"></div>
                                                        </label><label><span>City</span><input class="ref-form-control ref-field-details-city" type="text" value name="shipping-city" data-state-src="shipping-city" required minlength="2" disabled />
                                                            <div class="ref-validation-error"></div>
                                                        </label>
                                                        <div class="ref-error-parent"><label><span>Country</span><select class="ref-form-control ref-field-details-country" name="shipping-country" data-state-src="shipping-country" required disabled>
                                                                    <option value>Select Country</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AC">Ascension Island</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                    <option value="VG">British Virgin Islands</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="BQ">Caribbean Netherlands</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo - Brazzaville</option>
                                                                    <option value="CD">Congo - Kinshasa</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czechia</option>
                                                                    <option value="CI">Côte d’Ivoire</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="SZ">Eswatini</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong SAR</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="XK">Kosovo</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao SAR</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar (Burma)</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MK">North Macedonia</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territories</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn Islands</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Réunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">São Tomé &amp; Príncipe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SX">Sint Maarten</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="BL">St. Barthélemy</option>
                                                                    <option value="SH">St. Helena</option>
                                                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                                                    <option value="LC">St. Lucia</option>
                                                                    <option value="MF">St. Martin</option>
                                                                    <option value="PM">St. Pierre &amp; Miquelon</option>
                                                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                                    <option value="TA">Tristan da Cunha</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks &amp; Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UM">U.S. Outlying Islands</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican City</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="WF">Wallis &amp; Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select></label>
                                                            <div class="ref-row ref-row-region"><label style="display: none;"><span>State</span><select class="ref-form-control ref-field-details-region" name="shipping-state" data-state-src="shipping-state" required disabled></select></label><label style="display: none;"><span>Postal Code</span><input class="ref-form-control ref-field-details-postcode" type="text" name="shipping-postcode" data-state-src="shipping-postcode" value required disabled /></label></div>
                                                            <div class="ref-validation-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ref-auth-save-address" style="display: block;"><label><input type="checkbox" name="auth-save-address" checked /><span>Save my address for future purchases</span></label></div>
                                                <div class="ref-billing-container">
                                                    <div class="ref-button ref-add-billing" style="display: inline-block;">Add Billing Info</div>
                                                    <fieldset class="ref-billing-address" disabled style="display: none;">
                                                        <div class="ref-row">
                                                            <div class="ref-heading-small">Billing Address</div>
                                                            <div class="ref-button ref-remove-billing">Remove</div>
                                                        </div>
                                                        <div class="ref-billing-address-holder">
                                                            <div class="ref-address-widget"><label><span>Name</span><input class="ref-form-control ref-field-details-name" type="text" value name="billing-name" data-state-src="billing-name" required minlength="5" />
                                                                    <div class="ref-validation-error"></div>
                                                                </label><label><span>Address</span><textarea class="ref-form-control ref-field-details-address-line" row="2" name="billing-address" data-state-src="billing-address" required minlength="5"></textarea>
                                                                    <div class="ref-validation-error"></div>
                                                                </label><label><span>City</span><input class="ref-form-control ref-field-details-city" type="text" value name="billing-city" data-state-src="billing-city" required minlength="2" />
                                                                    <div class="ref-validation-error"></div>
                                                                </label>
                                                                <div class="ref-error-parent"><label><span>Country</span><select class="ref-form-control ref-field-details-country" name="billing-country" data-state-src="billing-country" required>
                                                                            <option value>Select Country</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="RU">Russia</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AX">Åland Islands</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AG">Antigua &amp; Barbuda</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AC">Ascension Island</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BA">Bosnia &amp; Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean Territory</option>
                                                                            <option value="VG">British Virgin Islands</option>
                                                                            <option value="BN">Brunei</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="BQ">Caribbean Netherlands</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo - Brazzaville</option>
                                                                            <option value="CD">Congo - Kinshasa</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="HR">Croatia</option>
                                                                            <option value="CW">Curaçao</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czechia</option>
                                                                            <option value="CI">Côte d’Ivoire</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="SZ">Eswatini</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="TF">French Southern Territories</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GG">Guernsey</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong SAR</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IM">Isle of Man</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JE">Jersey</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="XK">Kosovo</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Laos</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macao SAR</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="MD">Moldova</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="ME">Montenegro</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar (Burma)</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MK">North Macedonia</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PS">Palestinian Territories</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn Islands</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Réunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">São Tomé &amp; Príncipe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="RS">Serbia</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SX">Sint Maarten</option>
                                                                            <option value="SK">Slovakia</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                                            <option value="KR">South Korea</option>
                                                                            <option value="SS">South Sudan</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="BL">St. Barthélemy</option>
                                                                            <option value="SH">St. Helena</option>
                                                                            <option value="KN">St. Kitts &amp; Nevis</option>
                                                                            <option value="LC">St. Lucia</option>
                                                                            <option value="MF">St. Martin</option>
                                                                            <option value="PM">St. Pierre &amp; Miquelon</option>
                                                                            <option value="VC">St. Vincent &amp; Grenadines</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="TW">Taiwan</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TL">Timor-Leste</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad &amp; Tobago</option>
                                                                            <option value="TA">Tristan da Cunha</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks &amp; Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UM">U.S. Outlying Islands</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VA">Vatican City</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Vietnam</option>
                                                                            <option value="WF">Wallis &amp; Futuna</option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                        </select></label>
                                                                    <div class="ref-row ref-row-region"><label style="display: none;"><span>State</span><select class="ref-form-control ref-field-details-region" name="billing-state" data-state-src="billing-state" required disabled></select></label><label style="display: none;"><span>Postal Code</span><input class="ref-form-control ref-field-details-postcode" type="text" name="billing-postcode" data-state-src="billing-postcode" value required disabled /></label></div>
                                                                    <div class="ref-validation-error"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="ref-heading-shipping-methods ref-heading-small" style="display: none;">Shipping Method</div>
                                                <div class="ref-shipping-methods ref-error-parent"></div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="ref-tax-note" style="display: none;">
                                        <hr />
                                        <div class="ref-field-collapsible open"><span class="ref-field-toggle"><span class="ref-field-toggle-title">Apply a Tax Exemption</span></span>
                                            <div class="ref-collapse">
                                                <div class="ref-tax-exemption-file">
                                                    <div class="ref-old-tax-file"><a class="ref-tax-file-dl" href="#">Tax Exemption File</a><span class="ref-remove-tax-file">Remove</span></div><label class="ref-new-tax-file"><span class="ref-tax-file-label">Attach a document or photo of your tax exemption</span><input id="ref-field-exemption-file" class="ref-form-control" type="file" name="tax-exemption-file" accept=".doc,.docx,.pdf,.jpg,.jpeg,.png" disabled />
                                                        <div class="ref-validation-error"></div>
                                                    </label>
                                                </div><label class="ref-tax-exemption-text"><span>Enter your EU VAT number</span><input id="ref-field-exemption-text" class="ref-form-control" type="text" name="tax-exemption-text" maxlength="30" disabled />
                                                    <div class="ref-validation-error"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="ref-field-collapsible ref-note-to-seller open"><span class="ref-field-toggle"><span class="ref-field-toggle-title">Note to Seller</span></span><label class="ref-collapse"><textarea id="ref-field-note-seller" class="ref-form-control" name="note-to-seller" row="4" maxlength="1000" placeholder="If you have any specific instructions you want to give to the seller, write them here." data-state-src="note"></textarea></label>
                                        <div class="ref-validation-error"></div>
                                    </div>
                                    <hr />
                                </form>
                                <div class="ref-instructions" style="display: none;">
                                    <div class="ref-heading ref-payment-method-name"></div>
                                    <div class="ref-payment-method-instructions"></div>
                                </div>
                                <div class="ref-links"><a href="https://google.com" target="_blank">Terms &amp; Conditions</a><a href="https://google.com" target="_blank">Privacy Policy</a><a href="https://google.com" target="_blank">Refund Policy</a></div>
                            </div>
                            <div class="ref-checkout-summary open">
                                <div class="ref-heading">Order Summary</div>
                                @foreach($pesanan_details as $pesanan_detail)
                                <div class="ref-products">
                                    <div class="ref-product">
                                        <div class="ref-product-col"><img class="ref-product-photo" src="{{ $pesanan_detail->produk->gambar }}" alt="Vintage Clock" />
                                            <div>
                                                <div class="ref-product-name">{{ $pesanan_detail->produk->nama }}</div>
                                                <div class="ref-product-secondary">Rp. {{ number_format($pesanan_detail->produk->harga) }} {{ $pesanan_detail->jumlah }}x</div>
                                                <div class="ref-product-personalization-holder"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="ref-product-total">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <hr />
                                <div class="ref-discount-code">
                                    <div class="ref-discount-code-container">
                                        <div class="ref-discount-code-input-holder"><input id="ref-discount-code-input" class="ref-form-control" name="discount-code" type="text" maxlength="32" autocomplete="off" placeholder="Enter coupon or gift card code" /><span class="ref-discount-code-input-clear" title="Clear">✕</span></div>
                                        <div class="ref-button ref-button-success ref-add-code inactive">Apply</div>
                                    </div>
                                    <div class="ref-validation-error"></div>
                                </div>
                                <hr style="display: block;" />
                                <div class="ref-totals">
                                    <div class="ref-subtotal">
                                        <div class="ref-row"><span>Subtotal</span><span>{{ number_format ($pesanan->jumlah_harga ?? '0') }}</span></div>
                                    </div>
                                    <div class="ref-applied-coupon" style="display: none;">
                                        <div class="ref-row">
                                            <div class="ref-row"><span></span><span class="ref-remove-coupon">Remove</span></div><span></span>
                                        </div>
                                        <div class="ref-applied-coupon-error"></div>
                                    </div>
                                    <div class="ref-shipping" style="display: block;">
                                        <div class="ref-row"><span>Shipping (Worldwide Flat Rate)</span><span>$0.00</span></div>
                                    </div>
                                    <div class="ref-taxes" style="display: none;">
                                        <div class="ref-row"><span></span><span></span></div>
                                    </div>
                                    <div class="ref-applied-gift-card" style="display: none;">
                                        <div class="ref-row">
                                            <div class="ref-row"><span></span><span class="ref-remove-gift-card">Remove</span></div><span></span>
                                        </div>
                                        <div class="ref-row"></div>
                                        <div class="ref-applied-gift-card-error"></div>
                                    </div>
                                </div>
                                <hr />
                                <div class="ref-total">
                                    <div class="ref-row"><span>Total</span><span>Rp. {{ number_format ($pesanan->jumlah_harga ?? '0') }}</span></div>
                                    <div class="ref-total-note">All prices are in USD</div>
                                </div>
                            </div>
                            <div class="ref-summary-toggle ref-field-collapsible">
                                <span class="ref-field-toggle">
                                    <span class="ref-field-toggle-title">Show Summary</span>
                                    <span class="ref-summary-total">Rp. {{ number_format ($pesanan->jumlah_harga ?? '0') }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection