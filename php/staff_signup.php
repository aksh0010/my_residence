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
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  $fname =  $_POST['staff_fname'];
  $lname = $_POST['staff_lname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $position =  $_POST['position'];
  $loc =  $_POST['loc'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $p_code = $_POST['postalcode'];
  
  $query1 = "INSERT INTO HOSTEL_STAFF(staff_num, staff_fname, staff_lname, dob, gender, position, loc, street, postalcode, city)
     VALUES ($staff_num,'$fname','$lname','$dob','$gender','$position','$loc','$street','$p_code','$city')";
  $query2 = "INSERT INTO staff_login (staff_num, username, password) VALUES ($staff_num, '$uname', '$pwd');";

  if (($conn->query($query1) && $conn->query($query2)) == true
  ) {

    $insert = true;
    echo "<br> successfully inserted to Database";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
  } else {


    echo "<br> Unsuccessfully to insert data(";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
    echo "<br> <br> <br> $conn->error";
  }
  $conn->close();
}
?>