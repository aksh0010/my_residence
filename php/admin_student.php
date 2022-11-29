

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../php/css/about-us.css" />
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
<div class= "container2">
  <?php
  $host = "localhost";
  $user="patel4d1_My_residence";
  $pwd = "12345";
  $db="patel4d1_My_residence";

  $conn = mysqli_connect($host, $user, $pwd, $db);

  $id =  $_POST['std_id'];
  if (!$conn) {
    die("Connection error " . mysqli_connect_error());
  }
  // User information 
  echo"<div class= 'container'>";
  $sqlq = "SELECT std_id, std_fname, std_lname, student_category, course_enrolled, place_num FROM STUDENT 
            WHERE std_id =" . $id . ";";
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
  echo "<tr><th>Student ID</th><th>Student First Name</th><th>Student Last Name</th><th>Category</th><th>Enrollment</th><th>Place Number</th></tr>";
  foreach ($resArr as $std) {
    echo "<tr><td> " . $std['std_id'] . " </td>" .
      "<td> " . $std['std_fname'] . " </td>" .
      "<td> " . $std['std_lname'] . " </td>" .
      "<td> " . $std['student_category'] . " </td>" .
      "<td> " . $std['course_enrolled'] . " </td>" .
      "<td> " . $std['place_num'] . " </td></tr>";
  }
  echo "</table>";
  
  // lease agreeement 
  echo"<hr><br><br> <p> Lease Information</p>";
  $sqlq1 = "SELECT lease_num,rental_term ,move_in,move_out,place_num,std_id FROM `LEASES` WHERE std_id =" . $id . ";";
  $result1 = $conn->query($sqlq1);
  $num1 = mysqli_num_rows($result1);
  $resArr1 = array();

  if ($num1 > 0) {
    while ($item = mysqli_fetch_assoc($result1)) {
      $resArr1[] = $item;
    }
  }

  echo "<table>";
  echo "<tr><th>Lease Number</th><th>Rental term</th><th>Move IN</th><th>Move OUT</th><th>Place Number</th><th>Student ID</th></tr>";
  foreach ($resArr1 as $std1) {
    echo "<tr><td> " . $std1['lease_num'] . " </td>" .
      "<td> " . $std1['rental_term'] . " </td>" .
      "<td> " . $std1['move_in'] . " </td>" .
      "<td> " . $std1['move_out'] . " </td>" .
      "<td> " . $std1['place_num'] . " </td>" .
      "<td> " . $std1['std_id'] . " </td></tr>";
  }
  echo "</table><hr>";
  echo "</div>";


  $conn->close();
  ?>
  <br>
  <Center><button class="btn btn-info" style="text-decoration:none"> <a href="admin_home.php">Go back</a> </button></Center>
</div>
</body>

</html>