<?php
   session_start();
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Ready to Innovate?</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/grid.css">
      <link rel="stylesheet" type="text/css" href="css/glyphicon.css">
      <!--    <script src="js/jquery-1.10.2.js"></script>-->
      <link rel="stylesheet" href="/resources/demos/style.css" type="text/css">
      <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
      <script type="text/javascript">
         $( function() {
         $( ".tabs" ).tabs();
         
         var max = 4;
         
         if ( $('#tabs-next').length ) {
          var selected = $(".tabs").tabs("option", "active");
          
          if ( selected < max ) {
         $('#tabs-next').html('<a href="#" class="button">Next</a>');
          } else {
         $('#tabs-next').empty();
          }
         }
         
         $('.tabs li').bind('click', function() {
          var selected = $(".tabs").tabs("option", "active");
         
          if ( selected < max ) {
         $('#tabs-next').html('<a href="#" class="button">Next</a>');
          } else {
         $('#tabs-next').empty();
          }
         });
         
         $('#tabs-next').bind('click', function() {
          var selected = $(".tabs").tabs("option", "active");
         
          if ( (selected + 1) < max ) {
         $('.tabs').tabs('option', 'active', selected + 1);
         $('#tabs-next').html('<a href="#" class="button">Next</a>');
          } else {
         $('#tabs-next').empty();
          }
         
          $('.tabs').tabs('option', 'active', selected + 1);
         });
         });
      </script>
      <script type="text/javascript">
         $( function() {
          $( "#region" ).selectmenu();
          } );
          
      </script>
      <script type="text/javascript">
         function validateForm() {
             var x = document.forms["myForm"]["rhEmail"].value;
             var atpos = x.indexOf("@");
             var dotpos = x.lastIndexOf(".");
             var re = /\S+@redhat.com/;
         
             if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
             //    if (! x.match(re) ) {
          alert("Not a valid e-mail address");
          return false;
             }
         }
      </script>
      <script type="text/javascript">
         $( function() {
             if ( $('input').length ) {
          $( "input" ).checkboxradio();
             }
         });
         
          
      </script>
      <style type="text/css">
         /**
         * ----------------------------------------------------------------
         * Fonts import
         * ----------------------------------------------------------------
         **/
         @font-face {
         font-family: "Overpass Bold";
         src: url("fonts/overpass_bold.eot?#iefix") format("embedded-opentype"), url("fonts/overpass_bold.woff") format("woff"), url("fonts/overpass_bold.ttf") format("truetype"), url("fonts/overpass_bold.svg#Overpass Bold") format("svg");
         }
         @font-face {
         font-family: "Overpass Regular";
         src: url("fonts/overpass_regular.eot?#iefix") format("embedded-opentype"), url("fonts/overpass_regular.woff") format("woff"), url("fonts/overpass_regular.ttf") format("truetype"), url("fonts/overpass_regular.svg#Overpass Regular") format("svg");
         }
         html,
         body {
         font-family: "Overpass Regular", arial, helvetica, sans-serif;
         }
         #locationField, #controls {
         position: relative;
         width: 480px;
         }
         #autocomplete {
         position: absolute;
         top: 0px;
         left: 0px;
         width: 99%;
         }
         .label {
         text-align: right;
         font-weight: bold;
         color: #303030;
         }
         #address {
         border: 1px solid #000090;
         background-color: #f0f0ff;
         width: 480px;
         padding-right: 2px;
         }
         #address td {
         font-size: 10pt;
         }
         .field {
         width: 99%;
         }
         .slimField {
         width: 80px;
         }
         .wideField {
         width: 200px;
         }
         #locationField {
         height: 20px;
         margin-bottom: 2px;
         }
         .page { position: absolute; 
         top: 10; 
         left: 100; 
         visibility: hidden; 
         } 
         legend {
         }
         p { font-family: 'overpass', sans-serif; line-height: 18px; font-size: 16px; margin-bottom: 10px; color: #000; }
         input {
         border-radius: 15px;
         margin: 10px;
         }  
         h3 { color: #7c795d; font-family: 'overpass', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }
         .header{
         background-image: url(images/bg_ready.png);
         background-size: cover;
         background-repeat: no-repeat;
         padding: 0 !important;
         margin: 0 !important;
         }
         #slogan {
         font-size: 45px;
         font-weight: bold;
         width: 100%;
         max-width: 1090px;
         margin: auto;
         padding: 20px 30px 60px 0px;
         color: #FFFFFF;
         line-height: 45px;
         text-align: left;
         text-transform: uppercase;
         white-space: nowrap;
         }
         @media (max-width: 808px){
         #slogan{
         font-size: 35px !important;
         line-height: 35px;
         }
         }
         @media (max-width: 521px){
         #slogan{
         font-size: 28px !important;
         line-height: 28px;
         }
         }
         @media (max-width: 400px){
         #slogan{
         font-size: 25px !important;
         line-height: 25px;
         }
         .special-margin{
         margin-bottom: 40px !important;
         }
         }
         .ui-widget-content{
         border: 0!important;
         background-color: transparent;
         margin-top: 20px;
         }
         .ui-widget-header{
         background-color: transparent;
         border: none;
         }
         .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited{
         border: none;
         }
         .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
         color: #FFF;
         }
         .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
         border-radius: 0;
         border: none;
         }
         input {
         border-radius: 0;
         background-color: #cc0000;
         border: 1px solid #000;
         color: #fff;
         }
         .nav-submit{
         border: 0;
         text-decoration: none;
         background-color: #cc0000;
         margin: 0 0 0 0;
         padding: 10px;
         }
         .ui-tabs .ui-tabs-nav{
         margin: 20px 0 20px 0;
         padding: 0;
         }
         .w3-label{
         color: #000;
         }
         legend{
         border-bottom: none;
         }
         .ui-tabs .ui-tabs-nav li {
         margin: 10px 10px 0 0;
         }
         label{
         display: block !important;
         padding-left: 25px;
         font-weight: 400;
         }
         input[type=checkbox].w3-check, input[type=radio].w3-radio {
         float: left;
         position: relative;
         top: 0;
         margin: 0;
         padding: 0;
         }
         .navbar-right {
         position: relative;
         z-index: 10;
         }
         .form-group{
         padding: 0;
         margin: 0;
         }
         a:focus {
         outline: none;
         margin: 0 !important;
         }
         nav{
         padding: 0!important;
         margin: 0!important;
         border: 0!important;
         }
         fieldset{
         margin-bottom: 20px;
         margin-right: 10px;
         border: none;
         }
         .navigation-point{
         .font-weight: lighter;
         }
         #ui-id-1:active{
         color: #cc0000;
         }
         .ui-tabs {
         font-size: 15px;
         position: absolute;
         top: 0;
         display: block;
         width: 100%;
         }
         .ui-tabs .ui-tabs-nav {
         margin: 0;
         }
         .navbar-nav>li {
         float: left;
         }
         #tabs-contents {
         margin: 258px calc((100% - 1024px) / 2) 0 0;
         }
         @media (max-width: 1064px){
         }
         @media (max-width: 991px){
         }
         .navbar-text{
         margin-top: 25px !important;
         }
         @media (max-width: 808px){
         .ui-tabs {
         position: relative;
         }
         #tabs-contents{
         margin: 0 0 100px 0;
         }
         #tabs-contents.inner-wrapper {
         margin-left: calc((100% - 480px) / 2);
         max-width: 480px;
         }
         #main-content.inner-wrapper {
         margin: 0;
         width: 100%;
         padding: 0;
         max-width: inherit;
         }
         .ui-tabs .ui-tabs-tab {
         display: block;
         width: 100% ;
         background: rgba(0, 0, 0, 1) !important;
         padding: 15px 0 10px 50px !important;
         }
         .ui-widget-content {
         margin: 0;
         padding: 0;
         }
         }
         @media (max-width: 520px) {
         #tabs-contents.inner-wrapper {
         margin-left: calc((100% - 320px) / 2);
         max-width: 320px;
         }
         }
         @media (max-width: 360px) {
         .inner-wrapper {
         margin-left: calc((100% - 280px) / 2);
         max-width: 280px;
         }
         }
         #ui-id-1:after {
         content: '';
         display: block;
         border-bottom: 4px solid rgba(255, 255, 255, 1);
         width: 32px;
         }
         #ui-id-1:hover:after, #ui-id-1 a.active:after {
         border-bottom: 4px solid rgba(204, 0, 0, 1);
         }
         #ui-id-2:after {
         content: '';
         display: block;
         border-bottom: 4px solid rgba(255, 255, 255, 1);
         width: 32px;
         }
         #ui-id-2:hover:after, #ui-id-2 a.active:after {
         border-bottom: 4px solid rgba(204, 0, 0, 1);
         }
         #ui-id-3:after {
         content: '';
         display: block;
         border-bottom: 4px solid rgba(255, 255, 255, 1);
         width: 32px;
         }
         #ui-id-3:hover:after, #ui-id-3 a.active:after {
         border-bottom: 4px solid rgba(204, 0, 0, 1);
         }
         #ui-id-4:after {
         content: '';
         display: block;
         border-bottom: 4px solid rgba(255, 255, 255, 1);
         width: 32px;
         }
         #ui-id-4:hover:after, #ui-id-4 a.active:after {
         border-bottom: 4px solid rgba(204, 0, 0, 1);
         }
         #ui-id-5:after {
         content: '';
         display: block;
         border-bottom: 4px solid rgba(255, 255, 255, 1);
         width: 32px;
         }
         #ui-id-5:hover:after, #ui-id-5 a.active:after {
         border-bottom: 4px solid rgba(204, 0, 0, 1);
         }
         .ui-state-active a:after{
         border-bottom: 4px solid rgba(204, 0, 0, 1) !important; 
         }
         @media (max-width: 808px){
         .wrapper-nav{
         padding: 20px;
         }
         }
         .ui-tabs .ui-tabs-panel{
         padding: 0 !important;
         }
         #tabs-1{
         margin-top: 50px;
         margin-bottom: 15px;
         }
         #tabs-2{
         margin-top: 50px;
         margin-bottom: 15px;
         }
         #tabs-3{
         margin-top: 50px;
         margin-bottom: 15px;
         }
         #tabs-4{
         margin-top: 50px;
         margin-bottom: 15px;
         }
         #tabs-5{
         margin-top: 50px;
         margin-bottom: 15px;
         }
         footer{
         position: fixed;
         bottom: 0;
         left: 0;
         width: 100%;
         color: #fff;
         }
         footer ul{margin: 0; padding: 0;}
         footer li{
         float: left;
         list-style-type: none;
         }
         footer li a{
         color: #cc0000;
         font-size: 10px;
         text-decoration: none;
         border: 0;
         margin-bottom: 15px !important;
         }
         footer li a:hover{
         color: #cc0000 !important;
         border-bottom: 1px solid #cc0000 !important;
         }
         @media (max-width: 520px){
         footer li a{
         font-size: 8px;
         }
         }
         .button{
         border: 0 !important;
         text-decoration: none !important;
         background-color: #cc0000;
         margin: 0 0 0 0;
         padding: 10px 20px;
         font-family: 'overpass';
         font-weight: bold;
         color: #fff !important;
         font-size: 15px;
         text-transform: uppercase;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-default" role="navigation" style="background-color: #000; height: 60px; border-radius: 0;">
         <div class="container-fluid">
            <div class="inner-wrapper">
               <div class="navbar-header grid">
                  <div class="xl-colspan-2 m-colspan-10 s-colspan-9">
                     <a class="navbar-brand" href="index.php"><img src="images/Logo_RH_RGB_Reverse.png" style="width: 100px; margin: 0 0 0 0;"></a>
                  </div>
                  <div class="xl-gap-8 xl-colspan-2 m-gap-1 m-colspan-2 s-colspan-3">
                     <!--
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        -->
                     <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['usr_id'])) { ?><!--<li><p class="navbar-text" style="color: #fff; margin-top: 20px;"><?php echo $_SESSION['usr_name']; ?></p></li>-->
                        <li><a href="logout.php" title="Logout" alt="Logout"><span class="glyphicon glyphicon-log-out" style="margin-top: 5px; color: #fff;"></span></a></li>
                        <li><a href="http://ready-to-innovate.com/blog/" target="_blank" title="Blog" alt="Blog" style="color: #fff;"></a></li>
                        <?php } else { ?>
                        <li><a href="login.php" title="Login" alt="Login"></a></li>
                        <li><a href="register.php" title="Register" alt="Register" style="color: #fff;"></a></li>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      <div class="grid header" style="margin-bottom: 50px;">
         <div class="xl-colspan-12">
            <div class="inner-wrapper">
               <p style="color: #fff; font-size: 18px; margin-bottom: 0; padding-bottom: 0; line-height: 18px; margin-top: 35px; font-family: 'overpass';"><strong>RED HAT</strong><sup>&#174;</sup></p>
               <p style="color: #fff; font-size: 25px; line-height: 25px; margin-top: 0; padding-top: 0; font-family: 'overpass';">SERVICES</p>
               <div>
                  <p id="slogan" style="font-family: 'overpass';">IS YOUR IT ORGANISATION<br>
                     READY TO INNOVATE?
                  </p>
               </div>
            </div>
         </div>
      </div>
      <?php
         if(isset($_SESSION['usr_id'])) {
         include 'dbconnect.php';
         $userId = $_SESSION['usr_id'];
         
         ?>
      <div id="main-content" class="inner-wrapper">
         <!-- Main component for a primary marketing message or call to action -->
         <!--      <div class="jumbotron"> -->
         <form name="myForm" id="innovate-form" action="tmp.php">
            <div class="tabs">
               <div class="grid">
                  <div class="xl-gap-3 xl-colspan-8 m-gap-1 m-colspan-12">
                     <ul>
                        <!--<li><a href="#tabs-1" style="margin-left: -2px;">INTRODUCTION</a></li>
                           <li><a href="#tabs-2" style="margin-left: 1px;">CLIENT DETAILS</a></li>-->
                        <li class="navigation-point" style="background-color: transparent; margin: 0 15px 0 0; padding: 0;"><a href="#tabs-1" style="color: #fff; margin: 0; padding: 0; font-family: 'overpass'; font-weight: lighter;" class="active">Automation</a></li>
                        <li class="navigation-point" style="background-color: transparent; margin: 0 15px 0 0; padding: 0;"><a class="active" href="#tabs-2" style="color: #fff; margin: 0; padding: 0; font-family: 'overpass'; font-weight: lighter;">Methodology</a></li>
                        <li class="navigation-point" style="background-color: transparent; margin: 0 15px 0 0; padding: 0;"><a class="active" href="#tabs-3" style="color: #fff; margin: 0; padding: 0; font-family: 'overpass'; font-weight: lighter;">Architecture</a></li>
                        <li class="navigation-point" style="background-color: transparent; margin: 0 15px 0 0; padding: 0;"><a class="active" href="#tabs-4" style="color: #fff; margin: 0; padding: 0; font-family: 'overpass'; font-weight: lighter;">Strategy</a></li>
                        <li class="navigation-point" style="background-color: transparent; margin: 0; padding: 0;"><a class="active" href="#tabs-5" style="color: #fff; margin: 0; padding: 0; font-family: 'overpass'; font-weight: lighter; padding-bottom: 10px;">Environment</a></li>
                     </ul>
                  </div>
               </div>
               <div id="tabs-contents" class="inner-wrapper">
                  <div class="grid">
                     <div class="xl-colspan-11">
                        <div id="tabs-1">
                           <div class="widget"> 
                              <?php
                                 function createQuestions($number,$area) {
                                    $string = file_get_contents("questions.json");
                                    $json = json_decode($string, true);
                                    
                                    $automation_dev_array = $json['development']['automation'];
                                    $automation_ops_array = $json['operations']['automation'];
                                    $methodology_dev_array = $json['development']['methodology'];
                                    $methodology_ops_array = $json['operations']['methodology'];
                                    $architecture_dev_array = $json['development']['architecture'];
                                    $architecture_ops_array = $json['operations']['architecture'];
                                    $strategy_dev_array = $json['development']['strategy'];
                                    $strategy_ops_array = $json['operations']['strategy'];
                                    $environment_dev_array = $json['development']['environment'];
                                    $environment_ops_array = $json['operations']['environment'];  
                                    $i=0;
                                    print '<div class="grid"><div class="xl-colspan-6 m-colspan-12 left-block"><fieldset><legend><strong>Development</strong></legend>';

                                    while( $i < 5) {
                                       if ($i == 0) {
                                          $ii = $i + 1;
                                          $check = "checked";
                                       } else {
                                          $check = "";
                                       }
                                       print "<input class=\"w3-radio\" type=\"radio\" name=\"d" . $number . "\" id=\"radio-1\" value=\"$i\" $check> <label>" . $json['development'][$area][$i] . "</label><br>";
                                       $i++;
                                    }

                                    print ' </fieldset></div>';
                                    
                                    
                                    # Rinse and repeat for Ops
                                    $i=0;
                                    print  ' <div class="xl-colspan-6 m-colspan-12 right-block"><fieldset>
                                        <legend><strong>Operations</strong></legend>';
                                    
                                    while( $i < 5) {
                                       $ii = $i + 1;
                                       if ($i == 0) {
                                          $check = "checked";
                                          } else {
                                          $check = "";
                                       }
                                       print "<input class=\"w3-radio\" type=\"radio\" name=\"o" . $number . "\" id=\"radio-1\" value=\"$i\" $check> <label>" . $json['operations'][$area][$i] . "</label><br>";
                                       $i++;
                                    }

                                    print "  </fieldset></div></div>";
                                 }

                                 # End of Function
      
                                 createQuestions("1","automation");
                                 ?>    
                           </div>
                        </div>
                        <div id="tabs-2">
                           <?php
                              createQuestions(2,"methodology");
                              ?> 
                        </div>
                        <div id="tabs-3">
                           <?php
                              createQuestions(3,"architecture");
                              ?> 
                        </div>
                        <div id="tabs-4">
                           <?php
                              createQuestions(4,"strategy");
                              ?> 
                        </div>
                        <div id="tabs-5">
                           <?php
                              createQuestions(5,"environment");
                              ?>
                           <input type="submit" value="SUBMIT" class="nav-submit" style="padding: 10px 20px; font-family: 'overpass'; font-weight: bold;">
                        </div>
                     </div>
                  </div>
                  <div id="tabs-next" style="margin-bottom: 100px;"></div>
               </div>
            </div>
            <!--  <div id="tabs-8">
               <p>  <input type="submit" value="Submit">
               </p>
               </div>
               -->
         </form>
      </div>
      <footer style="bottom: 0; position: fixed; color: #cc0000; background-color: #fff; height: 60px;">
         <div class="inner-wrapper">
            <div class="grid">
               <div class="xl-colspan-12">
                  <p style="font-size: 11px; line-height: 11px; margin: 15px 0 0 0; padding: 0; font-family: 'overpass'; color: #000; font-weight: bold;">Copyright &#169; 2017 Red Hat, Inc.</p>
               </div>
            </div>
            <div class="grid">
               <div class="xl-colspan-12">
                  <ul class="h-align">
                     <li><a href="http://www.redhat.com/footer/privacy-policy.html" style="font-family: 'overpass'; font-weight: bold;">Privacy policy</a><span style="margin: 0 5px 0 5px;">|</span></li>
                     <li><a href="http://www.redhat.com/footer/terms-of-use.html" style="font-family: 'overpass'; font-weight: bold;">Terms of use</a><span style="margin: 0 5px 0 5px;">|</span></li>
                     <li><a href="https://partnercenter.force.com/s/Help" style="font-family: 'overpass'; font-weight: bold;">Contact us</a><span style="margin: 0 5px 0 5px;">|</span></li>
                     <li><a href="http://www.redhat.com/about/" style="font-family: 'overpass'; font-weight: bold;">About Red Hat</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <!-- /container -->
      <?php    }
         ####  End of Logged on bit ######
         
         else {
         ?><script type="text/javascript">
         window.location.replace('register.php');
      </script><?php 
         }
         ?>
   </body>
</html>