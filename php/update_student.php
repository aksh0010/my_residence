<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $host = "localhost";
  $user = "patel4d1_My_residence";
  $pwd = "12345";
  $db = "patel4d1_My_residence";
 

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $std_id = $_POST['STD_ID'];
  $fname = $_POST['STD_FNAME'];
  $lname = $_POST['STD_LNAME'];
  $street = $_POST['STREET'];
  $city = $_POST['CITY'];
  $p_code = $_POST['POSTAL_CODE'];
  $dob = $_POST['DOB'];
  $gender = $_POST['GENDER'];
  $s_category = $_POST['STUDENT_CATEGORY'];
  $nationality = $_POST['NATIONALITY'];
  $c_status = $_POST['CURRENT_STATUS'];
  $c_enrolled = $_POST['COURSES_ENROLLED'];
  $adv_id = $_POST['ADVISOR_ID'];
  $place_num = $_POST['PLACE_NUM'];

  $update_query = "UPDATE `STUDENT` SET `STD_FNAME`='$fname',`STD_LNAME`='$lname',`STREET`='$street',`CITY`='$city',
  `POSTAL_CODE`='$p_code',`DOB`='$dob',`GENDER`='$gender',`STUDENT_CATEGORY`='$s_category',`NATIONALITY`='$nationality',
  `CURRENT_STATUS`='$c_status',`COURSE_ENROLLED`='$c_enrolled',`ADVISOR_ID`='$adv_id',`PLACE_NUM`='$place_num' WHERE `STD_ID`='$std_id',";
  
  if ($conn->query($update_query) == true) {

    $insert = true;
    echo "<br> successfully updated to Database";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
 
  } else {
    echo "<br> Unsuccessfull to update data :(";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
    echo "<br> <br> <br> $conn->error";
  
  }
}
