<?php

function getWorkshops($hash) {

## Set up some vars
$totalDev = $totalOps = 0;
$workshops = array();
$workshopLinks = array(
	"AdaptiveSOE" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-adaptive-soe'>Adaptive SOE</a>",
	"InnovationLabs" => "<a target=_blank href='https://mojo.redhat.com/groups/na-emerging-technology-practice/projects/red-hat-open-innovation-labs'>Open Innovation Lab</a>",
	"ContainerPlatforms" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-modernize-app-delivery-with-container-platforms'>Container Platforms</a>",
	"AgileDevelopment" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-965558'>Agile Development</a>",
	"OpenSCAP" => "<a target=_blank href='https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html/Security_Guide/chap-Compliance_and_Vulnerability_Scanning.html'>Compliance and Vulnerability Scanning Guide</a>",
	"RHCE" => "<a target=_blank href='https://www.redhat.com/en/services/certification/rhce'>Red 588b1f219b9d60d5f1fa6c47d5278909Hat Certification (RHCE)</a> for Operations team",
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

## Get the data from the database
date_default_timezone_set("Europe/London");
## Connect to the Database 
include 'dbconnect.php';
connectDB();
global $db;
print_r($db);

$ops_arr = $dev_arr = array();
$qq = "SELECT * FROM data WHERE hash='".mysqli_real_escape_string($db, $hash)."'";
$res = mysqli_query($db, $qq);
$data_array = mysqli_fetch_assoc($res);

foreach( $data_array as $var => $value )
    {
    	if($var=='date') continue;
      if(substr($var[0],0,1) == "o") { $ops_arr[]=$value; };
      if(substr($var[0],0,1) == "d") { $dev_arr[]=$value;};
    }

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
}

if ($ops_arr[0]  < 2) {
array_push($workshops,$workshopLinks['AdaptiveSOE']);
array_push($workshops,$workshopLinks['AnsibleAutomation']);
}

## Dev Automation
$devAutomationAnalysis = $devAutomationRecommendations = "";
switch($dev_arr[0]) {
	case 0:
		array_push($workshops,$workshopLinks['WalledGarden']);
		break;
	case 1:
		break;
	case 2:
		break;
}


if ($dev_arr[0] < 1) {
array_push($workshops,$workshopLinks['BusinessAutomation']);
}

## Assess strategy
$opsStrategy = $ops_arr[3];
$devStrategy = $dev_arr[3];
$overallStrategy = $opsStrategy + $devStrategy;
if($opsStrategy > $devStrategy) {
	array_push($workshops,"Strategy and Business Influence Workshop");
	array_push($workshops,"Business Influence Mapping");	
} elseif ($opsStrategy < $devStrategy) {
	$strategyRecommendations .= "Strategy and Business Influence Workshop";
} 

if ($overallStrategy <= 2) {
	array_push($workshops,$workshopLinks['InnovationLabs']);	
	array_push($workshops,$workshopLinks['BusinessInfluence']);	
	array_push($workshops,"Business Influence Mapping");	
}

## Assess methodology
$opsMethods = $ops_arr[1];
$devMethods = $dev_arr[1];
$overallMethods = $opsMethods + $devMethods;
if($opsMethods > $devMethods) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);	
   array_push($workshops,$workshopLinks['AgileDevelopment']);	
     
} elseif ($opsMethods < $devMethods) {
   array_push($workshops,$workshopLinks['AdaptiveSOE']);	
} 

if ($devMethods < 2) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);	
   array_push($workshops,$workshopLinks['AgileDevelopment']);	
}

if ($overallMethods <= 2) {
   array_push($workshops,$workshopLinks['InnovationLabs']);	

}

## Additional Methodology stuff
if ($opsMethods <2) {
array_push($workshops,$workshopLinks['OpenSCAP']);
}

# Assess Environment
$opsEnvironment = $ops_arr[4];
$devEnvironment = $dev_arr[4];
$resourceRecommendations = "";
$overallEnvironment = $opsEnvironment + $devEnvironment;

if ($devEnvironment < 2) {
array_push($workshops,$workshopLinks['DevOpsReview']);
}

## Assess architecture
$opsArchs = $ops_arr[2];
$devArchs = $dev_arr[2];
$ArchRecommendations = "";
$overallArchs = $opsArchs + $devArchs;
if($opsArchs > $devArchs) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);	
   array_push($workshops,$workshopLinks['AgileDevelopment']);	
     
} elseif ($opsArchs < $devArchs) {
   array_push($workshops,$workshopLinks['CloudInfrastructure']);	
   array_push($workshops,$workshopLinks['CloudManagement']);	
} 

if ($devArchs < 2) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);	
   array_push($workshops,$workshopLinks['AgileDevelopment']);	
   array_push($workshops,$workshopLinks['Microservices']);	
}

## Look for OSEP opportunities

if ($devStrategy < 3 && $opsStrategy < 3) {
array_push($workshops,$workshopLinks['OSEP']);	
}    

print_r($workshops);
return $workshops;
}

getWorkshops($_REQUEST['hash']);

?>