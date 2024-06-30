<?php
$conn = mysqli_connect("localhost", "root", "", "rojgar bharat");
$employee = mysqli_query($conn, "SELECT * FROM employees");
$employer= mysqli_query($conn, "SELECT * FROM employer");
 
$data = array();
while ($row = mysqli_fetch_object($employee))
{
    array_push($data, $row);
}
//echo json_encode($data);

$employer_data=array();
while ($employer_row = mysqli_fetch_object($employer))
{
   array_push($employer_data, $employer_row);
}
$new_array=array($data,$employer_data);
echo json_encode($new_array);
?>