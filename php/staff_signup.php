

<?php
$insert = false;
// if (isset($_POST['staff_num'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo("<html><h1>Hello</h1></html>");
    $host = "localhost";
    $user="patel4d1_My_residence";
    $pwd = "12345";
    $db="patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);
  // print_r("jainam");
  $staff_num = $_POST['staff_num'];
  //$username = $_POST['username'];
  //$userpwd = $_POST['password'];  
  $fname = $_POST['STAFF_FNAME'];
  $lname = $_POST['STAFF_LNAME'];
  $dob = $_POST['DOB'];
  $gender = $_POST['GENDER'];
  $position = $_POST['POSITION'];
  $loc = $_POST['loc'];
  $street = $_POST['STREET'];
  $city = $_POST['CITY'];
  $p_code = $_POST['POSTALCODE'];
  $place_num = $_POST['PALCE_NUM'];
// $temp ="INSERT INTO inspection (INSPECTION_ID, INSPECTOR_NAME, PLACENUM, DATE_OF_INSPECTION, INSPECTION_OUTCOME, COMMENTS) VALUES ($ID, '$NAME', '$PNUM', '$DATE', '$IO', '$COMM')";
  // $query1 = "INSERT INTO HOSTEL_STAFF(staff_num, staff_fname, staff_lname, dob, gender, position, loc, street, postalcode, city, place_num) VALUES ($staff_num,'$fname','$lname','$dob','$gender','$position','$loc','$street','$p_code','$city','$place_num')";
  
  
  
  $query1 = "INSERT INTO HOSTEL_STAFF(staff_num, staff_fname, staff_lname, dob, gender, position, loc, street, postalcode, city, place_num) VALUES (49,'AKsh','pat','2017/08/10','patel2','patel3','patel4','patel5','patel6','patel7','F12')";
  
  
  // $query2 = "INSERT INTO staff_login (staff_num,username,password) VALUES ($staff_num,'$username','$userpwd')";
  if ($conn->query($query1)== true) {
    $insert = true;
      echo "<br> Successfully Submitted";
  } else {
    echo "<br /> $query1 $conn->error";
    // header("location:admin_home.php");
  }
  $conn->close();
}

?>

