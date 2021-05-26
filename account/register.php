<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="../css/mall/style.css">
        <link rel="shortcut icon" href="#" />
        <script src="../JavaScript/security/validation.js">
            function hidetype(){}
            function showtype(){}
            function retypePass(){}
            function validatePhone(){}
            function validateEmail(){}
            function validatePassword(){}

            // var validateForm = function(){
            //     alert('go here');
            //     return false;
                // return validateEmail && validatePassword && validatePhone;
            }
        </script>
        <?php

            $readed = false;
            $dup_mail = "";
            $dup_phone ="";
            $dup_username ="";
            // $validation = "";
            if(!$readed){
                $userdataFile =  fopen("../data/account/userdata.csv","r");
                $email_userdata = array();
                $phone_userdata = array();
                $username_userdata = array();
                while(($data = fgetcsv($userdataFile)) !== FALSE){
                    array_push($email_userdata, $data[0]);
                    array_push($phone_userdata, $data[1]);
                    array_push($username_userdata, $data[2]);
                }
                fclose($userdataFile);
            }

            $email = "";
            $phone = "";
            $username = "";
            $password = "";
            $avatar = "";
            $first_name = "";
            $last_name = "";
            $address = "";
            $city = "";
            $zip = "";
            $country = "";
            $account_type = "";
            
            function clean_text($string)
            {
            $string = trim($string);
            $string = stripslashes($string);
            $string = htmlspecialchars($string);
            return $string;
            }                            
            if ($_SERVER["REQUEST_METHOD"] === "POST")
            {              
                $email = clean_text($_POST["email"]);
                // $email_pattern= "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{3,})$/";
                $phone = clean_text($_POST["phone"]);
                $username = clean_text($_POST["username"]);
                $error = false;
                if(in_array($email, $email_userdata)){
                    $dup_mail = "Email Existed";
                    $error = true;
                }
                // if(preg_match($email,$email_pattern) !== 0){
                //     echo 'email: '. $email;
                //     $validation = "Not a valid email";
                //     $error =  true;
                // }else{
                //     echo "here";
                // }
                if(in_array($phone, $phone_userdata)){
                    $dup_phone = "Phone Existed";
                    $error = true;
                }
                if(in_array($username, $username_userdata)){
                    $dup_username = "Username Existed";
                    $error = true;
                }
                if(!$error) {                    
                    $password = password_hash(clean_text($_POST["pass"]), PASSWORD_DEFAULT);
                    $image_location = "../data/avatar/";                
                    $upload_image = $image_location . basename($_FILES["avatar"]["name"]); 
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], $upload_image);    
                    $avatar = clean_text($upload_image);
                    $first_name = clean_text($_POST["fname"]);
                    $last_name = clean_text($_POST["lname"]);
                    $address = clean_text($_POST["address"]);
                    $city = clean_text($_POST["city"]);
                    $zip = clean_text($_POST["zip"]);
                    $country = clean_text($_POST["country"]);
                    $account_type = clean_text($_POST["acctype"]);
                    $file_open = fopen("../data/account/userdata.csv", "a");
                    $form_data = array(
                        "email" => $email,
                        "phone" => $phone,
                        "username" => $username,
                        "pass" => $password,
                        "avatar" => $avatar,
                        "fname" => $first_name,
                        "lname" => $last_name,
                        "address" => $address,
                        "city" => $city,
                        "zip" => $zip,
                        "country" => $country,
                        "acctype" => $account_type
                    );
                    fputcsv($file_open, $form_data);
                    $email = "";
                    $phone = "";
                    $username = "";
                    $password = "";
                    $avatar = "";
                    $first_name = "";
                    $last_name = "";
                    $address = "";
                    $city = "";
                    $zip = "";
                    $country = "";
                    $account_type = "";
                    fclose($file_open);
                }
            }
           
        ?>
    </head>
    <body>
        <!-- Footer -->       
        <header class="clearfix">
            <div class="logo">
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a href="../index.html"><img src="../img/logo.png" alt="logo"></a>
            </div>
            <nav class="">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../mall/about.html">About us</a></li>
                    <li><a href="../mall/fees.html">Fees</a></li>
                    <li><a href="../account/myaccount.php">My Account</a></li>
                    <li>
                        <a href="#">Browse</a>
                        <ul>
                            <li><a href="../mall/browse_name.html">Browse Stores by Name</a></li>
                            <li><a href="../mall/browse_catagory.html">Browse Stores by Category</a></li>
                        </ul>
                    </li>
                    <li><a href="../mall/faq.html">FAQs</a></li>
                    <li><a href="../mall/contact.html">Contact</a></li>
                     <li><a href="../account/login.php">Login</a></li>
                    <li><a href="../account/register.php">Register</a></li>
                </ul>
            </nav>
        </header>
        <!-- End of Header --> 

        <!-- Body --> 
        <main>
        <div class="register">
            <h3>Register Account</h3>
            <form method="POST" enctype="multipart/form-data" >
                <div>
                    <label for="email"><b>Email Address: </b></label>
                    <input type="text" name="email" id="email" onkeyup="validateEmail();" required>
                    <span id=validEmail></span>
                    <span id="error" name="errormsg"><?php echo $dup_mail ?></span>
                </div>
                <div>
                    <label for="phone"><b>Phone number:</b></label>
                    <input type="text" name="phone" id="phone" class="phone" required onkeyup="validatePhone();">
                    <span id="validPhone"></span>
                    <span id="error" name="errormsg"><?php echo $dup_phone ?></span>
                </div>
                <div>
                    <label for="username"><b>Username:</b></label>
                    <input type="text" name="username" id="username" required>
                    <span id="error" name="errormsg"><?php echo $dup_username ?></span>
                </div>
                <div>
                    <label for="password"><b>Password:</b></label>
                    <input type="password" name="pass" id="pass" onkeyup="validatePassword();"  maxlength="20" required>
                    <span id="pdmsg"></span>
                </div>
                <div>
                    <label for="password"><b>Retype Password:</b></label>
                    <input type="password" name="confirmpass" id="confirmpass" onkeyup="retypePass();">
                    <span id="correctPassword"></span>
                </div>
                <div>
                    <label for="avatar"><b>Select image:</b></label>
                    <input type="file" id="avatar" name="avatar" accept="image/*">
                </div>
                <div>
                    <label for="fname"><b>First Name:</b></label>
                    <input type="text" name="fname" id="fname" minlength="3"  required>
                </div>
                <div>
                    <label for="lname:"><b>Last Name:</b></label>
                    <input type="text" name="lname" id="lname" minlength="3"  required>
                </div>
                <div>
                    <label for="address"><b>Address:</b></label>
                    <input type="text" name="address" id="address" minlength="3" required>
                </div>
                <div>
                    <label for="city"><b>City:</b></label>
                    <input type="text" name="city" id="city" minlength="3"  required>
                </div>
                <div>
                    <label for="zip"><b>Zipcode:</b></label>
                    <input type="text" name="zip" id="zip" minlength="4" maxlength="6" required>
                </div>
                <div>
                    <label for="country"><b>Country</b></label>
                    <select id="country" name="country">
                        <option value="none">---Select a Country---</option>
                        <option value="Algeria">Algeria (+213)</option>
                        <option value="Andorra">Andorra (+376)</option>
                        <option value="Angola">Angola (+244)</option>
                        <option value="Anguilla">Anguilla (+1264)</option>
                        <option value="Antigua">Antigua &amp; Barbuda (+1268)</option>
                        <option value="Argentina">Argentina (+54)</option>
                        <option value="Armenia">Armenia (+374)</option>
                        <option value="Aruba">Aruba (+297)</option>
                        <option value="Australia">Australia (+61)</option>
                        <option value="Austria">Austria (+43)</option>
                        <option value="Azerbaijan">Azerbaijan (+994)</option>
                        <option value="Bahamas">Bahamas (+1242)</option>
                        <option value="Bahrain">Bahrain (+973)</option>
                        <option value="Bangladesh">Bangladesh (+880)</option>
                        <option value="Barbados">Barbados (+1246)</option>
                        <option value="Belarus">Belarus (+375)</option>
                        <option value="Belgium">Belgium (+32)</option>
                        <option value="Belize">Belize (+501)</option>
                        <option value="Benin">Benin (+229)</option>
                        <option value="Bermuda">Bermuda (+1441)</option>
                        <option value="Bhutan">Bhutan (+975)</option>
                        <option value="Bolivia">Bolivia (+591)</option>
                        <option value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>
                        <option value="Botswana">Botswana (+267)</option>
                        <option value="Brazil">Brazil (+55)</option>
                        <option value="Brunei">Brunei (+673)</option>
                        <option value="Bulgaria">Bulgaria (+359)</option>
                        <option value="Burkina Faso">Burkina Faso (+226)</option>
                        <option value="Burundi">Burundi (+257)</option>
                        <option value="Cambodia">Cambodia (+855)</option>
                        <option value="Cameroon">Cameroon (+237)</option>
                        <option value="Canada">Canada (+1)</option>
                        <option value="Cape Verde Islands">Cape Verde Islands (+238)</option>
                        <option value="Cayman Islands">Cayman Islands (+1345)</option>
                        <option value="Central African Republic">Central African Republic (+236)</option>
                        <option value="Chile">Chile (+56)</option>
                        <option value="China">China (+86)</option>
                        <option value="Colombia">Colombia (+57)</option>
                        <option value="Comoros">Comoros (+269)</option>
                        <option value="Congo">Congo (+242)</option>
                        <option value="Cook Islands">Cook Islands (+682)</option>
                        <option value="Costa Rica">Costa Rica (+506)</option>
                        <option value="Croatia">Croatia (+385)</option>
                        <option value="Cuba">Cuba (+53)</option>
                        <option value="Cyprus North">Cyprus North (+90392)</option>
                        <option value="Cyprus South">Cyprus South (+357)</option>
                        <option value="Czech Republic">Czech Republic (+42)</option>
                        <option value="Denmark">Denmark (+45)</option>
                        <option value="Djibouti">Djibouti (+253)</option>
                        <option value="Dominica">Dominica (+1809)</option>
                        <option value="Dominican Republic">Dominican Republic (+1809)</option>
                        <option value="Ecuador">Ecuador (+593)</option>
                        <option value="Egypt">Egypt (+20)</option>
                        <option value="El Salvador">El Salvador (+503)</option>
                        <option value="Equatorial Guinea ">Equatorial Guinea (+240)</option>
                        <option value="Eritrea">Eritrea (+291)</option>
                        <option value="Estonia">Estonia (+372)</option>
                        <option value="Ethiopia">Ethiopia (+251)</option>
                        <option value="Falkland Islands">Falkland Islands (+500)</option>
                        <option value="Faroe Islands">Faroe Islands (+298)</option>
                        <option value="Fiji">Fiji (+679)</option>
                        <option value="Finland">Finland (+358)</option>
                        <option value="France">France (+33)</option>
                        <option value="French Guiana">French Guiana (+594)</option>
                        <option value="French Polynesia ">French Polynesia (+689)</option>
                        <option value="GGabonA">Gabon (+241)</option>
                        <option value="Gambia">Gambia (+220)</option>
                        <option value="Georgia">Georgia (+7880)</option>
                        <option value="Germany">Germany (+49)</option>
                        <option value="Ghana">Ghana (+233)</option>
                        <option value="Gibraltar">Gibraltar (+350)</option>
                        <option value="Greece">Greece (+30)</option>
                        <option value="Greenland">Greenland (+299)</option>
                        <option value="Grenada">Grenada (+1473)</option>
                        <option value="Guadeloupe">Guadeloupe (+590)</option>
                        <option value="Guam">Guam (+671)</option>
                        <option value="Guatemala">Guatemala (+502)</option>
                        <option value="Guinea">Guinea (+224)</option>
                        <option value="Guinea">Guinea - Bissau (+245)</option>
                        <option value="Guyana">Guyana (+592)</option>
                        <option value="Haiti">Haiti (+509)</option>
                        <option value="Honduras">Honduras (+504)</option>
                        <option value="Hong Kong ">Hong Kong (+852)</option>
                        <option value="Hungary">Hungary (+36)</option>
                        <option value="Iceland">Iceland (+354)</option>
                        <option value="India">India (+91)</option>
                        <option value="Indonesia">Indonesia (+62)</option>
                        <option value="Iran">Iran (+98)</option>
                        <option value="Iraq">Iraq (+964)</option>
                        <option value="Ireland">Ireland (+353)</option>
                        <option value="Israel">Israel (+972)</option>
                        <option value="Italy">Italy (+39)</option>
                        <option value="Jamaica">Jamaica (+1876)</option>
                        <option value="Japan">Japan (+81)</option>
                        <option value="Jordan">Jordan (+962)</option>
                        <option value="Kazakhstan">Kazakhstan (+7)</option>
                        <option value="Kenya">Kenya (+254)</option>
                        <option value="Kiribati">Kiribati (+686)</option>
                        <option value="Korea North">Korea North (+850)</option>
                        <option value="Korea South">Korea South (+82)</option>
                        <option value="Kuwait">Kuwait (+965)</option>
                        <option value="Kyrgyzstan">Kyrgyzstan (+996)</option>
                        <option value="Laos">Laos (+856)</option>
                        <option value="Latvia">Latvia (+371)</option>
                        <option value="Lebanon">Lebanon (+961)</option>
                        <option value="Lesotho">Lesotho (+266)</option>
                        <option value="Liberia">Liberia (+231)</option>
                        <option value="Libya">Libya (+218)</option>
                        <option value="Liechtenstein">Liechtenstein (+417)</option>
                        <option value="Lithuania">Lithuania (+370)</option>
                        <option value="Luxembourg">Luxembourg (+352)</option>
                        <option value="Macao">Macao (+853)</option>
                        <option value="Macedonia">Macedonia (+389)</option>
                        <option value="Madagascar">Madagascar (+261)</option>
                        <option value="Malawi">Malawi (+265)</option>
                        <option value="Malaysia">Malaysia (+60)</option>
                        <option value="Maldives">Maldives (+960)</option>
                        <option value="Mali">Mali (+223)</option>
                        <option value="Malta">Malta (+356)</option>
                        <option value="Marshall Islands">Marshall Islands (+692)</option>
                        <option value="Martinique">Martinique (+596)</option>
                        <option value="Mauritania">Mauritania (+222)</option>
                        <option value="Mayotte">Mayotte (+269)</option>
                        <option value="Mexico">Mexico (+52)</option>
                        <option value="Micronesia">Micronesia (+691)</option>
                        <option value="Moldova">Moldova (+373)</option>
                        <option value="Monaco">Monaco (+377)</option>
                        <option value="Mongolia">Mongolia (+976)</option>
                        <option value="Montserrat">Montserrat (+1664)</option>
                        <option value="Morocco">Morocco (+212)</option>
                        <option value="Mozambique">Mozambique (+258)</option>
                        <option value="Myanmar">Myanmar (+95)</option>
                        <option value="Namibia">Namibia (+264)</option>
                        <option value="Nauru">Nauru (+674)</option>
                        <option value="Nepal">Nepal (+977)</option>
                        <option value="Netherlands">Netherlands (+31)</option>
                        <option value="New Caledonia">New Caledonia (+687)</option>
                        <option value="New Zealand">New Zealand (+64)</option>
                        <option value="Nicaragua">Nicaragua (+505)</option>
                        <option value="Niger">Niger (+227)</option>
                        <option value="Nigeria">Nigeria (+234)</option>
                        <option value="Niue">Niue (+683)</option>
                        <option value="Norfolk Islands">Norfolk Islands (+672)</option>
                        <option value="Northern Marianas">Northern Marianas (+670)</option>
                        <option value="Norway">Norway (+47)</option>
                        <option value="Oman">Oman (+968)</option>
                        <option value="Palau">Palau (+680)</option>
                        <option value="Panama">Panama (+507)</option>
                        <option value="Papua New Guinea">Papua New Guinea (+675)</option>
                        <option value="Paraguay">Paraguay (+595)</option>
                        <option value="Peru">Peru (+51)</option>
                        <option value="Philippines">Philippines (+63)</option>
                        <option value="Poland">Poland (+48)</option>
                        <option value="Portugal">Portugal (+351)</option>
                        <option value="Puerto Rico">Puerto Rico (+1787)</option>
                        <option value="Qatar">Qatar (+974)</option>
                        <option value="Reunion">Reunion (+262)</option>
                        <option value="Romania">Romania (+40)</option>
                        <option value="Russia">Russia (+7)</option>
                        <option value="Rwanda">Rwanda (+250)</option>
                        <option value="San Marino">San Marino (+378)</option>
                        <option value="Sao Tome & Principe">Sao Tome &amp; Principe (+239)</option>
                        <option value="Saudi Arabia">Saudi Arabia (+966)</option>
                        <option value="Senegal">Senegal (+221)</option>
                        <option value="Serbia">Serbia (+381)</option>
                        <option value="Seychelles">Seychelles (+248)</option>
                        <option value="Sierra Leone">Sierra Leone (+232)</option>
                        <option value="Singapore">Singapore (+65)</option>
                        <option value="Slovak Republic">Slovak Republic (+421)</option>
                        <option value="Slovenia">Slovenia (+386)</option>
                        <option value="Solomon Islands">Solomon Islands (+677)</option>
                        <option value="Somalia">Somalia (+252)</option>
                        <option value="South Africa">South Africa (+27)</option>
                        <option value="Spain">Spain (+34)</option>
                        <option value="Sri Lanka">Sri Lanka (+94)</option>
                        <option value="St. Helena">St. Helena (+290)</option>
                        <option value="St. Kitts">St. Kitts (+1869)</option>
                        <option value="St. Lucia">St. Lucia (+1758)</option>
                        <option value="Sudan">Sudan (+249)</option>
                        <option value="Suriname">Suriname (+597)</option>
                        <option value="Swaziland">Swaziland (+268)</option>
                        <option value="Sweden">Sweden (+46)</option>
                        <option value="Switzerland">Switzerland (+41)</option>
                        <option value="Syria">Syria (+963)</option>
                        <option value="Taiwan">Taiwan (+886)</option>
                        <option value="Tajikstan">Tajikstan (+7)</option>
                        <option value="Thailand">Thailand (+66)</option>
                        <option value="Togo">Togo (+228)</option>
                        <option value="Tonga">Tonga (+676)</option>
                        <option value="Trinidad & Tobago">Trinidad &amp; Tobago (+1868)</option>
                        <option value="Tunisia">Tunisia (+216)</option>
                        <option value="Turkey">Turkey (+90)</option>
                        <option value="Turkmenistan">Turkmenistan (+7)</option>
                        <option value="Turkmenistan">Turkmenistan (+993)</option>
                        <option value="Turks & Caicos Islands">Turks &amp; Caicos Islands (+1649)</option>
                        <option value="Tuvalu">Tuvalu (+688)</option>
                        <option value="Uganda">Uganda (+256)</option>
                        <!-- <option value="GB" "44">UK (+44)</option> -->
                        <option value="Ukraine">Ukraine (+380)</option>
                        <option value="United Arab Emirates">United Arab Emirates (+971)</option>
                        <option value="Uruguay">Uruguay (+598)</option>
                        <!-- <option value="US" "1">USA (+1)</option> -->
                        <option value="Uzbekistan">Uzbekistan (+7)</option>
                        <option value="Vanuatu">Vanuatu (+678)</option>
                        <option value="Vatican City"></option>Vatican City (+379)</option>
                        <option value="Venezuela">Venezuela (+58)</option>
                        <option value="Vietnam">Vietnam (+84)</option>
                        <option value="Virgin Islands - British">Virgin Islands - British (+1284)</option>
                        <option value="Virgin Islands - US ">Virgin Islands - US (+1340)</option>
                        <option value="Wallis & Futuna">Wallis &amp; Futuna (+681)</option>
                        <option value="Yemen">Yemen (North)(+969)</option>
                        <option value="Yemen">Yemen (South)(+967)</option>
                        <option value="Zambia">Zambia (+260)</option>
                        <option value="Zimbabwe">Zimbabwe (+263)</option>
                    </select>
                </div>
                <div>
                    <label for="account_type"><b>Account Type:</b></label>
                    <input type="radio" name="acctype" value="Store owner" onclick="showtype();">
                    <span>Store Owner</span>
                    <input type="radio" name="acctype" value="Shopper" onclick="hidetype();">
                    Shopper <br><br>
                    <div id="Bussinesstype" class="hide">
                        <label for="bussname"><b>Bussiness name: </b></label>
                        <input type="text" name="bussname" id="bussname">
                        <label for="stname"><b>Store name:</b></label>
                        <input type="text" name="stname" id="stname" >
                        <label for="category"><b>Store Catetory:</b></label>
                        <select id="category" name="category" >
                            <option value="select">---Select a Category---</option>
                            <option value="Department">Department Store</option>
                            <option value="Grocery">Grocery Store</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="cloth">Clothing Store</option>
                            <option value="accessory">Accessory Store</option>
                            <option value="pharmacies">Pharmacies Store</option>
                            <option value="tech">Technology Store</option>
                            <option value="pet">Pet Store</option>
                            <option value="toy">Toy Store</option>
                            <option value="specialty">Specialty Store</option>
                            <option value="Thrift">Thrift Store</option>
                            <option value="service">Services</option>
                            <option value="kiosks">Kiosks Store</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="reset">Clear</button>
                    <button type="submit" id="submit" value="Submit">Submit</input>    
                </div>
            </form>
        </div>
        </main>
        <!-- End of Body --> 

        <!-- Footer --> 
        <footer class="clearfix">
            <nav>
                <ul>
                    <li><a href="../mall/copyright.html">Copyright</a> </li>
                    <li><a href="../mall/termofservice.html">Term of service</a> </li>
                    <li><a href="../mall/privatepolicy.html">Private Policy</a> </li>
                </ul>
            </nav>
        </footer>
        <!-- End of Footer --> 
    </body>
</html>