<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// if (isset($_POST['submit'])) {
  $host = "localhost";
  $user = "patel4d1_My_residence";
  $pwd = "12345";
  $db = "patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $staff_num = $_POST['staff_num'];
  $fname =  $_POST['staff_fname'];
  $lname = $_POST['staff_lname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $position =  $_POST['position'];
  $loc =  $_POST['loc'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $p_code = $_POST['postalcode'];
  
  $update = "UPDATE `HOSTEL_STAFF` SET `STAFF_FNAME`='$fname',`STAFF_LNAME`='$lname',`DOB`='$dob',
  `GENDER`='$gender',`POSITION`='$position',`LOC`='$loc',
  `STREET`='$street',`POSTALCODE`='$p_code',`CITY`='$city',`PLACE_NUM`='$staff_num' 
  WHERE `STAFF_NUM`='[value-1]';";

  if ($conn->query($update) == true) {
    $insert = true;
    echo "<br> successfully inserted to Database";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
  } 
  else {
    echo "<br> Unsuccessfully to insert data(";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
    echo "<br> <br> <br> $conn->error";
  }
  $conn->close();
}
