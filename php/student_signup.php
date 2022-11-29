<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $host = "localhost";
  $user = "patel4d1_My_residence";
  $pwd = "12345";
  $db = "patel4d1_My_residence";
 

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $std_id = $_POST['STD_ID'];
  $username = $_POST['username'];
  $userpwd = $_POST['password'];
  $fname = $_POST['STD_FNAME'];
  $lname = $_POST['STD_LNAME'];
  $street = $_POST['STREET'];
  $city = $_POST['CITY'];
  $p_code = $_POST['POSTAL_CODE'];
  $dob = $_POST['DOB'];
  $gender = $_POST['GENDER'];
  $s_category = $_POST['STUDENT_CATEGORY'];
  $nationality = $_POST['NATIONALITY'];
  $s_needs = $_POST['SPECIAL_NEEDS'];
  $comments = $_POST['COMMENTS'];
  $c_status = $_POST['CURRENT_STATUS'];
  $c_enrolled = $_POST['COURSES_ENROLLED'];
  $adv_id = $_POST['ADVISOR_ID'];
  $place_num = $_POST['PLACE_NUM'];


  $insert_query1 = "INSERT INTO STUDENT(STD_ID, STD_FNAME, STD_LNAME, STREET, CITY, POSTAL_CODE, DOB, GENDER, STUDENT_CATEGORY, NATIONALITY, SPECIAL_NEEDS, COMMENTS, CURRENT_STATUS, COURSE_ENROLLED, ADVISOR_ID, PLACE_NUM) VALUES ($std_id,'$fname]','$lname','$street','$city','$p_code','$dob','$gender','$s_category','$nationality','$s_needs','$comments','$c_status','$c_enrolled',$adv_id,'$place_num')";
  $insert_query2 = "INSERT INTO student_login(STD_ID, username, password) VALUES ($std_id,'$username','$userpwd')";

  if (($conn->query($insert_query1) && $conn->query($insert_query2)) == true) {

    $insert = true;
    echo "<br> successfully inserted to Database";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
 
  } else {
    echo "<br> Unsuccessfully to insert data(";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
    echo "<br> <br> <br> $conn->error";
  
  }
}
?>
