<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $host = "localhost";
  $user = "patel4d1_My_residence";
  $pwd = "12345";
  $db = "patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $adv_id = $_POST['advisor_id'];
  $fname =  $_POST['adv_fname'];
  $lname = $_POST['adv_lname'];
  $position =  $_POST['position'];
  $dname =  $_POST['dept_name'];
  $t_num = $_POST['tele_num'];
  $r_num = $_POST['room_num'];
  
  $query1 = "INSERT INTO STUDENT_ADVISOR(ADVISOR_ID, ADV_FNAME, ADV_LNAME, POSITION, DEPT_NAME, TELE_NUM, ROOM_NUM) 
  VALUES ($adv_id,'$fname','$lname','$position','$dname','$t_num','$r_num')";

  if ($conn->query($query1) == true) {

    $insert = true;
    echo "<br> Successfully inserted to Database";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
  } else {


    echo "<br> Unsuccessfully to insert data(";
    echo "<html> <br><br><a href="."admin_home.php"."> Go Back</a></html> ";
    echo "<br> <br> <br> $conn->error";
  }
  $conn->close();
}
