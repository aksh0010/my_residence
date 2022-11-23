<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host = "localhost";
    $user="patel4d1_My_residence";
    $pwd = "12345";
    $db="patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $staff_num = $_POST['STAFF_NUM'];
  $username = $_POST['username'];
  $userpwd = $_POST['password'];
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

  // $query1 = "INSERT INTO `HOSTEL_STAFF`(`STAFF_NUM`, `STAFF_FNAME`, `STAFF_LNAME`, `DOB`, `GENDER`, `POSITION`, `LOC`, `STREET`, `POSTALCODE`, `CITY`, `PLACE_NUM`) VALUES 
  //   ('$staff_num','$fname','$lname','$dob','$gender','$position','$loc','$street','$city','$p_code','$place_num')";
  // $query2 = "INSERT INTO `student_login`(`STD_ID`, `username`, `password`) VALUES ('$staff_num','$username','$userpwd')";

    $query1 = "INSERT INTO HOSTEL_STAFF(STAFF_NUM, STAFF_FNAME, STAFF_LNAME, DOB, GENDER, POSITION, LOC, STREET, POSTALCODE, CITY, PLACE_NUM) VALUES 
    (".$staff_num. ",".$fname.",".$lname.",".$dob.",".$gender.",".$position.",".$loc.",".$street.",".$city.",". $p_code.",".$place_num.")";
  $query2 = "INSERT INTO `student_login`(`STD_ID`, `username`, `password`) VALUES ( ".$staff_num.",".$username.",".$userpwd.")";
  
  // $query = "SELECT * FROM admin_login WHERE USERNAME='$username' AND PASSWORD = '$userpwd'";

  // $query1 = "INSERT INTO HOSTEL_STAFF(STAFF_NUM, STAFF_FNAME, STAFF_LNAME, DOB, GENDER, POSITION, LOC, STREET, POSTALCODE, CITY, PLACE_NUM) VALUES 
  // ('$staff_num','$fname','$lname','$dob','$gender','$position','$loc','$street','$city','$p_code','$place_num')";
  // $query2 = "INSERT INTO student_login (STD_ID, username, password) VALUES ('$staff_num','$username','$userpwd')";


  if (($conn->query($query1) && $conn->query($query2)) == true) {
    $insert =
      true;
  } else {
    echo "<br />
$conn->error";
    // header("location:admin_home.php");
  }
  $conn->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    .id {
      padding-right: 500px;
      padding-left: 500px;
    }
  </style>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body style="text-align: center">
  <!-- div for nav bar if needed -->
  <div>
    <h1 style="text-align: center">
      <b><i>Staff Registration Form</i></b>
    </h1>
  </div>
  <br /><br />
  <!-- Div for the rest of code  -->
  <div>
    <form style="padding-left: 500px" action="#" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Staff Member Number </label>
          <input type="number" class="form-control" id="STAFF_NUM" placeholder="Enter number" />
        </div>
        <div class="form-group col-md-6">
          <label>Username </label>
          <input type="text" class="form-control" id="username" placeholder="First Name" />
        </div>
        <div class="form-group col-md-6">
          <label>Password </label>
          <input type="password" class="form-control" id="password" placeholder="First Name" />
        </div>
        <div class="form-group col-md-6">
          <label>First Name </label>
          <input type="text" class="form-control" id="staff_fname" placeholder="First Name" />
        </div>
      </div>
      <div class="form-group col-md-6">
        <label>Last Name </label>
        <input type="text" class="form-control" id="staff_lname" placeholder="Last Name" />
      </div>
      <div class="form-group col-md-6">
        <label>DOB </label>
        <input type="date" class="form-control" id="dob" />
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Gender </label>
          <input type="text" class="form-control" id="gender" />
        </div>
        <div class="form-group col-md-6">
          <label>Position </label>
          <input type="text" class="form-control" id="position" />
        </div>
        <div class="form-group col-md-6">
          <label>Location </label>
          <input type="text" class="form-control" id="loc" />
        </div>
        <div class="form-group col-md-6">
          <label>Street Name </label>
          <input type="text" class="form-control" id="street" />
        </div>
        <div class="form-group col-md-6">
          <label>Postal Code </label>
          <input type="text" class="form-control" id="postalcode" />
        </div>
        <div class="form-group col-md-6">
          <label>City </label>
          <input type="text" class="form-control" id="city" />
        </div>
        <div class="form-group col-md-6">
          <label>Place Number </label>
          <input type="number" class="form-control" id="place_num" />
        </div>
      </div>
      <br />
      <button type="submit" id="btn" class="btn btn-primary">Register</button>
      <br /><br />
      <button type="submit" id="btn" class="btn btn-primary">
        <a href="admin_login.php"> Go Back</a>
      </button>
    </form>
  </div>
</body>

</html>