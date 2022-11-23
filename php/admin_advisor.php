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

  $id =  $_POST['id'];
  if (!$conn) {
    die("Connection error " . mysqli_connect_error());
  }
  // User information 
  $sqlq = "SELECT advisor_id, adv_fname, adv_lname, position, dept_name, room_num FROM STUDENT_ADVISOR 
            WHERE advisor_id =" . $id . ";";
  $result = $conn->query($sqlq);
  $num = mysqli_num_rows($result);
  $resArr = array();

  if ($num > 0) {
    while ($item = mysqli_fetch_assoc($result)) {
      $resArr[] = $item;
    }
  }
  echo "<div class='container'>";
echo "<Center><h1>Account no ".$id ."</h1> 
</Center>";

echo"<hr><br> <p> Personal Information</p>";
  echo "<table>";
  echo "<tr><th>Advisor ID</th><th>Advisor First Name</th><th>Advisor Last Name</th><th>Positon</th><th>Department</th><th>Room Number</th></tr>";
  foreach ($resArr as $std) {
    echo "<tr><td> " . $std['advisor_id'] . " </td>" .
      "<td> " . $std['adv_fname'] . " </td>" .
      "<td> " . $std['adv_lname'] . " </td>" .
      "<td> " . $std['position'] . " </td>" .
      "<td> " . $std['dept_name'] . " </td>" .
      "<td> " . $std['room_num'] . " </td></tr>";
  }
  echo "</table>";
  echo "<hr>";
echo " </div>";
  $conn->close();
  ?>


  <br>
  <Center><button class="btn btn-info" style="text-decoration:none"> <a href="admin_home.php">Go back</a> </button></Center>
</div>
</div>
</body>

</html>