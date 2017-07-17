<?php       
include 'dbconnect.php';
connectDB();
$data = array();
$result = mysqli_query($db, "select count(*) as total, country from data group by country order by total desc;");
$i=0;
foreach ($result as $row) {
	$data[] = $row;
	$i++;
}
    
#    while($row = mysqli_fetch_array($result))
#    {        
#        $point = array("x" => $row['date'], "y" => $row['total']);
#        $point = array("x" => $row['country'], "y" => $row['total'], "legendText" => $row['country'], "label" => $row['country']);
#        $point = array("x" => $row['date'], "y" => $row['total']);
#        array_push($data_points, $point);        
#    }
    
    echo json_encode($data, JSON_NUMERIC_CHECK);

?>