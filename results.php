<!DOCTYPE html>
<html>
   <head>
      <script src="Chart.bundle.js"></script>
      <script src="utils.js"></script>
      <script src="raphael-2.1.4.min.js"></script>
      <script src="justgage.js"></script>
      <title>Ready to Innovate Assessment</title>
      <link href="http://static.jboss.org/css/rhbar.css" media="screen" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/grid.css"/>
      <link rel="stylesheet" type="text/css" href="css/custom.css"/>
      <title>Ready to Innovate Assessment</title>
      <link href="http://static.jboss.org/css/rhbar.css" media="screen" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/glyphicon.css"/>
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
      <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>
      <!--  <script src="js/jquery-1.10.2.js"></script>-->
      
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <style>
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
         body {
         margin: 5px auto;
         font-size: 14px;
         color: #444;
         }
         #wrapper {
         width: 95%;
         background-color: #FFF;
         margin-left:auto;
         margin-right:auto;
         }
         header {
         height: 30px;
         border-bottom: thin solid #000000;
         }
         #rh-logo img {
         position: absolute;
         top: 2px;
         right: 2px;
         float: right;
         }
         #content {
         float: left;
         width: 50%;
         }
         #rightcol {
         float: right;
         width: 50%;
         vertical-align: middle;
         }
         footer {
         clear:both;
         height: 50px;
         }
         table {
         *border-collapse: collapse; /* IE7 and lower */
         border-spacing: 0;
         width: 100%;    
         }
         .bordered {
         margin-top: 50px;
         }
         .bordered tr:hover {
         background: #fbf8e9;
         -o-transition: all 0.1s ease-in-out;
         -webkit-transition: all 0.1s ease-in-out;
         -moz-transition: all 0.1s ease-in-out;
         -ms-transition: all 0.1s ease-in-out;
         transition: all 0.1s ease-in-out;     
         }    
         .bordered td, .bordered th {
         border-left: 2px solid #fff;
         border-top: 4px solid #fff;
         padding: 10px;
         text-align: center;
         background-color: #f0f0f0;
         font-weight: bold;
         text-transform: uppercase;
         }
         .bordered th {
         background-color: #CC0000 !important;
         text-align: center;
         color: #fff;
         text-transform: uppercase;
         border-right: 1px solid #fff;
         }
         .bordered td:first-child, .bordered th:first-child {
         border-left: none;
         background-color: #f0f0f0;
         text-align: center;
         }
         .bordered th:first-child {
         background-color: #CC0000;
         border-right: 1px solid #fff;
         }
         .bordered th:last-child {
         background-color: #f0f0f0;
         }
         .bordered th:only-child{
         background-color: #f0f0f0;
         }
         .bordered tr:last-child td:first-child {
         background-color: #f0f0f0;
         }
         .bordered tr:last-child td:last-child {
         background-color: #f0f0f0;
         }
         #analysis-opener{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         #priorities-opener{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         #workshop-opener{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         #average-opener-dev{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         #average-opener-ops{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         .dialog-box-open{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         .print-button{
         border-radius: 0 !important;
         background-color: transparent;
         border: 1px solid #ccc;
         margin: 0 5px 5px 0;
         }
         /*----------------------*/
         .zebra td, .zebra th {
         padding: 10px;
         border-bottom: 1px solid #f2f2f2;    
         }
         .zebra tbody tr:nth-child(even) {
         background: #f5f5f5;
         -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
         -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
         box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
         }
         .zebra th {
         text-align: left;
         text-shadow: 0 1px 0 rgba(255,255,255,.5); 
         border-bottom: 1px solid #ccc;
         background-color: #eee;
         background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
         background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
         background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
         background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
         background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
         background-image:         linear-gradient(top, #f5f5f5, #eee);
         }
         .zebra th:first-child {
         -moz-border-radius: 6px 0 0 0;
         -webkit-border-radius: 6px 0 0 0;
         border-radius: 6px 0 0 0;  
         }
         .zebra th:last-child {
         -moz-border-radius: 0 6px 0 0;
         -webkit-border-radius: 0 6px 0 0;
         border-radius: 0 6px 0 0;
         }
         .zebra th:only-child{
         -moz-border-radius: 6px 6px 0 0;
         -webkit-border-radius: 6px 6px 0 0;
         border-radius: 6px 6px 0 0;
         }
         .zebra tfoot td {
         border-bottom: 0;
         border-top: 1px solid #fff;
         background-color: #f1f1f1;  
         }
         .zebra tfoot td:first-child {
         -moz-border-radius: 0 0 0 6px;
         -webkit-border-radius: 0 0 0 6px;
         border-radius: 0 0 0 6px;
         }
         .zebra tfoot td:last-child {
         -moz-border-radius: 0 0 6px 0;
         -webkit-border-radius: 0 0 6px 0;
         border-radius: 0 0 6px 0;
         }
         .zebra tfoot td:only-child{
         -moz-border-radius: 0 0 6px 6px;
         -webkit-border-radius: 0 0 6px 6px
         border-radius: 0 0 6px 6px
         }
         .same-h{
         width: 400px;
         }
         @media (max-width: 964px){
         .same-h{
         width: 300px !important;
         }
         }
         @media (max-width: 860px){
         .same-h{
         width: 250px !important;
         }
         }
         @media (max-width: 805px){
         .same-h{
         width: 400px !important;
         }
         }
         @media (max-width: 545px){
         .same-h{
         width: 250px !important;
         }
         }
         .header{
         background-image: url(images/bg_ready.png);
         background-size: cover;
         background-repeat: no-repeat;
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
         margin-bottom: 30px !important;
         }
         }
         .ui-widget-content{
         background-color: #fff !important;
         border: none;
         }
         .ui-widget-header{
         background-color: transparent;
         border: none;
         }
         .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited{
         border: none;
         text-align: center;   
         width: 150px;        
         }
         .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
         color: #FFF;
         text-align: center !important;
         border: none;
         }
         .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
         background-color: #cc0000;
         border-radius: 0;
         border: none;
         }
         .navbar{
         background-color: #000;
         border-radius: 0;
         height: 60px;
         border: 0;
         margin: 0;
         }
         body{
         margin: 0;
         }
         header{border-bottom: 0;
         margin-bottom: 25px;
         }
         @media (max-width: 805px){
         #rightcol {
         clear: both;
         width: 100%;
         }
         .chart-size{
         width: 100% !important;
         }
         #canvas{
         width: 500px !important;
         height: 500px !important;
         margin-left: 50px;
         }
         .container-buttons{
         width: 100% !important;
         padding-top: 500px;
         text-align: center;
         }
         }
         @media (max-width: 600px){
         #canvas{
         width: 400px !important;
         height: 400px !important;
         margin-left: 30px;
         }
         .container-buttons{
         width: 100% !important;
         padding-top: 400px;
         }
         }
         @media (max-width: 540px){
         #canvas{
         width: 400px !important;
         height: 400px !important;
         margin-left: 30px;
         }
         }
         @media (max-width: 420px){
         .results-head{
         font-size: 18px !important;
         }
         #canvas{
         width: 300px !important;
         height: 300px !important;
         }
         .container-buttons{
         width: 100% !important;
         padding-top: 300px;
         }
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
         .head-line{
         font-size: 8px !important;
         }
         }
         .same-h{
         background-color: #cc0000 !important;
         color: #fff !important;
         padding: 6px 12px !important;
         border: 0 !important;
         }
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 390px;
         }
         @media (max-width: 1270px){
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 320px;
         }
         }  
         @media (max-width: 1170px){
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 290px;
         }
         }  
         @media (max-width: 1064px){
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 230px;
         }
         }
         @media (max-width: 950px){
            .finals{
            text-transform: uppercase;
            color: #000;
            margin-top: 180px;
         }

         @media (max-width: 840px){
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 130px;
         }
         }  
         @media (max-width: 800px){
         .finals{
         text-transform: uppercase;
         color: #000;
         margin-top: 40px;
         }
         }  
      </style>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
         $( function() {
           $( "#analysis-dialog" ).dialog({
             autoOpen: false,
             show: {
               effect: "blind",
               duration: 1000
             },
             hide: {
               effect: "drop",
               duration: 1000
             },
             minWidth: 500
           });
         
           $( "#analysis-opener" ).on( "click", function() {
             $( "#analysis-dialog" ).dialog( "open" );
           });
         } );
      </script>
      <script>
         $( function() {
           $( "#workshop-dialog" ).dialog({
             autoOpen: false,
             show: {
               effect: "blind",
               duration: 1000
             },
             hide: {
               effect: "drop",
               duration: 1000
             },
             minWidth: 400
           });
         
           $("#workshop-opener" ).on( "click", function() {
             $("#workshop-dialog" ).dialog( "open" );
           });
         
         } );
      </script>
      <script>
         $( function() {
           $( "#priorities-dialog" ).dialog({
             autoOpen: false,
             show: {
               effect: "blind",
               duration: 1000
             },
             hide: {
               effect: "drop",
               duration: 1000
             },
             minWidth: 500
           });
         
           $("#priorities-opener" ).on( "click", function() {
             $("#priorities-dialog" ).dialog( "open" );
           });
         
         } );
      </script>
      <script>
         $( function() {
           $( "#average-dialog-dev" ).dialog({
             autoOpen: false,
             show: {
               effect: "blind",
               duration: 1000
             },
             hide: {
               effect: "drop",
               duration: 1000
             },
             minWidth: 550
           });
         
           $( "#average-opener-dev" ).on( "click", function() {
             $( "#average-dialog-dev" ).dialog( "open" );
           });
         } );
      </script>
      <script>
         $( function() {
           $( "#average-dialog-ops" ).dialog({
             autoOpen: false,
             show: {
               effect: "blind",
               duration: 1000
             },
             hide: {
               effect: "drop",
               duration: 1000
             },
             minWidth: 550
           });
         
           $( "#average-opener-ops" ).on( "click", function() {
             $( "#average-dialog-ops" ).dialog( "open" );
           });
         } );
      </script>
      <script>
         $(document).ready(function() {
           $(function() {
             $( "#dialog" ).dialog({
                 autoOpen: false,
                 title: 'Email PDF'
             });
           });
         
           $("button").click(function(){
             console.log("click");
         //        $(this).hide();
                 $( "#dialog" ).dialog('open');
             });
         }); 
      </script>
   </head>
   <body>
      <?php  
         date_default_timezone_set("Europe/London");
         ## Connect to the Database 
         include 'dbconnect.php';
         connectDB();
         
         # Retrieve the data
         
         $hash = $_REQUEST['hash'];

         $qq = "SELECT * FROM data WHERE hash='".mysqli_real_escape_string($db, $hash)."'";
         $res = mysqli_query($db, $qq);
         $data_array = mysqli_fetch_assoc($res);
         
         $ops_arr = $dev_arr = array();
         
         foreach( $data_array as $var => $value )
             {
              if($var=='date') continue;
               if(substr($var[0],0,1) == "o") { $ops_arr[]=$value; };
               if(substr($var[0],0,1) == "d") { $dev_arr[]=$value;};
             }
             
          ?>
      <div class="navbar">
         <div class="inner-wrapper">
            <a class="navbar-brand" href="results.php"><img src="images/Logo_RH_RGB_Reverse.png" style="width: 100px; margin: 0 0 0 0;"></a>
            <a class="navbar-brand" href="assess.php" style="float: right; border: 0; text-decoration: none;">
               <p style="color: #fff; font-size: 12px; font-family: 'overpass';" class="head-line"><span align="right" style="margin: 0; padding-top: 10px; padding-left: 10px; color: #fff; font-size: 15px;" class="glyphicon glyphicon-repeat" title="Start again" alt="Start again"></span></p>
            </a>
         </div>
      </div>
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
      <div id="wrapper">
      <header>
         <center>
            <!--<h2>Ready to Innovate Assessment for <?php echo $data_array['client']; ?></h2>-->
         </center>
      </header>
      <div id="content">
         <div style="width:90%; max-width: 600px; margin-bottom: 25px;" align="center" class="chart-size"">
            <canvas id="canvas"></canvas>
         </div>
         <script>
            var customerName = '<?php echo $data_array['client'] ?>'
            var customerNameNoSpaces = customerName.replace(/\s+/, "");
            
            
            function checkVal(inNo) {
            if (inNo == "0") {
            var outNo = "0.01";
            } else {
            var outNo = inNo; 
            }
            return outNo
            }
            
            var d1 = checkVal(<?php echo $data_array['d1'] ?>)
            var d2 = checkVal(<?php echo $data_array['d2'] ?>)
            var d3 = checkVal(<?php echo $data_array['d3'] ?>)
            var d4 = checkVal(<?php echo $data_array['d4'] ?>)
            var d5 = checkVal(<?php echo $data_array['d5'] ?>)
            
            var totalDev = d1 + d2 + d3 + d4 + d5
            
            var o1 = checkVal(<?php echo $data_array['o1'] ?>)
            var o2 = checkVal(<?php echo $data_array['o2'] ?>)
            var o3 = checkVal(<?php echo $data_array['o3'] ?>)
            var o4 = checkVal(<?php echo $data_array['o4'] ?>)
            var o5 = checkVal(<?php echo $data_array['o5'] ?>)
            
            var totalOps = o1 + o2 + o3 + o4 + o5
            
            var chartTitle = "DevOps Chart - " + customerName
            var overall1 = (d1+o1)/2;
            var overall2 = (d2+o2)/2;
            var overall3 = (d3+o3)/2;
            var overall4 = (d4+o4)/2;
            var overall5 = (d5+o5)/2;
            
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 4);
            };
            
            var color = Chart.helpers.color;
            var config = {
                type: 'radar',
                data: {
                    labels: ["Automation", "Methodology", "Architecture", "Strategy", "Environment"],
                    datasets: [{
                        label: "Dev",
                        backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                        borderColor: window.chartColors.red,
                        pointBackgroundColor: window.chartColors.red,
                        data: [d1,d2,d3,d4,d5]
                    }, {
                        label: "Ops",
                        backgroundColor: color(window.chartColors.black).alpha(0.2).rgbString(),
                        borderColor: window.chartColors.black,
                        pointBackgroundColor: window.chartColors.black,
                        data: [o1,o2,o3,o4,o5]
            
                    }]
                },
                options: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: chartTitle
                    },
                    scale: {
                    
                      ticks: {
                        beginAtZero: true,
                        max: 4,
                        min: 0
                      }
                    },
                          animation:{
                      onComplete : function(){
                var dataURL = canvas.toDataURL("image/png",1.0);
                $.ajax({ 
                  type: "POST", 
                        url: "chartSave.php",
                        data: "spider="+dataURL+"&customer="+customerNameNoSpaces+"&chartType=spider",
                });
                  } 
                }
            }
            }
            window.onload = function() {
                window.myRadar = new Chart(document.getElementById("canvas"), config);
            
            var ctx = document.getElementById("myChartDev").getContext("2d");
            var data = {
            labels: ["Automation", "Methodology", "Architecture", "Strategy", "Environment"],
            datasets: [{
            label: customerName,
            backgroundColor: "rgba(204, 0, 0, 1)",
            data: [d1, d2, d3, d4, d5]
            }, {
            label: "Average",
            backgroundColor: "rgba(0, 0, 0, 1)",
            data: <?php 
               $qq = "select avg(d1) as d1,avg(d2) as d2, avg(d3) as d3, avg(d4) as d4, avg(d5) as d5 from data;";    
               $res = mysqli_query($GLOBALS["___mysqli_ston"], $qq);
               $row = mysqli_fetch_array($res);
                echo "[" . $row[0] . "," . $row[1] . "," . $row[2] . "," . $row[3] . "," . $row[4] . "]"; 
                ?>
            },
            ]
            };
            
            var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 4
                }
              }]
            },
                              animation:{
                      onComplete : function(){
                var dataURLDev = myChartDev.toDataURL("image/png",1.0);
            //            console.log(dataURLDev);
                $.ajax({ 
                  type: "POST", 
                      url: "chartSave.php",
                      data: "spider="+dataURLDev+"&customer="+customerNameNoSpaces+"&chartType=comparisonDev",
                });
                  } 
                }
            }
            });     
            
            var ctx2 = document.getElementById("myChartOps").getContext("2d");
            var dataOps = {
            labels: ["Automation", "Methodology", "Architecture", "Strategy", "Environment"],
            datasets: [{
            label: customerName,
            backgroundColor: "rgba(204, 0, 0, 1)",
            data: [o1, o2, o3, o4, o5]
            }, {
            label: "Average",
            backgroundColor: "rgba(0, 0, 0, 1)",
            data: <?php 
               $qq = "select avg(o1) as d1,avg(o2) as d2, avg(o3) as d3, avg(o4) as d4, avg(o5) as d5 from data;";    
               $res = mysqli_query($GLOBALS["___mysqli_ston"], $qq);
               $row = mysqli_fetch_array($res);    
                echo "[" . $row[0] . "," . $row[1] . "," . $row[2] . "," . $row[3] . "," . $row[4] . "]"; 
                ?>
            },
            ]
            };
            
            var myBarChart2 = new Chart(ctx2, {
            type: 'bar',
            data: dataOps,
            options: {
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 4
                }
              }]
            },
                              animation:{
                      onComplete : function(){
                var dataURLOps = myChartOps.toDataURL("image/png",1.0);
            //            console.log(dataURLDev);
                $.ajax({ 
                  type: "POST", 
                      url: "chartSave.php",
                      data: "spider="+dataURLOps+"&customer="+customerNameNoSpaces+"&chartType=comparisonOps",
                });
                  } 
                }
            }
            });         
            
            };
                     
            
            
            var colorNames = Object.keys(window.chartColors);
         </script>
      </div>
      <div id="" style="margin: 50px 0 0 50px;">
         <div class="container-buttons" style="margin-top: 0;">
            <p style="font-size: 18px; text-transform: uppercase; font-family: 'overpass'; font-weight: bold;">Check out your results:</p>
            <span class="result-analysis-opener">1.</span><button id="analysis-opener" class="same-h" style="font-family: 'overpass'; text-transform: uppercase; font-weight: bold;">Open Analysis Dialog</button>
              <br>
              <span style="font-family: 'overpass'; font-size: 16px; font-weight: bold; color: #fff; background-color: #cc0000; margin-right: 5px; padding: 5px 12px 5px 13px;">2.</span><button id="priorities-opener" class="same-h" style="font-family: 'overpass'; text-transform: uppercase; font-weight: bold;">Top 3 Action Areas</button>
              <br>
              <span style="font-family: 'overpass'; font-size: 16px; font-weight: bold; color: #fff; background-color: #cc0000; margin-right: 5px; padding: 5px 12px 5px 13px;">3.</span><button id="workshop-opener" class="same-h" style="font-family: 'overpass'; text-transform: uppercase; font-weight: bold;">Workshop Links</button>
              <br>
                <span style="font-family: 'overpass'; font-size: 16px; font-weight: bold; color: #fff; background-color: #cc0000; margin-right: 5px; padding: 5px 12px 5px 13px;">4.</span><button id="average-opener-dev" class="same-h" style="font-family: 'overpass'; text-transform: uppercase; font-weight: bold;">Average Comparison (Dev)</button>
              <br>
              <span style="font-family: 'overpass'; font-size: 16px; font-weight: bold; color: #fff; background-color: #cc0000; margin-right: 5px; margin-bottom: 5px; padding: 5px 12px 5px 13px;">5.</span><button id="average-opener-ops" class="same-h" style="font-family: 'overpass'; text-transform: uppercase; font-weight: bold;">Average Comparison (Ops)</button>
              <br>
              <span class="result-printable">6.</span><a href="resultsOpen.php?hash=<?php echo $hash ?>" target="_blank"><input type="button" value="Printable Version" class="same-h btn-printable-version"></a>

          <div class="finals">
          <h2 class="results-head" style="font-size: 22px; font-family: 'overpass';">Your input of the assessment. If you would like to rerun the assessment start <a href="assess.php" style="color: #cc0000;">here</a></h2>
      </div>

            <table class="bordered">
               <thead>
                  <tr>
                     <th style="font-family: 'overpass';">Area</th>
                     <th style="font-family: 'overpass';">Development Rating</th>
                     <th style="font-family: 'overpass';">Operations Rating</th>
                  </tr>
               </thead>
               <?php
                  # Create data arrays
                  $string = file_get_contents("questions.json");
                  $json = json_decode($string, true);
                  
                  $automation_dev_array = $json['development']['automation'];
                  $automation_ops_array = $json['operations']['automation'];
                  $methodology_dev_array = $json['development']['methodology'];
                  $methodology_ops_array = $json['operations']['methodology'];
                  $architecture_dev_array = $json['development']['automation'];
                  $architecture_ops_array = $json['operations']['architecture'];
                  $strategy_dev_array = $json['development']['strategy'];
                  $strategy_ops_array = $json['operations']['strategy'];
                  $environment_dev_array = $json['development']['environment'];
                  $environment_ops_array = $json['operations']['environment'];
                  
                  
                  #$automation_dev_array = array("Ad-hoc tool selection","Manual deployment (App + OS)","CI/CD for non-production","CD Pipelines capable of pushing to production ","Full DevOps");
                  #$automation_ops_array = array("Core build for OS only","Basic (manual) provisioning","Patch & Release management (OS)","QA staging process and SOE","Automated OS Builds","Full Push Button Infrastructure");
                  #$methodology_dev_array = array("No defined methodology","Defined waterfall approach","Limited agile development on new projects (not including operations)","Agile development through to production & ops","Full DevOps culture");
                  #$methodology_ops_array = array("Hosting/Management Only","Defined SLAs and ITIL"," Compliance & Security Auditing","SOE","Full DevOps culture");
                  #$architecture_dev_array = array("Ad-hoc choice of application dev tools","Selected vendor tech roadmap","Iterative development of existing applications.Limited legacy strategy","Focus on new platforms & limited legacy platforms","Holistic & defined overall development strategy");
                  #$architecture_ops_array = array("Ad-hoc choice of future platforms","Selected vendor tech roadmap","Focus on maintaining existing infrastructure","Primary focus on new applications","Defined strategy for exsiting and new architectures");
                  #$strategy_dev_array = array("The business dictates requirements","Mature requirements gathering approach (e.g. Agile user stories)","MVP approach","Multiple projects against business needs","IT driven business innovation");
                  #$strategy_ops_array = array("Instances of negative business impact","Good functioning service operations (i.e few unscheduled outage, but slow to deploy)","Project based service offerings (i.e no unscheduled outages and rapid deployment)","Self sevice operations for development & the business","Transparent integration with project IT");
                  #$environment_dev_array = array("Traditional programming techniques with No agreed tools","Initial agile adoption with 1 backlog per team","Extended team collaboration. Common DevOps skills","Continous cross-team improvement and collaboration","100% DevOps projects and Full cross-functional teams");
                  #$environment_ops_array = array("Standard \"Unix-like\" skills & no scripting skills","Direct VM interaction, limited scripting","Dynamic, templated images","Fully automated & deployment skills","100% DevOps engineers");
                  
                  $totalDev = $totalOps = 0;
                  
                  $workshops = array();
                  $workshopLinks = array(
                    "AdaptiveSOE" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-adaptive-soe'>Adaptive SOE</a>",
                    "InnovationLabs" => "<a target=_blank href='https://mojo.redhat.com/groups/na-emerging-technology-practice/projects/red-hat-open-innovation-labs'>Open Innovation Lab</a>",
                    "ContainerPlatforms" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-modernize-app-delivery-with-container-platforms'>Container Platforms</a>",
                    "AgileDevelopment" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-965558'>Agile Development</a>",
                    "OpenSCAP" => "<a target=_blank href='https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html/Security_Guide/chap-Compliance_and_Vulnerability_Scanning.html'>Compliance and Vulnerability Scanning Guide</a>",
                    "RHCE" => "<a target=_blank href='https://www.redhat.com/en/services/certification/rhce'>Red Hat Certification (RHCE)</a> for Operations team",
                    "OSEP" => "<a target=_blank href='https://mojo.redhat.com/groups/osep-community-of-practice'>Open Source Enablement</a>",
                    "BusinessInfluence" => "<a target=_blank href='#'>Strategy and Business Influence</a>",
                    "AnsibleAutomation" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-accelerate-it-automation-with-ansible'>Ansible Automation</a>",
                    "CloudInfrastructure" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097461'>Cloud Infrastructure</a>",
                    "CloudManagement" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097463'>Cloud Management</a>",
                    "BusinessAutomation" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1041221'>Business Automation</a>",
                    "WalledGarden" => "<a target=_blank href='#'>Walled Garden Presentation</a>",
                    "DevOpsReview" => "<a target=_blank href='#'>Review of DevOps Skills</a>",
                    "Microservices" => "<a target=_blank href='#'>Microservices : Design and Architecture</a>",
                  );
                  
                  
                  $areas = array(
                    0 => "Automation",
                    1 => "Methodology",
                    2 => "Architecture",
                    3 => "Strategy",
                    4 => "Environment"
                  );
                  
                  $areaWeighting = array(
                    0 => "1",
                    1 => "2",
                    2 => "4",
                    3 => "8",
                    4 => "16"
                  );
                  
                  $analysis = $recommendations = $weighting = $oWeight = $dWeight = $tWeights = array();
                  
                  for ($ii = 0; $ii < 5; $ii++) {
                    $lcArea=strtolower($areas[$ii]);
                    $lcDev=$lcArea."_dev_array";
                    $lcOps=$lcArea."_ops_array";
                    $o = $ops_arr[$ii];
                    $weighting['Operations_'. $areas[$ii]] = $ops_arr[$ii]+1 * $areaWeighting[$ii];
                    $weighting['Development_'. $areas[$ii]] = $dev_arr[$ii]+1 * $areaWeighting[$ii];
                    $oWeight[$areas[$ii]] = $ops_arr[$ii] * $areaWeighting[$ii];
                    $dWeight[$areas[$ii]] = $dev_arr[$ii] * $areaWeighting[$ii];
                    $d = $dev_arr[$ii];
                    $totalDev += $d;
                    $totalOps += $o;
                  
                  echo "    <tr>
                          <td>$areas[$ii] </td>
                          <td><b>$dev_arr[$ii]</b> - " . ${$lcDev}[$d] . " </td>
                          <td><b>$ops_arr[$ii]</b> - " . ${$lcOps}[$o] . " </td>
                      </tr>";        
                  }    
                    
                  
                  ## Assess Dev vs Ops
                  
                  if ($totalDev > $totalOps) {
                    $moreMature = "Dev";
                    $lessMature = "Ops";
                    $top = $totalDev;
                    $bottom = $totalOps;
                    } else {
                    $moreMature = "Ops";
                    $lessMature = "Dev";
                    $top = $totalOps;
                    $bottom = $totalDev;
                  }
                  
                  function assessVals($var) {
                  switch (true) {
                  case ($var <= 1):
                     $rating = "average";
                     break;
                  case ($var > 1 && $var < 3):
                     $rating = "good";
                     break;
                  case ($var > 3):
                     $rating = "very good";
                     break;
                  } 
                  return $rating;
                  }
                  
                  function assessOverallVals($var) {
                  switch (true) {
                  case ($var < 3):
                     $rating = "low";
                     break;
                  case ($var <= 4):
                     $rating = "average";
                     break;
                  case ($var > 4 && $var < 7):
                     $rating = "good";
                     break;
                  case ($var > 7):
                     $rating = "very good";
                     break;
                  } 
                  return $rating;
                  }
                  
                  $ratio = ($top / $bottom);
                  switch (true) {
                      case ($ratio < "1.3"):
                        $word = "slightly more";
                        break;
                      case ($ratio > "1.32" && $ratio < "2"):
                        $word = "considerably more";
                        break;
                      case ($ratio > "2"):
                        $word = "extremely more";
                        break;
                  }
                  
                  array_push($analysis, "Overall, the $moreMature team are $word mature than the $lessMature team.");
                  array_push($recommendations, "Re-balance the maturity levels between teams");
                  
                  ## Assess ops automation
                  if ($ops_arr[0]  < 2) {
                  array_push($analysis, "The Ops team would benefit from better use of automation techniques such as puppet/ansible.");
                  array_push($recommendations,"SOE/CII Workshop</a>");
                  array_push($workshops,$workshopLinks['AdaptiveSOE']);
                  array_push($workshops,$workshopLinks['AnsibleAutomation']);
                  }
                  
                  if ($ops_arr[0]  > 2) {
                    $automationAnalysis = "The Ops team provide good use of automation";
                    if ($dev_arr[0] < 2) {
                      $automationAnalysis .= " although less automation is used by the Dev team";
                      $automationRecommendation = "Increase automation in the Dev team";
                      array_push($workshops,$workshopLinks['BusinessAutomation']);    
                    }
                    if ($dev_arr[0] > 2) {
                      $automationAnalysis .= " which is similar to the Dev team";
                      $automationRecommendation = "None";
                    }
                  array_push($analysis, $automationAnalysis);
                  array_push($recommendations,$automationRecommendation);
                  }
                  
                  ## Additional Automation stuff
                  if ($ops_arr[0] < 1) {
                  array_push($analysis,"No automated patch or release management.");
                  array_push($recommendations,"Consider using automation tools such as puppet and/or ansible.");
                  }
                  
                  ## Dev Automation
                  $devAutomationAnalysis = $devAutomationRecommendations = "";
                  switch($dev_arr[0]) {
                    case 0:
                      $devAutomationAnalysis .= "No control over which tools are used by developers";
                      $devAutomationRecommendations .= "Provide a list of support development tools (aka 'Walled Garden')";
                      array_push($workshops,$workshopLinks['WalledGarden']);
                      break;
                    case 1:
                      $devAutomationAnalysis .= "All deployments involve manual intervention";
                      $devAutomationRecommendations .= "Invest in CI/CD technologies";
                      break;
                    case 2:
                      $devAutomationAnalysis .= "Good use of automation in pre-production environments";
                      $devAutomationRecommendations .= "Enable CI/CD pipelines to production environments";
                      break;
                  }
                  
                  if ($devAutomationAnalysis != "") {
                  array_push($analysis,$devAutomationAnalysis);
                  array_push($recommendations,$devAutomationRecommendations);
                  }
                  
                  if ($dev_arr[0] < 1) {
                  array_push($analysis,"No automation within the Dev team");
                  array_push($recommendations,"Consider using CI/CD tooling.");
                  array_push($workshops,$workshopLinks['BusinessAutomation']);
                  }
                  
                  ## Assess strategy
                  $opsStrategy = $ops_arr[3];
                  $devStrategy = $dev_arr[3];
                  $overallStrategy = $opsStrategy + $devStrategy;
                  $strategyAnalysis = "The overall strategy awareness is " . assessOverallVals($overallStrategy);
                  $strategyRecommendations = "";
                  if($opsStrategy > $devStrategy) {
                    $strategyAnalysis .= " although the Operations team are more mature than the Development team.";
                    $strategyRecommendations .= "Strategy and Business Influence Workshop";
                    array_push($workshops,"Strategy and Business Influence Workshop");
                    array_push($workshops,"Business Influence Mapping");  
                  } elseif ($opsStrategy < $devStrategy) {
                    $strategyAnalysis .= " although the Development team are more mature than the Operations team.";
                    $strategyRecommendations .= "Strategy and Business Influence Workshop";
                  } else {
                    $strategyAnalysis .= " although both teams have the same level of maturity";
                    $strategyRecommendations .= "";
                  }
                  
                  if ($overallStrategy <= 2) {
                    $strategyRecommendations .= "Open Innovation Lab & Strategy and Business Influence Workshop";
                    array_push($workshops,$workshopLinks['InnovationLabs']);  
                    array_push($workshops,$workshopLinks['BusinessInfluence']); 
                    array_push($workshops,"Business Influence Mapping");  
                  }
                  
                  array_push($recommendations,$strategyRecommendations);
                  array_push($analysis,$strategyAnalysis);
                  
                  
                  ## Assess methodology
                  $opsMethods = $ops_arr[1];
                  $devMethods = $dev_arr[1];
                  $methodRecommendations = "";
                  $overallMethods = $opsMethods + $devMethods;
                  $methodsAnalysis = "The overall methodology score is " . assessOverallVals($overallMethods);
                  if($opsMethods > $devMethods) {
                    $methodsAnalysis .= " although the Operations team have more mature methodology than the Development team.";
                    $methodRecommendations .= "Container Platforms & Agile Development";
                     array_push($workshops,$workshopLinks['ContainerPlatforms']); 
                     array_push($workshops,$workshopLinks['AgileDevelopment']); 
                       
                  } elseif ($opsMethods < $devMethods) {
                    $methodsAnalysis .= " although the Development team are more mature than the Operations team.";
                    $methodRecommendations .= "Standard Operating Environment Workshop";
                     array_push($workshops,$workshopLinks['AdaptiveSOE']);  
                  } else {
                    $methodsAnalysis .= " and both teams have the same level of maturity.";
                    $methodRecommendations .= "";
                  }
                  
                  if ($devMethods < 2) {
                     array_push($workshops,$workshopLinks['ContainerPlatforms']); 
                     array_push($workshops,$workshopLinks['AgileDevelopment']); 
                     $methodsAnalysis .= " The Dev team could be improved through the use of more agile methodologies";
                    $methodRecommendations .= "  Container Platforms and Agile Development coaching";
                  }
                  
                  if ($overallMethods <= 2) {
                    $methodRecommendations .= "Open Innovation Lab";
                     array_push($workshops,$workshopLinks['InnovationLabs']); 
                  
                  }
                  array_push($recommendations,$methodRecommendations);
                  array_push($analysis,$methodsAnalysis);
                  
                  ## Additional Methodology stuff
                  if ($opsMethods <2) {
                  array_push($analysis,"No automated security compliance in use.");
                  array_push($recommendations,"Consider using tools such as OpenSCAP");
                  array_push($workshops,$workshopLinks['OpenSCAP']);
                  }
                  
                  # Assess Environment
                  $opsEnvironment = $ops_arr[4];
                  $devEnvironment = $dev_arr[4];
                  $resourceRecommendations = "";
                  $overallEnvironment = $opsEnvironment + $devEnvironment;
                  $EnvironmentAnalysis = "The overall skills rating for Environment is " . assessOverallVals($overallEnvironment);
                  if($opsEnvironment > $devEnvironment) {
                    $EnvironmentAnalysis .= " although the Operations team are more mature than the Development team.";
                    $resourceRecommendations .= "Agile Development Workshop";
                  } elseif ($opsEnvironment < $devEnvironment) {
                    $EnvironmentAnalysis .= " although the Development team are more mature than the Operations team.";
                    $resourceRecommendations .= $workshopLinks['RHCE'];
                  } else {
                    $EnvironmentAnalysis .= " and both teams have the same level of maturity.";
                    $resourceRecommendations .= "";
                    }
                  
                  if ($overallEnvironment <= 2) {
                    $resourceRecommendations .= "Increase overall skills through an Open Innovation Lab</a>";
                  }
                  array_push($analysis,$EnvironmentAnalysis);
                  array_push($recommendations,$resourceRecommendations);
                  
                  if ($devEnvironment < 2) {
                  array_push($analysis,"Lack of DevOps Skills");
                  array_push($recommendations,"Review current DevOps Skills");
                  array_push($workshops,$workshopLinks['DevOpsReview']);
                  }
                  
                  ## Assess architecture
                  $opsArchs = $ops_arr[2];
                  $devArchs = $dev_arr[2];
                  $ArchRecommendations = "";
                  $overallArchs = $opsArchs + $devArchs;
                  $ArchsAnalysis = "The overall rating for architecture is " . assessOverallVals($overallArchs);
                  if($opsArchs > $devArchs) {
                    $ArchsAnalysis .= " although the Operations team have a higher architecture rating than the Development team.";
                    $ArchRecommendations .= "Container Platforms <br> Agile Development.";
                     array_push($workshops,$workshopLinks['ContainerPlatforms']); 
                     array_push($workshops,$workshopLinks['AgileDevelopment']); 
                       
                  } elseif ($opsArchs < $devArchs) {
                    $ArchsAnalysis .= " although the Development team are more mature than the Operations team.";
                    $ArchRecommendations .= "Increase infrastructure management and cloud awareness.";
                     array_push($workshops,$workshopLinks['CloudInfrastructure']);  
                     array_push($workshops,$workshopLinks['CloudManagement']);  
                  } else {
                    $ArchsAnalysis .= " and both teams have the same level of maturity.";
                    $ArchRecommendations .= "";
                  }
                  
                  if ($devArchs < 2) {
                     array_push($workshops,$workshopLinks['ContainerPlatforms']); 
                     array_push($workshops,$workshopLinks['AgileDevelopment']); 
                     array_push($workshops,$workshopLinks['Microservices']);  
                     $ArchsAnalysis .= " The Dev team could be improved through the use of more agile based architectures and microservices";
                    $ArchRecommendations .= " Increase use of microservices";
                  }
                  
                  array_push($recommendations,$ArchRecommendations);
                  array_push($analysis,$ArchsAnalysis);
                  
                  
                  ## Look for OSEP opportunities
                  
                  if ($devStrategy < 3 && $opsStrategy < 3) {
                  array_push($analysis,"Increase methodology and strategy through increased use of Open Source software");
                  array_push($recommendations,"OSEP Workshop");
                  array_push($workshops,$workshopLinks['OSEP']);  
                  }
                  
                  ?>
            </table>
            <div id="analysis-dialog" title="Analysis of Results">
               <table class="bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Analysis</th>
                        <th>Recommendations</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $i=1;
                        foreach ($analysis as $key => $answer) {
                        echo "<tr><td>$i</td><td>$answer</td><td>$recommendations[$key]</td></tr>";
                        $i++;
                        }
                        ?>
                  </tbody>
               </table>
               <br>
            </div>
            <br> 
            <!--<button id="analysis-opener">Open Analysis Dialog</button>-->
            <div id="priorities-dialog" title="Priority Areas">
               <table class="bordered">
                  <thead>
                     <tr>
                        <th>Timescale</th>
                        <th>Development Team</th>
                        <th>Operations Team</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        ## Create an array with all workshops by Dev/Ops breakdown
                        $allWorkshops = array(
                          "Development" => array (
                              "Automation" => "CI/CD To Production",
                              "Methodology" => "Container Platforms",
                              "Architecture" => "Microservices",
                              "Strategy" => "Business Influence Mapping",
                              "Environment" => "Agile Development Workshop",
                          ),
                          "Operations" => array (
                              "Automation" => "Adaptive SOE and Ansible Automation",
                              "Methodology" => "Innovation Labs (Ops Focus)",
                              "Architecture" => "Application Lifecycle Management",
                              "Strategy" => "Open Source Strategy",
                              "Environment" => "RH Training / GLS organisation review of skills",
                          )
                        );
                        
                        ## Sort the arrays to get them in ascending order of priority
                        asort($oWeight);
                        asort($dWeight);
                        
                        $top3Dev = $top3Ops = array();
                        
                        foreach ($oWeight as $key => $value) {
                          array_push($top3Ops,$key);
                        }
                        
                        foreach ($dWeight as $key => $value) {
                          array_push($top3Dev,$key);
                        }
                        
                        $timeScales = array("Short Term","Medium Term","Long Term");
                        for ($i=0; $i < 3; $i++) {
                        echo "<tr><td>$timeScales[$i]</td><td><b>$top3Dev[$i]</b><br>" . $allWorkshops['Development'][$top3Dev[$i]] . "</td><td><b>$top3Ops[$i]</b><br>" . $allWorkshops['Operations'][$top3Ops[$i]] . "</td></tr>";
                        }
                        ?>
                  </tbody>
               </table>
            </div>
            <!--<button id="priorities-opener">Top 3 Action Areas</button>-->
            <div id="workshop-dialog" title="Recommended Workshops">
               <table class="bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Workshops</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $i=1;
                        foreach (array_unique($workshops) as $workshop) {
                        echo "<tr><td>$i</td><td>$workshop</td></tr>";
                        $i++;
                        }
                        ?>
                  </tbody>
               </table>
            </div>
            
            <div id="average-dialog-dev" title="Average Comparison (Dev)">
               <canvas id="myChartDev" width="400" height="200"></canvas>
            </div>
            <div id="average-dialog-ops" title="Average Comparison (Ops)">
               <canvas id="myChartOps" width="400" height="200"></canvas>
            </div>
            <?php
               // Temporary hack, pending refactoring of resultsOpen.php to fetch the results
               // from the DB and not reproducing the entire code
               $url_parts = array();
               foreach ($data_array as $key => $val) {
                $url_parts[] = $key . '=' .urlencode($val);
               }
               $query_string = implode('&', $url_parts);
               ?>


            <!--
               <button id="open">Open Dialog box</button> 
               <div id="dialog" title="Basic dialog">
               <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
               </div>
               -->
         </div>
         <!-- end of main content div -->
         <!-- end of wrapper div -->
      </div>

      <script type="text/javascript" >
         // Get the DIV responses
         function saveHTMLDivs(divName,dataType,customer) {
          var htmlObj = document.getElementById(divName);
          var htmlRaw = htmlObj.innerHTML;
                      $.ajax({ 
                      type: "POST", 
                        url: "htmlSave.php",
                        data: "data="+htmlRaw+"&customer="+customer+"&dataType="+dataType,
                    });
         }
         
         //saveHTMLDivs("analysis-dialog","analysis",customerNameNoSpaces);
         //saveHTMLDivs("priorities-dialog","priorities",customerNameNoSpaces);
         
      </script>
      <?php
         ## Put all the relevant parts together in one doc ready for PDF
         $name = preg_replace('/\s+/', '', $data_array['client']);
         
         
         ?>
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
   </body>
</html>