<!DOCTYPE html>
<html>
<head>
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <script src="raphael-2.1.4.min.js"></script>
    <script src="justgage.js"></script>
    <link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/grid.css"/>
    <link rel="stylesheet" type="text/css" href="css/glyphicon.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <title>Ready to Innovate Assessment</title>
<style media="all">
/**
 * ----------------------------------------------------------------
 * Fonts import
 * ----------------------------------------------------------------
 **/

@font-face {
  font-family: "Overpass Bold";
  src: url("../fonts/overpass_bold.eot?#iefix") format("embedded-opentype"), url("../fonts/overpass_bold.woff") format("woff"), url("../fonts/overpass_bold.ttf") format("truetype"), url("../fonts/overpass_bold.svg#Overpass Bold") format("svg");
}

@font-face {
  font-family: "Overpass Regular";
  src: url("../fonts/overpass_regular.eot?#iefix") format("embedded-opentype"), url("../fonts/overpass_regular.woff") format("woff"), url("../fonts/overpass_regular.ttf") format("truetype"), url("../fonts/overpass_regular.svg#Overpass Regular") format("svg");
}


html,
body {
   font-family: "Overpass Regular", arial, helvetica, sans-serif;
}

body {
    width: 66.6%;
    font-family: 'overpass';
    font-size: 14px;
    color: #444;
    width: 100%;
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

#docTitle {
    color:black;
    text-align:center;
    padding:5px;
  font-size: 6em;}

@media print {
    h1 {page-break-before: always;}
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
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
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
    border-left: 3px solid #fff;
    border-top: 1px solid #ccc;
    padding: 10px;


}

.bordered td{
  background-color: #f0f0f0;
  text-align: center;
  border-bottom: 2px solid #fff;
}

.bordered th {
    background-color: #cc0000 !important;
    color: #000;
    text-align: center;
    border-radius: 0 !important;
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.nav{
  background-color: #000;
  height: 60px;
  padding: 0 !important;
  margin: 0 !important;
}

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
            margin-bottom: 30px !important;
         }
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

p {
  font-size: 16px;
  line-height: 18px;
}

@media (max-width: 809px){
  img{
    width: 100%;
  }
}
  
</style>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#analysis-dialog" ).dialog({
      autoOpen: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 1000
    });
 
    $( "#analysis-opener" ).on( "click", function() {
      $( "#analysis-dialog" ).dialog( "open" );
    });
  } );
  </script>

  <script>
  $( function() {
    $( "#workshop-dialog" ).dialog({
      autoOpen: true,
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
      autoOpen: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 800
    });
 
    $("#priorities-opener" ).on( "click", function() {
      $("#priorities-dialog" ).dialog( "open" );
    });

  } );
  </script>

  <script>
  $( function() {
    $( "#average-dialog-dev" ).dialog({
      autoOpen: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 1000
    });
 
    $( "#average-opener-dev" ).on( "click", function() {
      $( "#average-dialog-dev" ).dialog( "open" );
    });
  } );
  </script>

  <script>
  $( function() {
    $( "#average-dialog-ops" ).dialog({
      autoOpen: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 1000
    });
 
    $( "#average-opener-ops" ).on( "click", function() {
      $( "#average-dialog-ops" ).dialog( "open" );
    });
  } );
  </script>

</head>

<body>
<div class="nav">
  <div class="inner-wrapper">
  <a class="navbar-brand" href="resultsOpen.php"><img src="images/Logo_RH_RGB_Reverse.png" style="width: 100px; margin: 0 0 0 0;"></a>
  </div>
</div>

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

<?php
## Connect to the Database 
include 'dbconnect.php';
connectDB();
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

<div class="inner-wrapper">


<p style="font-size: 20px; margin-top: 25px; font-weight: bold; font-family: 'overpass';">CLIENT RECOMMENDATIONS DOCUMENT</p>
<p style="padding: 10px 0 !important;">Prepared for <?php echo $data_array['client']; ?></p>
<p><span style="color: #cc0000; font-weight: bold; font-family: 'overpass';">DATE</span>: <?php echo date('l jS \of F Y') ?></p>

<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Originator</p>

<p style="font-family: 'overpass';">Red Hat Consulting</p>

<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Owner</p>

<p style="font-family: 'overpass';">Red Hat Consulting – Confidential (Restricted Distribution)</p>

<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Distribution</p>

<p style="font-family: 'overpass';">Do not forward or copy without written permission.</p>
<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Confidentiality</p>

<p style="font-family: 'overpass';">This is a confidential document between Red Hat, Inc. and  <?php echo $_GET['name']; ?> (“Client”).</p>
<p style="font-family: 'overpass';">All information supplied to the Client for the purpose of this project is to be considered Red Hat confidential.</p>

<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Disclaimer</p>

<p style="font-family: 'overpass';">This document is not a quote, and does not represent an official Statement of Work.  If acceptable, a formal quote can be issued, which will include a contract with the scope of work, cost, and any Client requirements if necessary.</p>




<p style="font-size: 20px; text-transform: uppercase; font-weight: bold; color: #cc0000; padding: 25px 0 20px 0; font-family: 'overpass';">Red Hat Consulting Solution Delivery Framework</p>
<p style="margin-bottom: 20px;"><img src="images/image00.png" alt="Delivery Framework"></p>
<br>
<p style="font-family: 'overpass';">Red Hat Consulting follows a repeatable framework for defining and implementing solutions with high value for our clients. That framework outlines a series of phases that each contribute to a clearly defined Client business driven goal. Red Hat Consulting aims to provide focused Client value across the areas of people, process, and technology, whilst also providing a supporting role in establishing bigger picture IT Transformation initiatives.</p>
 
<p style="font-family: 'overpass';">Beginning with a Ready To Innovate Session, Red Hat helps you understand your As-Is IT Organisational State. The 5 axis of focus provide a way of outlining areas of accomplishment and improvement within the Operations and Development teams within your IT Organisation. The focus areas highlight the core foundations of Native Cloud platforms, Advanced Software Development techniques and most importantly Strategy and Culture. Used simply as a discussion point or more seriously as a means of highlighting future areas for investment, the RTI State graph represents a window into your Organisation. As part of the analysis Red Hat can guide and advise on follow up focus areas for investment and next steps. This short guide provides your custom next steps based on the wide base of Red Hat Consulting offerings available as part of our Service Delivery Framework.</p>
<p style="font-family: 'overpass';">
Following the RTI session, the next steps are defined within the follow on focused Discover phase, a focused “Discovery Session” aligned with an RTI defined topic provides an opportunity to drive into a defined area of investment in more detail, mapping business requirements, defining IT Organisational initiatives and engagement areas and assisting with strategy and approach. The Discovery Session is the starting point of a Red Hat Consulting engagement. The following report proposes your custom Discovery Session next steps based on your RTI State graph and chosen areas of IT investment.</p>
 
<p style="font-family: 'overpass';">In the Design phase, we employ interactive workshops to rough out technologies, processes, and architectures; establish a strategy for your solution that integrates people, process, and technology; and build a backlog of tasks or use cases for prioritization. During the Deploy phase, we deliver 1 or more sprints or engagements to realize all or a portion of that strategy then deploy it within your environment.</p>
<p style="font-family: 'overpass';">
The Operate phase ensures that your Organisation is able to realise the true value of the Red Hat Consulting solution and technology. Critical to the ongoing maturity of your IT Organisation, Red Hat Consulting provide strategic partners to assist you in realising the value of our Open Source solutions and technologies.</p>

<p style="font-family: 'overpass';">The RTI driven Discover, Design, Deploy, Operate solution progression is complemented by our unique mentoring and collaboration approach as well as Red Hat Training offerings to better engage and accelerate client participation, uptake, and success. Finally, we do all of this within an iterative framework that builds on prior efforts to evolve capabilities alongside your business or to deliver complex, multi-technology solutions.</p>


<p style="font-size: 20px; text-transform: uppercase; font-weight: bold; color: #cc0000; padding: 25px 0 20px 0; font-family: 'overpass';">RTI Output Summary</p>
<p style="font-family: 'overpass';">The spider chart below shows the levels attained by <?php echo $_GET['name']; ?> during the Ready To Innovate Assessment:


<?php  
date_default_timezone_set("Europe/London");
## Connect to the Database 
#include 'dbconnect.php';
#connectDB();

#phpinfo();
 ?>

     

    <div style="width:50%">
    <center>
        <canvas id="canvas"></canvas>
        </center>
    </div>
        <script>
        
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return decodeURI(pair[1]);}
       }
       return(false);
}    

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

    var d1 = checkVal(<?php echo $data_array['d1']; ?>)
    var d2 = checkVal(<?php echo $data_array['d2']; ?>)
    var d3 = checkVal(<?php echo $data_array['d3']; ?>)
    var d4 = checkVal(<?php echo $data_array['d4']; ?>)
    var d5 = checkVal(<?php echo $data_array['d5']; ?>)
    
    var totalDev = d1 + d2 + d3 + d4 + d5

    var o1 = checkVal(<?php echo $data_array['o1']; ?>)
    var o2 = checkVal(<?php echo $data_array['o2']; ?>)
    var o3 = checkVal(<?php echo $data_array['o3']; ?>)
    var o4 = checkVal(<?php echo $data_array['o4']; ?>)
    var o5 = checkVal(<?php echo $data_array['o5']; ?>)

    var totalOps = o1 + o2 + o3 + o4 + o5

    var chartTitle = "DevOps Chart - " + customerName

    
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
                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                borderColor: window.chartColors.blue,
                pointBackgroundColor: window.chartColors.blue,
                data: [o1,o2,o3,o4,o5]

            },]
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
 
                title: {
            display: true,
            text: 'Comparison to Others (Development)'
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

                        title: {
            display: true,
            text: 'Comparison to Others (Operations)'
        }

  }
});  				
  		
};
             


    var colorNames = Object.keys(window.chartColors);
    </script>


<br>
<p>The results can also be seen below in tabular format</>
                   <table class="bordered">
    <thead>
    <tr>
        <th style="font-family: 'overpass'; color: #fff;">AREA</th>        
        <th style="font-family: 'overpass'; color: #fff;">DEVELOPMENT RATING</th>
        <th style="font-family: 'overpass'; color: #fff;">OPERATIONS RATING</th>
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
#$methodology_ops_array = array("Hosting/Management Only","Defined SLAs and ITIL","	Compliance & Security Auditing","SOE","Full DevOps culture");
#$architecture_dev_array = array("Ad-hoc choice of application dev tools","Selected vendor tech roadmap","Iterative development of existing applications.Limited legacy strategy","Focus on new platforms & limited legacy platforms","Holistic & defined overall development strategy");
#$architecture_ops_array = array("Ad-hoc choice of future platforms","Selected vendor tech roadmap","Focus on maintaining existing infrastructure","Primary focus on new applications","Defined strategy for exsiting and new architectures");
#$strategy_dev_array = array("The business dictates requirements","Mature requirements gathering approach (e.g. Agile user stories)","MVP approach","Multiple projects against business needs","IT driven business innovation");
#$strategy_ops_array = array("Instances of negative business impact","Good functioning service operations (i.e few unscheduled outage, but slow to deploy)","Project based service offerings (i.e no unscheduled outages and rapid deployment)","Self sevice operations for development & the business","Transparent integration with project IT");
#$environment_dev_array = array("Traditional programming techniques with No agreed tools","Initial agile adoption with 1 backlog per team","Extended team collaboration. Common DevOps skills","Continous cross-team improvement and collaboration","100% DevOps projects and Full cross-functional teams");
#$environment_ops_array = array("Standard \"Unix-like\" skills & no scripting skills","Direct VM interaction, limited scripting","Dynamic, templated images","Fully automated & deployment skills","100% DevOps engineers");

$totalDev = $totalOps = 0;

$workshops = array();
$workshopLinks = array(
	"AdaptiveSOE" => "Adaptive SOE",
	"InnovationLabs" => "Open Innovation Lab",
	"ContainerPlatforms" => "Container Platforms",
	"AgileDevelopment" => "Agile Development",
	"OpenSCAP" => "Compliance and Vulnerability Scanning Guide",
	"RHCE" => "Red Hat Certification (RHCE) for Operations team",
	"OSEP" => "Open Source Enablement",
	"BusinessInfluence" => "Strategy and Business Influence",
	"AnsibleAutomation" => "Ansible Automation",
	"CloudInfrastructure" => "Cloud Infrastructure",
	"CloudManagement" => "Cloud Management",
	"BusinessAutomation" => "Business Automation",
	"WalledGarden" => "Walled Garden Presentation",
	"DevOpsReview" => "Review of DevOps Skills",
	"Microservices" => "Microservices : Design and Architecture",
);

#$workshopLinks = array(
#	"AdaptiveSOE" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-adaptive-soe'>Adaptive SOE</a>",
#	"InnovationLabs" => "<a target=_blank href='https://mojo.redhat.com/groups/na-emerging-technology-practice/projects/red-hat-open-innovation-labs'>Open Innovation Lab</a>",
#	"ContainerPlatforms" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-modernize-app-delivery-with-container-platforms'>Container Platforms</a>",
#	"AgileDevelopment" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-965558'>Agile Development</a>",
#	"OpenSCAP" => "<a target=_blank href='https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html/Security_Guide/chap-Compliance_and_Vulnerability_Scanning.html'>Compliance and Vulnerability Scanning Guide</a>",
#	"RHCE" => "<a target=_blank href='https://www.redhat.com/en/services/certification/rhce'>Red Hat Certification (RHCE)</a> for Operations team",
#	"OSEP" => "<a target=_blank href='https://mojo.redhat.com/groups/osep-community-of-practice'>Open Source Enablement</a>",
#	"BusinessInfluence" => "<a target=_blank href='#'>Strategy and Business Influence</a>",
#	"AnsibleAutomation" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-accelerate-it-automation-with-ansible'>Ansible Automation</a>",
#	"CloudInfrastructure" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097461'>Cloud Infrastructure</a>",
#	"CloudManagement" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097463'>Cloud Management</a>",
#	"BusinessAutomation" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1041221'>Business Automation</a>",
#	"WalledGarden" => "<a target=_blank href='#'>Walled Garden Presentation</a>",
#	"DevOpsReview" => "<a target=_blank href='#'>Review of DevOps Skills</a>",
#	"Microservices" => "<a target=_blank href='#'>Microservices : Design and Architecture</a>",
#);


# Get all the URL vals
$url_qry_str  = explode('&', $_SERVER['QUERY_STRING']);

$md5 = md5($_SERVER['QUERY_STRING']);

foreach( $url_qry_str as $param )
    {
      $var =  explode('=', $param, 2);
      if(substr($var[0],0,1) == "o") { $ops_arr[]=ceil($var[1]); };
      if(substr($var[0],0,1) == "d") { $dev_arr[]=ceil($var[1]);};
      if(substr($var[0],0,4) == "client") { $custName=urldecode($var[1]); };
      if(substr($var[0],0,6) == "status") { $status=urldecode($var[1]); };
    }

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
	$methodRecommendations .= "  Container Platforms and Agile Development Coaching";
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
</div>


<<div class="inner-wrapper">

<p style="font-size: 20px; text-transform: uppercase; font-weight: bold; color: #cc0000; padding: 25px 0 20px 0; font-family: 'overpass';">Automated Analysis</p>
                   <table class="bordered">
    <thead>
    <tr>
        <th style="font-family: 'overpass'; color: #fff;">ID</th>
        <th style="font-family: 'overpass'; color: #fff;">ANALYSIS</th>
        <th style="font-family: 'overpass'; color: #fff;">RECOMMENDATIONS</th>
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



<p style="font-size: 20px; text-transform: uppercase; font-weight: bold; color: #cc0000; padding: 25px 0 20px 0; font-family: 'overpass';">Main Areas for Consideration</p>
    <table class="bordered">
    <thead>
    <tr>
    	  <th style="font-family: 'overpass'; color: #fff;">TIMESCALE</th>
        <th style="font-family: 'overpass'; color: #fff;">DEVELOPMENT TEAM</th>        
        <th style="font-family: 'overpass'; color: #fff;">OPERATIONS TEAM</th>        
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


<br>

    <table class="bordered">
    <thead>
    <tr>
    	  <th style="font-family: 'overpass'; color: #fff;">ID</th>
        <th style="font-family: 'overpass'; color: #fff;">WORKSHOPS</th>        
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
</div>



<div class="inner-wrapper">

<p style="font-size: 20px; text-transform: uppercase; font-weight: bold; color: #cc0000; padding: 25px 0 20px 0; margin-top: 25px; font-family: 'overpass';">Comparison with others</p>
<p style="font-family: 'overpass';">Some words about comparisons</p>
<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Development</p>
<canvas id="myChartDev"></canvas>

<p style="text-transform: uppercase; font-size: 18px; font-weight: bold; padding: 20px 0 0 0; font-family: 'overpass';">Operations</p>
<canvas id="myChartOps"></canvas>



</div>
<!-- end of main content div -->
<!-- end of wrapper div -->




<script type="text/javascript" >
// Get the DIV responses
//function saveHTMLDivs(divName,dataType,customer) {
// var htmlObj = document.getElementById(divName);
// var htmlRaw = htmlObj.innerHTML;
// 						$.ajax({ 
//				   	 	type: "POST", 
//    						url: "htmlSave.php",
//    						data: "data="+htmlRaw+"&customer="+customer+"&dataType="+dataType,
//						});
//}

//saveHTMLDivs("analysis-dialog","analysis",customerNameNoSpaces);
//saveHTMLDivs("priorities-dialog","priorities",customerNameNoSpaces);

</script>
</body>
</html>
