<?php
session_start();

function generate_my_uuid() {
	return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
		mt_rand( 0, 0xffff ),
		mt_rand( 0, 0x0fff ) | 0x4000,
		mt_rand( 0, 0x3fff ) | 0x8000,
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
	);
}

if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}

require_once 'securimage/securimage.php';
include 'dbconnect.php';
connectDB();

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']);
	$email = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['email']);
	$password = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['password']);
	$cpassword = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['cpassword']);
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
#	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
#		$error = true;
#		$email_error = "Please Enter Valid Email ID";
#	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}


    $image = new Securimage();
    if ($image->check($_POST['captcha_code']) != true) {
	   $error = true;
	   $captcha_error = "Captcha entry incorrect";
    }
	
	
	if (!$error) {
		$qq = "INSERT INTO users(name,email,password,uuid) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "',uuid())	";
		if(mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RTI Registration</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/grid.css"/>
    <link rel="stylesheet" type="text/css" href="css/glyphicon.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/glyphicon.css">
    <!--  <script src="js/jquery-1.10.2.js"></script>-->
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="inner-wrapper">
		<!-- add header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="images/Logo_RH_RGB_Reverse.png" style="width: 100px; margin: 0 0 0 0;"></a>
			</div>
		<!-- menu items -->
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php" title="Login" alt="Login"><span class="glyphicon glyphicon-log-in" style="margin-top: 5px; color: #fff;"></span></a></li>
					<li class="active"><a href="register.php" title="Register" alt="Register"><span class="glyphicon glyphicon-user" style="margin-top: 5px; color: #fff;"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<div class="grid header">
         <div class="xl-colspan-12">
            <div class="inner-wrapper">
               <p style="color: #fff; font-size: 18px; margin-bottom: 0; padding-bottom: 0; line-height: 18px; margin-top: 35px; font-family: 'overpass';"><strong>RED HAT</strong><sup>&reg;</sup></p>
               <p style="color: #fff; font-size: 25px; line-height: 25px; margin-top: 0; padding-top: 0; font-family: 'overpass';">SERVICES</p>
               <div>
                  <p id="slogan" style="font-family: 'overpass';">IS YOUR IT ORGANISATION<br />
                     READY TO INNOVATE?
                  </p>
               </div>
            </div>
         </div>
      </div>

<div class="grid">
	<div class="xl-colspan-12">
		<div class="inner-wrapper">
			<div class="grid">
   				<div class="xl-colspan-7 m-colspan-12">
   					<p style="font-size: 20px; line-height: 22px; font-weight: bold; margin-bottom: 35px; margin-top: 0; font-family: 'overpass'; margin-top: 25px;">WELCOME TO THE "READY TO INNOVATE?" ASSESSMENT.</p>
                           <p style="font-family: 'overpass';">
                              <strong>AIM</strong>: 
                           </p>
                           <ul style="margin: 15px 0 20px 20px; padding: 0;">
                              <li>
                                 <p style="font-family: 'overpass';">To understand the wider issues around PaaS / DevOps adoption; what will make it successful or why has it stalled.  In parallel with technical PoCs or pilots.</p>
                              </li>
                              <li>
                                 <p style="font-family: 'overpass';">To understand the maturity of your organisation across 5 outlined areas of interest</p>
                              </li>
                              <li>
                                 <p style="font-family: 'overpass';">To identify next steps, using follow-up sessions from Red Hat Consulting to do in depth studies</p>
                              </li>
                           </ul>
                           <p style="margin-bottom: 25px; font-family: 'overpass';"><strong>To complete the assessment, please use the tabs and check the comment which better suits your environment.  Once complete, click "Submit" from the Submit Tab.</strong></p>
                </div>

                <div class="xl-colspan-5 m-colspan-12">
   					<div class="grey-box" style="margin-bottom: 80px;">
   						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
							<fieldset>
								<legend style="font-family: 'overpass';"><span class="subhead" style="font-weight: normal;">REGISTRATION</span><br><span style="font-weight: bold;">PLEASE REGISTER HERE.</span></legend>

								<span class="text-success" style="color: #3c763d; !important"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
								<span class="text-danger" style="color: #cc0000;"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Full name</label>
									<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
									<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
									<p style="font-family: 'overpass'; font-size: 12px; font-weight: bold; padding-top: 10px;">Please do not use any special characters!</p>
								</div>
								
								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Email</label>
									<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
									<span class="text-danger" style="color: #cc0000;"><?php if (isset($email_error)) echo $email_error; ?></span>
								</div>

								<div class="form-group">
									<label style="font-family: 'overpass';">
			                           Country
			                        </label>
			                        <select name="register_country" class="form-control" style="border-radius: 0;">
			                            <option value="" style="font-family: 'overpass';">- Please select -</option> <option value="AF">Afghanistan</option> <option value="AL">Albania</option> <option value="DZ">Algeria</option> <option value="AS">American Samoa</option> <option value="AD">Andorra</option> <option value="AO">Angola</option> <option value="AI">Anguilla</option> <option value="AQ">Antarctica</option> <option value="AG">Antigua and Barbuda</option> <option value="AR">Argentina</option> <option value="AM">Armenia</option> <option value="AW">Aruba</option> <option value="AU">Australia</option> <option value="AT">Austria</option> <option value="AZ">Azerbaijan</option> <option value="BS">Bahamas</option> <option value="BH">Bahrain</option> <option value="BD">Bangladesh</option> <option value="BB">Barbados</option> <option value="BY">Belarus</option> <option value="BE">Belgium</option> <option value="BZ">Belize</option> <option value="BJ">Benin</option> <option value="BM">Bermuda</option> <option value="BT">Bhutan</option> <option value="BO">Bolivia</option> <option value="BA">Bosnia and Herzegovina</option> <option value="BW">Botswana</option> <option value="BV">Bouvet Island</option> <option value="BR">Brazil</option> <option value="IO">British Indian Ocean Territory</option> <option value="BN">Brunei Darussalam</option> <option value="BG">Bulgaria</option> <option value="BF">Burkina Faso</option> <option value="BI">Burundi</option> <option value="KH">Cambodia</option> <option value="CM">Cameroon</option> <option value="CA">Canada</option> <option value="CV">Cape Verde</option> <option value="KY">Cayman Islands</option> <option value="CF">Central African Republic</option> <option value="TD">Chad</option> <option value="CL">Chile</option> <option value="CN">China</option> <option value="CX">Christmas Island</option> <option value="CC">Cocos (Keeling) Islands</option> <option value="CO">Colombia</option> <option value="KM">Comoros</option> <option value="CG">Congo</option> <option value="CK">Cook Islands</option> <option value="CR">Costa Rica</option> <option value="CI">Cote d'Ivoire</option> <option value="HR">Croatia</option> <option value="CY">Cyprus</option> <option value="CZ">Czech Republic</option> <option value="DK">Denmark</option> <option value="DJ">Djibouti</option> <option value="DM">Dominica</option> <option value="DO">Dominican Republic</option> <option value="TP">East Timor</option> <option value="EC">Ecuador</option> <option value="EG">Egypt</option> <option value="SV">El Salvador</option> <option value="GQ">Equatorial Guinea</option> <option value="ER">Eritrea</option> <option value="EE">Estonia</option> <option value="ET">Ethiopia</option> <option value="EU">Europe</option> <option value="FK">Falkland Islands (Malvinas)</option> <option value="FO">Faroe Islands</option> <option value="FJ">Fiji</option> <option value="FI">Finland</option> <option value="FR">France</option> <option value="FX">France, Metropolitan</option> <option value="GF">French Guiana</option> <option value="PF">French Polynesia</option> <option value="TF">French Southern Territories</option> <option value="GA">Gabon</option> <option value="GM">Gambia</option> <option value="GE">Georgia</option> <option value="DE">Germany</option> <option value="GH">Ghana</option> <option value="GI">Gibraltar</option> <option value="GR">Greece</option> <option value="GL">Greenland</option> <option value="GD">Grenada</option> <option value="GP">Guadeloupe</option> <option value="GU">Guam</option> <option value="GT">Guatemala</option> <option value="GN">Guinea</option> <option value="GW">Guinea-Bissau</option> <option value="GY">Guyana</option> <option value="HT">Haiti</option> <option value="HM">Heard Island and McDonald Islands</option> <option value="HN">Honduras</option> <option value="HK">Hong Kong</option> <option value="HU">Hungary</option> <option value="IS">Iceland</option> <option value="IN">India</option> <option value="ID">Indonesia</option> <option value="IE">Ireland</option> <option value="IL">Israel</option> <option value="IT">Italy</option> <option value="JM">Jamaica</option> <option value="JP">Japan</option> <option value="JO">Jordan</option> <option value="KZ">Kazakhstan</option> <option value="KE">Kenya</option> <option value="KI">Kiribati</option> <option value="KW">Kuwait</option> <option value="KG">Kyrgyzstan</option> <option value="LA">Lao People's Democratic Republic</option> <option value="LT">Latin America</option> <option value="LV">Latvia</option> <option value="LB">Lebanon</option> <option value="LS">Lesotho</option> <option value="LR">Liberia</option> <option value="LI">Liechtenstein</option> <option value="LX">Lithuania</option> <option value="LU">Luxembourg</option> <option value="MO">Macau</option> <option value="MK">Macedonia</option> <option value="MG">Madagascar</option> <option value="MW">Malawi</option> <option value="MY">Malaysia</option> <option value="MV">Maldives</option> <option value="ML">Mali</option> <option value="MT">Malta</option> <option value="MH">Marshall Islands</option> <option value="MQ">Martinique</option> <option value="MR">Mauritania</option> <option value="MU">Mauritius</option> <option value="YT">Mayotte</option> <option value="MX">Mexico</option> <option value="FM">Micronesia (Federated States of)</option> <option value="MD">Moldova, Republic of</option> <option value="MC">Monaco</option> <option value="MN">Mongolia</option> <option value="ME">Montenegro</option> <option value="MS">Montserrat</option> <option value="MA">Morocco</option> <option value="MZ">Mozambique</option> <option value="MM">Myanmar</option> <option value="NA">Namibia</option> <option value="NR">Nauru</option> <option value="NP">Nepal</option> <option value="NL">Netherlands</option> <option value="AN">Netherlands Antilles</option> <option value="NC">New Caledonia</option> <option value="NZ">New Zealand</option> <option value="NI">Nicaragua</option> <option value="NE">Niger</option> <option value="NG">Nigeria</option> <option value="NU">Niue</option> <option value="NF">Norfolk Island</option> <option value="MP">Northern Mariana Islands</option> <option value="NO">Norway</option> <option value="OM">Oman</option> <option value="PK">Pakistan</option> <option value="PW">Palau</option> <option value="PA">Panama</option> <option value="PG">Papua New Guinea</option> <option value="PY">Paraguay</option> <option value="PE">Peru</option> <option value="PH">Philippines</option> <option value="PN">Pitcairn</option> <option value="PL">Poland</option> <option value="PT">Portugal</option> <option value="PR">Puerto Rico</option> <option value="QA">Qatar</option> <option value="RE">Reunion</option> <option value="RO">Romania</option> <option value="RU">Russian Federation</option> <option value="RW">Rwanda</option> <option value="SH">Saint Helena</option> <option value="KN">Saint Kitts and Nevis</option> <option value="LC">Saint Lucia</option> <option value="PM">Saint Pierre and Miquelon</option> <option value="VC">Saint Vincent and the Grenadines</option> <option value="WS">Samoa</option> <option value="SM">San Marino</option> <option value="ST">Sao Tome and Principe</option> <option value="SA">Saudi Arabia</option> <option value="SN">Senegal</option> <option value="RS">Serbia</option> <option value="SC">Seychelles</option> <option value="SL">Sierra Leone</option> <option value="SG">Singapore</option> <option value="SK">Slovakia</option> <option value="SI">Slovenia</option> <option value="SB">Solomon Islands</option> <option value="SO">Somalia</option> <option value="ZA">South Africa</option> <option value="GS">South Georgia and the South Sandwich Island</option> <option value="KR">South Korea</option> <option value="ES">Spain</option> <option value="LK">Sri Lanka</option> <option value="SR">Suriname</option> <option value="SJ">Svalbard and Jan Mayen Islands</option> <option value="SZ">Swaziland</option> <option value="SE">Sweden</option> <option value="CH">Switzerland</option> <option value="TW">Taiwan, Republic of China</option> <option value="TJ">Tajikistan</option> <option value="TZ">Tanzania, United Republic of</option> <option value="TH">Thailand</option> <option value="TG">Togo</option> <option value="TK">Tokelau</option> <option value="TO">Tonga</option> <option value="TT">Trinidad and Tobago</option> <option value="TN">Tunisia</option> <option value="TR">Turkey</option> <option value="TM">Turkmenistan</option> <option value="TC">Turks and Caicos Islands</option> <option value="TV">Tuvalu</option> <option value="UG">Uganda</option> <option value="UA">Ukraine</option> <option value="AE">United Arab Emirates</option> <option value="GB">United Kingdom</option> <option value="US">United States of America</option> <option value="UM">United States Minor Outlying Islands</option> <option value="UY">Uruguay</option> <option value="UZ">Uzbekistan</option> <option value="VU">Vanuatu</option> <option value="VA">Vatican City State(Holy See) </option> <option value="VE">Venezuela</option> <option value="VN">Viet Nam</option> <option value="VG">Virgin Islands (British)</option> <option value="VI">Virgin Islands (U.S.)</option> <option value="WF">Wallis and Futuna Islands</option> <option value="EH">Western Sahara</option> <option value="YE">Yemen</option> <option value="ZR">Zaire</option> <option value="ZM">Zambia</option>
			                        </select>
									
								</div>

								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Password</label>
									<input type="password" name="password" placeholder="Password" required class="form-control" />
									<span class="text-danger" style="color: #cc0000;"><?php if (isset($password_error)) echo $password_error; ?></span>
								</div>

								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Confirm Password</label>
									<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
									<span class="text-danger" style="color: #cc0000;"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
								</div>
							    <div>
							        <?php echo Securimage::getCaptchaHtml() ?>
							        <span class="text-danger" style="color: #cc0000;"><?php if (isset($captcha_error)) echo "<br>$captcha_error"; ?></span>
							    </div>

								<div class="form-group">
									<input style="font-family: 'overpass'; padding: 10px 20px; font-weight: bold;" type="submit" name="signup" value="CREATE ACCOUNT" class="btn btn-primary" />
								</div>
							</fieldset>
						</form>
						<div>	
							<p style="font-family: 'overpass';">Already Registered? <a href="login.php" style="color: #cc0000; font-family: 'overpass';">Login Here</a></p>
					</div>
				</div>
			</div>

<footer style="bottom: 0; position: fixed; color: #cc0000; background-color: #fff; height: 60px;">
    <div class="inner-wrapper">
        <div class="grid">
            <div class="xl-colspan-12">
                <p style="font-size: 11px; line-height: 11px; margin: 15px 0 0 0; padding: 0; font-family: 'overpass'; color: #000; font-weight: bold;">Copyright &copy; 2017 Red Hat, Inc.</p>
            </div>
        </div>
        <div class="grid">
            <div class="xl-colspan-12">
                <ul class="h-align">
                    <li>
                        <a href="http://www.redhat.com/footer/privacy-policy.html" style="font-family: 'overpass'; font-weight: bold;">Privacy policy</a><span style="margin: 0 5px 0 5px; color: #000;">|</span>  
                    </li>
                    <li>
                        <a href="http://www.redhat.com/footer/terms-of-use.html" style="font-family: 'overpass'; font-weight: bold;">Terms of use</a><span style="margin: 0 5px 0 5px; color: #000;">|</span>  
                    </li>
                    <li>
                        <a href="https://partnercenter.force.com/s/Help" style="font-family: 'overpass'; font-weight: bold;">Contact us</a><span style="margin: 0 5px 0 5px; color: #000;">|</span>  
                    </li>
                    <li>
                        <a href="http://www.redhat.com/about/" style="font-family: 'overpass'; font-weight: bold;">About Red Hat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</footer>
			<script src="js/jquery-1.10.2.js"></script>
			<script src="js/bootstrap.min.js"></script>
			</body>
			</html>