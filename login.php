<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: assess.php");
}

//check if form is submitted
if (isset($_POST['login'])) {


include 'dbconnect.php';
connectDB();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: assess.php");
	} else {
		$errormsg = "<script>swal('Incorrect Username or Password!');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ready to Innovate?</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/grid.css"/>
    <link rel="stylesheet" type="text/css" href="css/glyphicon.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
    <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/glyphicon.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
    <!--  <script src="js/jquery-1.10.2.js"></script>-->
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
	<script src="js/sweetalert.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="inner-wrapper">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="login.php"><img class="nav-logo" src="images/Logo_RH_RGB_Reverse.png"></a>
				</div>
			<!-- menu items -->
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php" title="Register" alt="Register"><span class="glyphicon glyphicon-user nav-button"></span></a></li>
					<li class="active"><a href="login.php" title="Login" alt="Login"><span class="glyphicon glyphicon-log-in nav-button"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<div class="grid header" style="margin-bottom: 50px;">
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
					<p style="font-size: 20px; line-height: 22px; font-weight: bold; margin-bottom: 35px; margin-top: 25px; font-family: 'overpass';">WELCOME TO THE "READY TO INNOVATE?" ASSESSMENT.</p>
                    <p style="font-family: 'overpass';"><strong>AIM</strong>: </p>

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
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
							<fieldset>
								 <legend style="font-family: 'overpass';"><span class="subhead">Login</span><br><span style="font-weight: bold;">PLEASE LOGIN HERE.</span></legend>
							
								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Email</label>
									<input type="text" name="email" placeholder="Your Email" required class="form-control" />
								</div>

								<div class="form-group">
									<label for="name" style="font-family: 'overpass';">Password</label>
									<input type="password" name="password" placeholder="Your Password" required class="form-control" />
								</div>

								<div class="form-group">
									 <input type="submit" name="login" value="LOGIN" class="btn btn-primary" style="font-family: 'overpass'; padding: 10px 20px; font-weight: bold;" />
								</div>
							</fieldset>
						</form>
						<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
					</div>
				</div>
			</div>
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
                        <a href="http://www.redhat.com/footer/privacy-policy.html" style="font-family: 'overpass'; font-weight: bold;">Privacy policy</a><span style="margin: 0 5px 0 5px;">|</span>  
                    </li>
                    <li>
                        <a href="http://www.redhat.com/footer/terms-of-use.html" style="font-family: 'overpass'; font-weight: bold;">Terms of use</a><span style="margin: 0 5px 0 5px;">|</span>  
                    </li>
                    <li>
                        <a href="https://partnercenter.force.com/s/Help" style="font-family: 'overpass'; font-weight: bold;">Contact us</a><span style="margin: 0 5px 0 5px;">|</span>  
                    </li>
                    <li>
                        <a href="http://www.redhat.com/about/" style="font-family: 'overpass'; font-weight: bold;">About Red Hat</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
</footer>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
