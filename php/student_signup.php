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
  $place_num = $_POST['PALCE_NUM'];

  $insert_query1 = "INSERT INTO `STUDENT`(`STD_ID`, `STD_FNAME`, `STD_LNAME`, `STREET`, `CITY`, `POSTAL_CODE`, `DOB`, `GENDER`, `STUDENT_CATEGORY`, `NATIONALITY`, `SPECIAL_NEEDS`, `COMMENTS`, `CURRENT_STATUS`, `COURSE_ENROLLED`, `ADVISOR_ID`, `PLACE_NUM`) VALUES ('$std_id','$fname]','$lname','$street','$city','$p_code','$dob','$gender','$s_category','$nationality','$s_needs','$comments','$c_status','$c_enrolled','$adv_id','$place_num')";
  $insert_query2 = "INSERT INTO `student_login`(`STD_ID`, `username`, `password`) VALUES ('$std_id','$username','$userpwd')";
  // $query = "SELECT * FROM admin_login WHERE USERNAME='$username' AND PASSWORD = '$userpwd'";

  // $result1 = mysqli_query($conn, $insert_query1);
  // $result2 = mysqli_query($conn, $insert_query2);

  if (($conn->query($insert_query1) && $conn->query($insert_query2)) == true) {

    $insert = true;
  } else {
    echo "Error1 $insert_query1 <bR> Error2 $insert_query2 <br> $conn->error";
  }
  // if (mysqli_num_rows($result1) == 1 && mysqli_num_rows($result2) == 1) {
  //   session_start();
  //   $_SESSION['patel4d1_My_residence'] = 'true';
  //   // header("location:admin_home.php");

  //   echo "<h1>Student Data inserted</h1>";
  //   echo "<br><button> <a href='admin_home.php'>Go Back</a> </button>";
  // } else {

  //   echo "Wrong User name or password ! ";

  //   echo "<br><button> <a href='login_page.php'>Login Page</a> </button>";
  // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body style="text-align: center;">
  <!-- !! div for nav bar if needed -->
  <div>
    <center>
      <h1><i> <b> Student Signup</b></i> </h1>
    </center>
  </div>

  <!-- !! Div for the rest of code  -->
  <div>
    <form style="padding-left: 500px;" action="#" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Student ID</label>
          <input type="number" class="form-control" id="STD_ID" placeholder="Enter you Student ID" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter your Username" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" />
        </div>
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress">First name</label>
        <input type="text" class="form-control" id="STD_FNAME" placeholder="eg: John" />
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">LAST NAME</label>
        <input type="text" class="form-control" id="STD_LNAME" placeholder="eg: Smith" />
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Street</label>
          <input type="text" class="form-control" id="STREET" placeholder="123 rosedale avenue" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="CITY" />
        </div>
        <!-- <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div> -->
        <div class="form-group col-md-6">
          <label for="inputZip">Postal code</label>
          <input type="text" class="form-control" id="POSTAL_CODE" />
        </div>
      </div>

      <div>
        <div class="form-group col-md-6">
          <label for="inputZip">Date of birth</label>
          <input type="date" class="form-control" id="DOB" />
        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Gender</label>
          <input type="text" class="form-control" id="GENDER" />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Category</label>
          <input type="text" class="form-control" id="STUDENT_CATEGORY" placeholder="Masters / Bachelors" />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Nationality</label>
          <input type="text" class="form-control" id="NATIONALITY" placeholder="eg:Canadian " />

        </div>

        <div class="form-group col-md-6">
          <label for="inputZip">Special Needs</label>
          <input type="text" class="form-control" id="SPECIAL_NEEDS" placeholder="eg: N/A if none" />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Comments</label>
          <input type="text" class="form-control" id="COMMENTS" placeholder="eg: Preferences .." />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Current Status</label>
          <input type="text" class="form-control" id="CURRENT_STATUS" placeholder="eg: enrolled / not-enrolled" />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Course Enrolled</label>
          <input type="text" class="form-control" id="COURSE_ENROLLED" placeholder="eg: Computer science / Business " />

        </div>

        <div class="form-group col-md-6">
          <label for="inputZip">Advisor ID</label>
          <input type="number" class="form-control" id="ADVISOR_ID" placeholder="eg: 123456 " />

        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Place num for Student</label>
          <input type="text" class="form-control" id="PLACE_NUM" placeholder="eg: H10 \ F12" />

        </div>
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
      <br><br>
      <button type="submit" id="btn" class="btn btn-primary"> <a href="admin_login.php"> Go Back</a> </button>

    </form>
  </div>
</body>

</html>