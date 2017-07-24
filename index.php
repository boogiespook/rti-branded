<?php
   // Session initialization
   session_start();
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Ready to Innovate?</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
      <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/grid.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
      <link rel="stylesheet" type="text/css" href="css/glyphicon.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
   </head>
   <body>
      <?php include_once("analyticstracking.php") ?>  
      <nav class="navbar navbar-default nav-design" role="navigation">
         <div class="container-fluid">
            <div class="navbar-header grid">
               <div class="xl-colspan-2 m-colspan-10 s-colspan-9">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><img src="images/Logo_RH_RGB_Reverse.png" class="redhat-logo"></a>
               </div>
               <div class="xl-gap-8 xl-colspan-2 m-gap-1 m-colspan-2 s-colspan-3">
                  <div class="collapse navbar-collapse" id="navbar1">
                     <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['usr_id'])) { ?><!--<li><p class="navbar-text" style="color: #fff; margin-top: 20px;"><?php echo $_SESSION['usr_name']; ?></p></li>-->
                        <li><a href="logout.php" title="Logout" alt="Logout"></a></li>
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
          READY TO INNOVATE?</p>
        </div>
      </div>
    </div>
  </div>
      <?php
         if(isset($_SESSION['usr_id'])) {
         include 'dbconnect.php';
         $userId = $_SESSION['usr_id'];
         
         ?>
      <div class="container">
      </div>
      </div> <!-- /container -->
      <?php    }
         ####  End of Logged on bit ######
         ?>
   </body>
</html>