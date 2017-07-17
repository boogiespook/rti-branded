<?php       
include 'dbconnect.php';
connectDB();
$result = mysqli_query($db, "select lob as Industry, count(*) as Total from data group by lob order by total desc");
$data = array();
$i=0;
foreach ($result as $row) {
	$data[] = $row;
	$i++;
}
    
#    while($row = mysqli_fetch_array($result))
#    {        
#        $point = array("x" => $row['lob'], "y" => $row['total'], "legendText" => $row['lob'], "label" => $row['lob']);
#        array_push($data_points, $point);        
#    }
#    
#    echo json_encode($data_points, JSON_NUMERIC_CHECK);
print json_encode($data);

?>