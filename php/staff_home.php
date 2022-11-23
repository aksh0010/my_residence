<?php
include 'staff_auth.php';
session_start();
if (!$_SESSION['patel4d1_My_residence'] && !$_SESSION['staff_num']) {

  header('location:login_page.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css Bundle with Popper  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>Student home</title>
  <style>
    table {
      border-spacing: 2px;
      font-size: 20px;
      border: 2px solid black;
    }

    tr,
    td,
    th {
      border-spacing: 1px;
      font-size: 20px;
      border: 1px solid black;
    }
  </style>
</head>

<body>
  
  <?php
  $host = "localhost";
  $user="patel4d1_My_residence";
  $pwd = "12345";
  $db="patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $id =  $_SESSION['staff_num'];
  if (!$conn) {
    die("Connection error " . mysqli_connect_error());
  }
  // User information 
  $sqlq = "SELECT staff_num, staff_fname, staff_lname, position, place_num FROM hostel_staff 
            WHERE staff_num =" . $id . ";";
  $result = $conn->query($sqlq);
  $num = mysqli_num_rows($result);
  $resArr = array();

  if ($num > 0) {
    while ($item = mysqli_fetch_assoc($result)) {
      $resArr[] = $item;
    }
  }
echo "<center class=". "navbar navbar-light bg-light"."> <h1>Account no ".$id ."</h1> 
</center>";
echo"<hr><br> <p> Personal Information</p>";
  echo "<table>";
  echo "<tr><th>Staff ID</th><th>Staff First Name</th><th>Staff Last Name</th><th>Position</th><th>Place Number</th></tr>";
  foreach ($resArr as $std) {
    echo "<tr><td> " . $std['staff_num'] . " </td>" .
      "<td> " . $std['staff_fname'] . " </td>" .
      "<td> " . $std['staff_lname'] . " </td>" .
      "<td> " . $std['position'] . " </td>" .
      "<td> " . $std['place_num'] . " </td></tr>";
  }
  echo "</table>";
  // Inspection details 
  echo"<hr><br><br> <p> Inspection Information</p>";
  $sqlq1 = "SELECT inspection_num,inspector_name ,inspection_date,flat_num,place_num,staff_num FROM `flat_inspections` WHERE staff_num =" . $id . ";";
  $result1 = $conn->query($sqlq1);
  $num1 = mysqli_num_rows($result1);
  $resArr1 = array();

  if ($num1 > 0) {
    while ($item = mysqli_fetch_assoc($result1)) {
      $resArr1[] = $item;
    }
  }

  echo "<table>";
  echo "<tr><th>Inspection Number</th><th>Inspector Name</th><th>Date</th><th>Flat Number</th><th>Place Number</th><th>Staff number</th></tr>";
  foreach ($resArr1 as $std1) {
    echo "<tr><td> " . $std1['inspection_num'] . " </td>" .
      "<td> " . $std1['inspector_name'] . " </td>" .
      "<td> " . $std1['inspection_date'] . " </td>" .
      "<td> " . $std1['flat_num'] . " </td>" .
      "<td> " . $std1['place_num'] . " </td>" .
      "<td> " . $std1['staff_num'] . " </td></tr>";
  }
  echo "</table><hr>";



  $conn->close();
  ?>


  <br>
  <button class="btn btn-warning" style="text-decoration:none"> <a href="logout.php">Log out</a> </button>
</body>

</html>