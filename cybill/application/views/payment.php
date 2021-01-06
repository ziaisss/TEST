

  <!-- Start your project here-->  
  <section class="main">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        
       <div class="card-signin">
         <div id="payment-form" class="container">
 
           <div class="row">
             <div class="col-sm-12">
                <h1 class="paymentForm">Order Confirmation</h1>
             </div>
           </div>
           <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">Order Summary</h3>
             </div>
             <div class="panel-body">
                 <table class="table table-bordered" style="text-align: left;">
                                                                         <tbody><tr>
                             <th>Lite Logo Design</th>
                             <td>USD 39.00</td>
                         </tr>
                                                                                                                         <tr>
                             <th>Tax</th>
                             <td>USD 2.73</td>
                         </tr>
                                                                                                                                                                                                                         <tr class="thead-dark">
                             <th>Payable Amount</th>
                             <!-- <th>USD 41.73</th> -->
                             <th>USD 41.73</th>
                         </tr>
                                                                 </tbody></table>
             </div>
             <!-- <input type="hidden" class="final-price" value="4173"> -->
             <input type="hidden" class="final-price" value="41.73">
             <!-- <input type="hidden" name="price" id="price" value="4173"> -->
             <input type="hidden" name="price" id="price" value="41.73">
             <!-- <input type="hidden" id="price_paytarce" value="41.73"> -->
             <input type="hidden" id="price_paytarce" value="41.73">
         </div>
 
         <div class="row">
           <div class="col-md-12">
             <div class="payBoxImg text-center">
               <h2 class="headingBox">Pay By</h2>
               <img src="orderbriefassets/img/paypal_visa_img.png">
             </div>
           </div>
         </div>
 
         <div class="row payFormBox">
           <input type="hidden" name="cc_type">
               
                                                                       <input type="hidden" name="paytrace" id="paytrace" value="1">
 <input type="hidden" name="pay_type" value="paytrace">
 
 
               
 <div class="col-md-6 brdhideresp" style="border-right: 1px solid #d3d3d3;">
 <div class="form-label-group">
 <span class="shell">
 
 <label class="floating-label lab-2" aria-hidden="true" id="ccMask" "=""><i></i>Card Number</label>
 <input type="tel" data-exception="cc" id="cc" name="card_number" placeholder="Card Number" class="form-control form-control-lg" required="" data-placeholder="Card Number" data-original-placeholder="Card Number"></span>
 <!-- <label class="floating-label lab-2">Card Number</label> -->
 
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-2">CVV#</label>
 <input type="text" id="cvv" maxlength="5" name="card_cvc" class="form-control form-control-lg" required="" autocomplete="off">
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-2">Card Holder Name</label>
 <input type="text" name="cardholdername" id="cardholdername" class="form-control" required="" autocomplete="off">
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-2"> Month</label>
 <select id="card_expiry_date_month" name="card_expiry_date" class="form-control" required="" >
 <option value="" selected="">Select Month</option>
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
 
 
 <!-- <script type="text/javascript">
 function daysInMonth(m, y) {
 return m === 2 ? y & 3 || !(y % 25) && y & 15 ? 28 : 29 : 30 + (m + (m >> 3) & 1);
 }
 var select = $("#card_expiry_date_month"),
 month = new Date().getMonth() +1,
 year = new Date().getFullYear();
 var total_num = daysInMonth(month,year);
 for (var i = 1; i <= 12; i++) {
 select.append($("<option value='" + i + "' " + (i === month ? "selected" : "") + ">" + i  + "</option>"))
 }
 </script> -->
 </select>
 
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-2"> Year</label>
 <select id="card_expiry_year" name="card_expiry_year" class="card-expiry-year form-control" required="" >
 
 <option value="" selected="">Select Year</option>
 <option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option></select>
 <script type="text/javascript">
 var select = $(".card-expiry-year"),
 year = new Date().getFullYear();
 for (var i = 0; i < 12; i++) {
 // select.append($("<option value='" + (i + year) + "' " + (i === 0 ? "selected" : "") + ">" + (i + year) + "</option>"))
 select.append($("<option value='" + (i + year) + "' >" + (i + year) + "</option>"))
 }
 </script>
 </div>
 
                           <div class="panel panel-primary">
 <!-- <div class="panel-heading">
 <h3 class="panel-title">Personal Information</h3>
 </div> -->
 <div class="panel-body">
 <div class="row">
 <div class="col-md-12">
 <div class="form-label-group">
   <label class="floating-label lab-1">Street</label>
 <input id="street" type="text" name="street" class="form-control" required="">
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-1">City</label>
 <input type="text" id="city" name="city" class="form-control" required="">
 
 </div>
 <div class="form-label-group">
   <label class="floating-label lab-1">State</label>
 <input type="text" id="state" name="state" class="form-control" required="">
 
 </div>
 <!-- <div class="form-label-group">
 <select id="card_country"  name="country" class="form-control">
 <option value="">Select Country</option>
                                                                       <option value="Afghanistan">Afghanistan</option>
                                                                               <option value="Albania">Albania</option>
                                                                               <option value="Algeria">Algeria</option>
                                                                               <option value="American Samoa">American Samoa</option>
                                                                               <option value="Andorra">Andorra</option>
                                                                               <option value="Angola">Angola</option>
                                                                               <option value="Anguilla">Anguilla</option>
                                                                               <option value="Antarctica">Antarctica</option>
                                                                               <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                                               <option value="Argentina">Argentina</option>
                                                                               <option value="Armenia">Armenia</option>
                                                                               <option value="Aruba">Aruba</option>
                                                                               <option value="Australia">Australia</option>
                                                                               <option value="Austria">Austria</option>
                                                                               <option value="Azerbaijan">Azerbaijan</option>
                                                                               <option value="Bahamas The">Bahamas The</option>
                                                                               <option value="Bahrain">Bahrain</option>
                                                                               <option value="Bangladesh">Bangladesh</option>
                                                                               <option value="Barbados">Barbados</option>
                                                                               <option value="Belarus">Belarus</option>
                                                                               <option value="Belgium">Belgium</option>
                                                                               <option value="Belize">Belize</option>
                                                                               <option value="Benin">Benin</option>
                                                                               <option value="Bermuda">Bermuda</option>
                                                                               <option value="Bhutan">Bhutan</option>
                                                                               <option value="Bolivia">Bolivia</option>
                                                                               <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                               <option value="Botswana">Botswana</option>
                                                                               <option value="Bouvet Island">Bouvet Island</option>
                                                                               <option value="Brazil">Brazil</option>
                                                                               <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                               <option value="Brunei">Brunei</option>
                                                                               <option value="Bulgaria">Bulgaria</option>
                                                                               <option value="Burkina Faso">Burkina Faso</option>
                                                                               <option value="Burundi">Burundi</option>
                                                                               <option value="Cambodia">Cambodia</option>
                                                                               <option value="Cameroon">Cameroon</option>
                                                                               <option value="Canada">Canada</option>
                                                                               <option value="Cape Verde">Cape Verde</option>
                                                                               <option value="Cayman Islands">Cayman Islands</option>
                                                                               <option value="Central African Republic">Central African Republic</option>
                                                                               <option value="Chad">Chad</option>
                                                                               <option value="Chile">Chile</option>
                                                                               <option value="China">China</option>
                                                                               <option value="Christmas Island">Christmas Island</option>
                                                                               <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                               <option value="Colombia">Colombia</option>
                                                                               <option value="Comoros">Comoros</option>
                                                                               <option value="Republic Of The Congo">Republic Of The Congo</option>
                                                                               <option value="Democratic Republic Of The Congo">Democratic Republic Of The Congo</option>
                                                                               <option value="Cook Islands">Cook Islands</option>
                                                                               <option value="Costa Rica">Costa Rica</option>
                                                                               <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                                                                               <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                               <option value="Cuba">Cuba</option>
                                                                               <option value="Cyprus">Cyprus</option>
                                                                               <option value="Czech Republic">Czech Republic</option>
                                                                               <option value="Denmark">Denmark</option>
                                                                               <option value="Djibouti">Djibouti</option>
                                                                               <option value="Dominica">Dominica</option>
                                                                               <option value="Dominican Republic">Dominican Republic</option>
                                                                               <option value="East Timor">East Timor</option>
                                                                               <option value="Ecuador">Ecuador</option>
                                                                               <option value="Egypt">Egypt</option>
                                                                               <option value="El Salvador">El Salvador</option>
                                                                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                               <option value="Eritrea">Eritrea</option>
                                                                               <option value="Estonia">Estonia</option>
                                                                               <option value="Ethiopia">Ethiopia</option>
                                                                               <option value="External Territories of Australia">External Territories of Australia</option>
                                                                               <option value="Falkland Islands">Falkland Islands</option>
                                                                               <option value="Faroe Islands">Faroe Islands</option>
                                                                               <option value="Fiji Islands">Fiji Islands</option>
                                                                               <option value="Finland">Finland</option>
                                                                               <option value="France">France</option>
                                                                               <option value="French Guiana">French Guiana</option>
                                                                               <option value="French Polynesia">French Polynesia</option>
                                                                               <option value="French Southern Territories">French Southern Territories</option>
                                                                               <option value="Gabon">Gabon</option>
                                                                               <option value="Gambia The">Gambia The</option>
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
                                                                               <option value="Guernsey and Alderney">Guernsey and Alderney</option>
                                                                               <option value="Guinea">Guinea</option>
                                                                               <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                               <option value="Guyana">Guyana</option>
                                                                               <option value="Haiti">Haiti</option>
                                                                               <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                                                               <option value="Honduras">Honduras</option>
                                                                               <option value="Hong Kong S.A.R.">Hong Kong S.A.R.</option>
                                                                               <option value="Hungary">Hungary</option>
                                                                               <option value="Iceland">Iceland</option>
                                                                               <option value="India">India</option>
                                                                               <option value="Indonesia">Indonesia</option>
                                                                               <option value="Iran">Iran</option>
                                                                               <option value="Iraq">Iraq</option>
                                                                               <option value="Ireland">Ireland</option>
                                                                               <option value="Israel">Israel</option>
                                                                               <option value="Italy">Italy</option>
                                                                               <option value="Jamaica">Jamaica</option>
                                                                               <option value="Japan">Japan</option>
                                                                               <option value="Jersey">Jersey</option>
                                                                               <option value="Jordan">Jordan</option>
                                                                               <option value="Kazakhstan">Kazakhstan</option>
                                                                               <option value="Kenya">Kenya</option>
                                                                               <option value="Kiribati">Kiribati</option>
                                                                               <option value="Korea North">Korea North</option>
                                                                               <option value="Korea South">Korea South</option>
                                                                               <option value="Kuwait">Kuwait</option>
                                                                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                               <option value="Laos">Laos</option>
                                                                               <option value="Latvia">Latvia</option>
                                                                               <option value="Lebanon">Lebanon</option>
                                                                               <option value="Lesotho">Lesotho</option>
                                                                               <option value="Liberia">Liberia</option>
                                                                               <option value="Libya">Libya</option>
                                                                               <option value="Liechtenstein">Liechtenstein</option>
                                                                               <option value="Lithuania">Lithuania</option>
                                                                               <option value="Luxembourg">Luxembourg</option>
                                                                               <option value="Macau S.A.R.">Macau S.A.R.</option>
                                                                               <option value="Macedonia">Macedonia</option>
                                                                               <option value="Madagascar">Madagascar</option>
                                                                               <option value="Malawi">Malawi</option>
                                                                               <option value="Malaysia">Malaysia</option>
                                                                               <option value="Maldives">Maldives</option>
                                                                               <option value="Mali">Mali</option>
                                                                               <option value="Malta">Malta</option>
                                                                               <option value="Man (Isle of)">Man (Isle of)</option>
                                                                               <option value="Marshall Islands">Marshall Islands</option>
                                                                               <option value="Martinique">Martinique</option>
                                                                               <option value="Mauritania">Mauritania</option>
                                                                               <option value="Mauritius">Mauritius</option>
                                                                               <option value="Mayotte">Mayotte</option>
                                                                               <option value="Mexico">Mexico</option>
                                                                               <option value="Micronesia">Micronesia</option>
                                                                               <option value="Moldova">Moldova</option>
                                                                               <option value="Monaco">Monaco</option>
                                                                               <option value="Mongolia">Mongolia</option>
                                                                               <option value="Montserrat">Montserrat</option>
                                                                               <option value="Morocco">Morocco</option>
                                                                               <option value="Mozambique">Mozambique</option>
                                                                               <option value="Myanmar">Myanmar</option>
                                                                               <option value="Namibia">Namibia</option>
                                                                               <option value="Nauru">Nauru</option>
                                                                               <option value="Nepal">Nepal</option>
                                                                               <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                               <option value="Netherlands The">Netherlands The</option>
                                                                               <option value="New Caledonia">New Caledonia</option>
                                                                               <option value="New Zealand">New Zealand</option>
                                                                               <option value="Nicaragua">Nicaragua</option>
                                                                               <option value="Niger">Niger</option>
                                                                               <option value="Nigeria">Nigeria</option>
                                                                               <option value="Niue">Niue</option>
                                                                               <option value="Norfolk Island">Norfolk Island</option>
                                                                               <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                               <option value="Norway">Norway</option>
                                                                               <option value="Oman">Oman</option>
                                                                               <option value="Pakistan">Pakistan</option>
                                                                               <option value="Palau">Palau</option>
                                                                               <option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option>
                                                                               <option value="Panama">Panama</option>
                                                                               <option value="Papua new Guinea">Papua new Guinea</option>
                                                                               <option value="Paraguay">Paraguay</option>
                                                                               <option value="Peru">Peru</option>
                                                                               <option value="Philippines">Philippines</option>
                                                                               <option value="Pitcairn Island">Pitcairn Island</option>
                                                                               <option value="Poland">Poland</option>
                                                                               <option value="Portugal">Portugal</option>
                                                                               <option value="Puerto Rico">Puerto Rico</option>
                                                                               <option value="Qatar">Qatar</option>
                                                                               <option value="Reunion">Reunion</option>
                                                                               <option value="Romania">Romania</option>
                                                                               <option value="Russia">Russia</option>
                                                                               <option value="Rwanda">Rwanda</option>
                                                                               <option value="Saint Helena">Saint Helena</option>
                                                                               <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                                               <option value="Saint Lucia">Saint Lucia</option>
                                                                               <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                               <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                                                                               <option value="Samoa">Samoa</option>
                                                                               <option value="San Marino">San Marino</option>
                                                                               <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                               <option value="Saudi Arabia">Saudi Arabia</option>
                                                                               <option value="Senegal">Senegal</option>
                                                                               <option value="Serbia">Serbia</option>
                                                                               <option value="Seychelles">Seychelles</option>
                                                                               <option value="Sierra Leone">Sierra Leone</option>
                                                                               <option value="Singapore">Singapore</option>
                                                                               <option value="Slovakia">Slovakia</option>
                                                                               <option value="Slovenia">Slovenia</option>
                                                                               <option value="Smaller Territories of the UK">Smaller Territories of the UK</option>
                                                                               <option value="Solomon Islands">Solomon Islands</option>
                                                                               <option value="Somalia">Somalia</option>
                                                                               <option value="South Africa">South Africa</option>
                                                                               <option value="South Georgia">South Georgia</option>
                                                                               <option value="South Sudan">South Sudan</option>
                                                                               <option value="Spain">Spain</option>
                                                                               <option value="Sri Lanka">Sri Lanka</option>
                                                                               <option value="Sudan">Sudan</option>
                                                                               <option value="Suriname">Suriname</option>
                                                                               <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>
                                                                               <option value="Swaziland">Swaziland</option>
                                                                               <option value="Sweden">Sweden</option>
                                                                               <option value="Switzerland">Switzerland</option>
                                                                               <option value="Syria">Syria</option>
                                                                               <option value="Taiwan">Taiwan</option>
                                                                               <option value="Tajikistan">Tajikistan</option>
                                                                               <option value="Tanzania">Tanzania</option>
                                                                               <option value="Thailand">Thailand</option>
                                                                               <option value="Togo">Togo</option>
                                                                               <option value="Tokelau">Tokelau</option>
                                                                               <option value="Tonga">Tonga</option>
                                                                               <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                                               <option value="Tunisia">Tunisia</option>
                                                                               <option value="Turkey">Turkey</option>
                                                                               <option value="Turkmenistan">Turkmenistan</option>
                                                                               <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                                                               <option value="Tuvalu">Tuvalu</option>
                                                                               <option value="Uganda">Uganda</option>
                                                                               <option value="Ukraine">Ukraine</option>
                                                                               <option value="United Arab Emirates">United Arab Emirates</option>
                                                                               <option value="United Kingdom">United Kingdom</option>
                                                                               <option value="United States">United States</option>
                                                                               <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                               <option value="Uruguay">Uruguay</option>
                                                                               <option value="Uzbekistan">Uzbekistan</option>
                                                                               <option value="Vanuatu">Vanuatu</option>
                                                                               <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                                                               <option value="Venezuela">Venezuela</option>
                                                                               <option value="Vietnam">Vietnam</option>
                                                                               <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                               <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                                                                               <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                                                               <option value="Western Sahara">Western Sahara</option>
                                                                               <option value="Yemen">Yemen</option>
                                                                               <option value="Yugoslavia">Yugoslavia</option>
                                                                               <option value="Zambia">Zambia</option>
                                                                               <option value="Zimbabwe">Zimbabwe</option>
                                                                       </select>
 </div> -->
 <div class="form-label-group">
   <label class="floating-label lab-2">Postal/Zip Code</label>
 <input type="text" name="zip" id="zip" maxlength="9" required="" class="form-control">
 
 </div>
 <br>
 <div class="form-label-group" style="border: 1px solid #e06464;padding: 20px 10px 10px 25px;border-radius: 5px;">
 <label><input type="checkbox" name="tos" required=""> By continuing, you agree to the <a href="/terms-conditions" target="_blank" style="text-decoration-line: underline;">Terms of Service</a> and <a href="/privacy-policy" target="_blank" style="text-decoration-line: underline;"> Privacy Policy.</a></label>
 </div>
 <!-- <div class="form-label-group">
 <input type="text" name="contact" maxlength="65" class="form-control">
 <label class="floating-label lab-2">Contact</label>
 </div> -->
 <!-- <div class="form-group">
 <div class="col-md-3">&nbsp;</div>
 <div class="col-md-6">
 <button style="width: 100%" class="btn btn-primary full-width" type="submit">Checkout <span class="btn-loader" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
 </div>
 <div class="col-md-3">&nbsp;</div>
 </div> -->
 </div>
 </div>
 </div>
 </div>
                            <div class="form-group">
 <div class="col-md-3">&nbsp;</div>
 <div class="col-md-12">
 <button style="width: 40%; margin:0 auto;" class="btn btn-primary full-width checkoutbtn" type="submit">Checkout <span class="btn-loader" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button>
 <!-- <button style="width: 40%; margin:0 auto;" class="btn btn-primary full-width paytracebtn " hidden type="button">Checkout <span class="btn-loader" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span></button> -->
 </div>
 <div class="col-md-3">&nbsp;</div>
 </div>
 </div>
 
 
 
 <div class="col-md-6">
 
   
 </div>
       </div>
 
      </div>
    </div>
  </div>
 </section>
 
 
 
 
 
 
 
   <!-- End your project here-->
 
   <!-- jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.3.2/jquery.payment.min.js"></script>
   <!-- Your custom scripts (optional) -->
   <script type="text/javascript">
     /**
  * paymentForm
  *
  * A plugin that validates a group of payment fields.  See jquery.payment.js
  * Adapted from https://gist.github.com/Air-Craft/1300890
  */
  
 // if (!window.L) { window.L = function () { console.log(arguments);} } // optional EZ quick logging for debugging
 
 (function( $ ){
     
     /**
      * The plugin namespace, ie for $('.selector').paymentForm(options)
      * 
      * Also the id for storing the object state via $('.selector').data()  
      */
     var PLUGIN_NS = 'paymentForm';
 
     var Plugin = function ( target, options )  { 
         this.$T = $(target); 
         this._init( target, options ); 
 
         /** #### OPTIONS #### */
        this.options= $.extend(
             true,               // deep extend
             {
                 DEBUG: false
             },
             options
         );
         
         this._cardIcons = {
             "visa"          : "fa fa-cc-visa",
             "mastercard"    : "fa fa-cc-mastercard",
             "amex"          : "fa fa-cc-amex",
             "dinersclub"    : "fa fa-cc-diners-club",
             "discover"      : "fa fa-cc-discover",
             "jcb"           : "fa fa-cc-jcb",
             "default"       : "fa fa-credit-card-alt"
         };
         
         return this; 
     }
 
     /** #### INITIALISER #### */
     Plugin.prototype._init = function ( target, options ) { 
         var base = this;
         
         base.number = this.$T.find("[data-payment='cc-number']");
         base.exp = this.$T.find("[data-payment='cc-exp']");
         base.cvc = this.$T.find("[data-payment='cc-cvc']");
         base.brand = this.$T.find("[data-payment='cc-brand']");
         
         // Set up all payment fields inside the payment form
         base.number.payment('formatCardNumber').data('payment-error-message', 'Please enter a valid credit card number.');
         base.exp.payment('formatCardExpiry').data('payment-error-message', 'Please enter a valid expiration date.');
         base.cvc.payment('formatCardCVC').data('payment-error-message', 'Please enter a valid CVC.');
         
         // Update card type on input
         base.number.on('input', function() {
             base.cardType = $.payment.cardType(base.number.val());
             var fg = base.number.closest('.form-group');
             fg.toggleClass('has-feedback', true);
             fg.find('.form-control-feedback').remove();            
             if (base.cardType) {
                 base.brand.text(base.cardType);
                 // Also set an icon
                 var icon = base._cardIcons[base.cardType] ? base._cardIcons[base.cardType] : base._cardIcons["default"];
                 fg.append("<i class='" + icon + " fa-lg payment-form-icon form-control-feedback'></i>");
             } else {
                 $("[data-payment='cc-brand']").text("");
             }
         });
         
         // Validate card number on change
         base.number.on('change', function () {
             base._setValidationState($(this), !$.payment.validateCardNumber($(this).val()));
         });
 
         // Validate card expiry on change
         base.exp.on('change', function () {
             base._setValidationState($(this), !$.payment.validateCardExpiry($(this).payment('cardExpiryVal')));
         });
         
         // Validate card cvc on change
         base.cvc.on('change', function () {
             base._setValidationState($(this), !$.payment.validateCardCVC($(this).val(), base.cardType));
         });   
     };
 
     /** #### PUBLIC API (see notes) #### */
     Plugin.prototype.valid = function () {
         var base = this;
         
         var num_valid = $.payment.validateCardNumber(base.number.val());
         var exp_valid = $.payment.validateCardExpiry(base.exp.payment('cardExpiryVal'));
         var cvc_valid = $.payment.validateCardCVC(base.cvc.val(), base.cardType);
         
         base._setValidationState(base.number, !num_valid);
         base._setValidationState(base.exp, !exp_valid);
         base._setValidationState(base.cvc, !cvc_valid);
         
         return num_valid && exp_valid && cvc_valid;
     }
  
     /** #### PRIVATE METHODS #### */
     Plugin.prototype._setValidationState = function(el, erred) {
         var fg = el.closest('.form-group');
         fg.toggleClass('has-error', erred).toggleClass('has-success', !erred);
         fg.find('.payment-error-message').remove();
         if (erred) {
             fg.append("<span class='text-danger payment-error-message'>" + el.data('payment-error-message') + "</span>");
         }
         return this;
     }  
     
     /**
      * EZ Logging/Warning (technically private but saving an '_' is worth it imo)
      */    
     Plugin.prototype.DLOG = function () 
     {
         if (!this.DEBUG) return;
         for (var i in arguments) {
             console.log( PLUGIN_NS + ': ', arguments[i] );    
         }
     }
     Plugin.prototype.DWARN = function () 
     {
         this.DEBUG && console.warn( arguments );    
     }
 
 
 /*###################################################################################
  * JQUERY HOOK
  ###################################################################################*/
 
     /**
      * Generic jQuery plugin instantiation method call logic 
      * 
      * Method options are stored via jQuery's data() method in the relevant element(s)
      * Notice, myActionMethod mustn't start with an underscore (_) as this is used to
      * indicate private methods on the PLUGIN class.   
      */    
     $.fn[ PLUGIN_NS ] = function( methodOrOptions ) {
         if (!$(this).length) {
             return $(this);
         }
         var instance = $(this).data(PLUGIN_NS);
             
         // CASE: action method (public method on PLUGIN class)        
         if ( instance 
                 && methodOrOptions.indexOf('_') != 0 
                 && instance[ methodOrOptions ] 
                 && typeof( instance[ methodOrOptions ] ) == 'function' ) {
             
             return instance[ methodOrOptions ]( Array.prototype.slice.call( arguments, 1 ) ); 
                 
                 
         // CASE: argument is options object or empty = initialise            
         } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {
 
             instance = new Plugin( $(this), methodOrOptions );    // ok to overwrite if this is a re-init
             $(this).data( PLUGIN_NS, instance );
             return $(this);
         
         // CASE: method called before init
         } else if ( !instance ) {
             $.error( 'Plugin must be initialised before using method: ' + methodOrOptions );
         
         // CASE: invalid method
         } else if ( methodOrOptions.indexOf('_') == 0 ) {
             $.error( 'Method ' +  methodOrOptions + ' is private!' );
         } else {
             $.error( 'Method ' +  methodOrOptions + ' does not exist.' );
         }
     };
 })(jQuery);
 
 /* Initialize validation */
 var payment_form = $('#payment-form').paymentForm();
 
 $('#validate').on('click', function(){
   var valid = $('#payment-form').paymentForm('valid');
   if (valid)
    paymentForm('valid');
   else
    paymentForm('invalid');
 });
 
   </script>
 
 
 <style>
 .payment-form-icon {
     line-height: 46px;
     margin-right: 10px;
     color: #185873 !important;
     position: absolute;
     right: 0;
     font-size: 30px;
     top: 35px;
     right: 15px;
 }
 
 .text-small {
     color: #e0e0e0!important;
 }
 
    .main {
 
     background-repeat: no-repeat;
     background-size:cover;
         min-height: 100vh;
 }
  
 
 .card-signin {
     border: 0;
     border-radius: 0;
     margin: 0 auto;
     margin-top: 160px;
     margin-bottom: 120px !important;
     padding: 35px 60px;
     background-color: #28ace27d !important;
 }
 
 div#payment-stripe label {
     color: white;
     font-weight: bold;
 }
 .orderFormInput {
     height: 50px;
     border-radius: 0;
         margin-bottom: 20px;
 }
 
 
 .paymentForm{
       color: white;
     text-align: center;
     font-size: 50px;
     font-weight: 700;
     margin-bottom: 30px;
 }
 
 .SubmitBtn{
   color: white;
   font-size: 16px;
   padding: 12px;
   width: 100%;
   border: none;
   background-color: #000;
   margin-top: 15px;
 }
 
 div#payment-form label {
     color: white;
     font-weight: bold;
 }
 
 /* width */
 
 p.text-right.contaPhn {
     display: flex;
     height: 100%;
     align-items: center;
     justify-content: flex-end;
     color: #fff;
 }
 
 p.text-right.contaPhn a {
     color: #fff;
     padding-left: 3px;
 }
 h2.headingBox {
     font-size: 20px;
     color: #343a40;
 }
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm {
 position: relative;
 display: inline-block;
 width: 100%;
 min-height: 35px;
 min-width: 200px;
 max-width: 750px;
 font-size: 0;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > iframe {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > iframe.component-frame {
 z-index: 100;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > iframe.prerender-frame {
 transition: opacity .2s linear;
 z-index: 200;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > iframe.visible {
 opacity: 1;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > iframe.invisible {
 opacity: 0;
 pointer-events: none;
 }
 
 #zoid-paypal-buttons-ca1d110c01_mda6mdu6ndm > .smart-menu {
 position: absolute;
 z-index: 300;
 top: 0;
 left: 0;
 width: 100%;
 }
 .payFormBox .form-control.form-control-lg {
     height: 40px;
 }
 .payFormBox label {
     padding-top: 5px;
 }
 .payFormBox .form-control.form-control-lg::placeholder {
     font-size: 16px;
 }
 .payBoxImg.text-center {
     margin-bottom: 25px;
 }
 </style>
 
 
 </body>
 </html>
 