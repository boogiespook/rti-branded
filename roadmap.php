
<!doctype html>
<html lang="en">
<head>

<title>RTI Roadmap</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="roadmap.css">
<link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<?php
$string = file_get_contents("workshops.json");
#$string = file_get_contents("workshops-new.json");
$json = json_decode($string, true);

$devArray = $opsArray = $generalArray = $devDuration = $opsDuration = $generalDuration = array();

$devArrayA = $json['Development'];
$opsArrayA = $json['Operations'];
$generalArrayA = $json['General'];
#print_r($devArray[0]);
foreach ($devArrayA as $val) {
array_push($devArray, $val[0]);
array_push($devDuration, $val[1]);
}

foreach ($opsArrayA as $val) {
array_push($opsArray, $val[0]);
array_push($opsDuration, $val[1]);
}

foreach ($generalArrayA as $val) {
array_push($generalArray, $val[0]);
array_push($generalDuration, $val[1]);
}


#$devArray = $json['Development']['workshops'];
#$opsArray = $json['Operations']['workshops'];
#$generalArray = $json['General']['workshops'];

?>
<script type="text/javascript">

var correctCards = devWorkshops = opsWorkshops = generalWorkshops = 0;
$( init );

function init() {

  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );

  // Reset the game
  correctCards = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
  //workshops.sort( function() { return Math.random() - .5 } );
  
  
  var workshopsOps = [<?php echo '"'.implode('","', $opsArray).'"';  ?>]
  var opsDuration = [<?php echo '"'.implode('","', $opsDuration).'"';  ?>]
  //console.log(opsDuration)
  for ( var i=0; i< workshopsOps.length; i++ ) {
	var ii = i + 1;
    $('<div duration="' + opsDuration[i] + '">' + workshopsOps[i] + '</div>').data( 'number', workshopsOps[i] ).attr( 'id', 'cardOps' ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }


  var workshopsDev = [<?php echo '"'.implode('","', $devArray).'"';  ?>]
  var devDuration = [<?php echo '"'.implode('","', $devDuration).'"';  ?>]
  for ( var i=0; i< workshopsDev.length; i++ ) {
	var ii = i + 1;
    $('<div duration="' + devDuration[i] + '">' + workshopsDev[i] + '</div>').data( 'number', workshopsDev[i] ).attr( 'id', 'cardDev' ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }

  var workshopsGeneral = [<?php echo '"'.implode('","', $generalArray).'"';  ?>]
  var generalDuration = [<?php echo '"'.implode('","', $generalDuration).'"';  ?>]
  for ( var i=0; i< workshopsGeneral.length; i++ ) {
	var ii = i + 1;
    $('<div duration="' + generalDuration[i] + '">' + workshopsGeneral[i] + '</div>').data( 'number', workshopsGeneral[i] ).attr( 'id', 'cardGeneral' ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }

  // Create the timeline card slots
  var wordsOps = [ '1', '2', '3'];
  for ( var i=1; i<=3; i++ ) {
    $('<div>' + wordsOps[i-1] + '</div>').data( 'number', i ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }


function handleCardDrop( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
  var typeId = ui.draggable["0"].id;
  switch(ui.draggable["0"].id) {
	case "cardOps":
		opsWorkshops++
		break;
	case "cardDev":
		devWorkshops++
		break;
	case "cardGeneral":
	   generalWorkshops++
	   break;
  }
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'enable' );
//    console.log(ui)
    $(this).droppable( 'enable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctCards++;
    document.getElementById("opsWorkshops").innerHTML = opsWorkshops;
	 document.getElementById("devWorkshops").innerHTML = devWorkshops;
    document.getElementById("generalWorkshops").innerHTML = generalWorkshops;
    document.getElementById("totalWorkshops").innerHTML = correctCards;
}
}
</script>

</head>
<body>

<div class="wideBox">
  <h1>Navigate Charter</h1>
</div>

<div id="content">

  <div id="cardPile"></div>
IT Busniess Requirements    <div id="cardSlots"></div>Priority


<!-- <br>
<p>Operations Workshops: <span id="opsWorkshops">0</span></p>
<p>Development Workshops: <span id="devWorkshops">0</span></p>
<p>General Workshops: <span id="generalWorkshops">0</span></p>
<p><b>Total Workshops: <span id="totalWorkshops">0</span></b></p>
 -->

</div>

</body>
</html>

