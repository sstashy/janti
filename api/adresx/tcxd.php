
<?php
header ('Content-type: text/html; charset=utf-8'); 

include "connect-tc.php";

if(isset($_GET['tc'])) {

}
     {
        $tc = $_GET['tc'];
     
        $sql = "SELECT * FROM 101m WHERE TC='$tc'";
    } 
$result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

$fayujarray = array();
    while($row = mysqli_fetch_assoc($result)) {

    $fayujarray[] = $row;

  }

echo json_encode($fayujarray, JSON_UNESCAPED_UNICODE);


?>
